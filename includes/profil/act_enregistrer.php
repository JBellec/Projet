<?php
/*connexion a la bdd*/    
 include '../mysql.php';
     $description = filter_input(INPUT_POST, 'description');
     $titre = filter_input(INPUT_POST, 'titre');
     $pseudoactuel = filter_input(INPUT_POST, 'pseudoactuel');
	 if(isset($_POST['titre'])&&isset($_POST['description'])&&isset($_POST['pseudoactuel']))
	 {
				 echo 'ligne 14';
					/*ajout de ce qu'on a reçu*/
					echo 'on ajoute';
					$req= $connect->prepare('UPDATE user SET titre = :nvtitre, description=:nvdescription WHERE pseudo = :pseudoactuel');
					$req->execute(array(
						   'nvtitre'=>$titre,
						   'nvdescription'=>$description,
						   'pseudoactuel'=>$pseudoactuel
						   ));
					
					if($_FILES['image']['error'] > 0)
					{
						echo 'erreur de transfert de l\'image';
					}
					
					/* traitement de l'image reçue */
					
						//1. strrchr renvoie l'extension avec le point (« . »).
						//2. substr(chaine,1) ignore le premier caractère de chaine.
						//3. strtolower met l'extension en minuscules.
					$extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
					$nom_img=$_POST['titre'];
					$nom = "img/{$nom_img}.{$extension_upload}";
					$resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
					$image= $nom;
					
					if ($resultat)
					{
						echo 'transfert réussi !';
						
				       $req = $connect->prepare('UPDATE user set image = :nvimage  WHERE pseudo =:pseudoactuel');
				       $req->execute(array(
					      'nvimage' => $image,
					      'pseudoactuel'=>$pseudoactuel,
					      ));
				        header('location:../../profil.php');
				        echo 'La photo a bien été ajouté !';


					}
					else
					{
						echo 'echec du transfert de l\'image';
					}	
      }
else
{
	echo 'il faut remplir tous les champs ! =)';
}
?>
