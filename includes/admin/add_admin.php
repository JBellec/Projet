<h1 class="page-header">Add Admin</h1>
<?php include 'includes/mysql.php';
    /* On se connecte est on récupérer tous les utisateur deja existant que l'on affiche dans un tableau */
    $users = $connect->query('SELECT * FROM user'); ?>
<h2 class="sub-header">Available Presets</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Pseudo</th>
                <th>Name</th>
                <th>First Name</th>
                <th>Mail</th>
                <th>Is Admin</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($fetched = $users->fetch()){?>
            <tr>
                <td><?php echo $fetched['id']; ?></td>
                <td><?php echo $fetched['pseudo']; ?></td>
                <td><?php echo $fetched['name']; ?></td>
                <td><?php echo $fetched['lastname']; ?></td>
                <td><?php echo $fetched['email']; ?></td>
                <td><?php echo $fetched['admin']; ?></td>
            </tr>
        <?php } 
        $users->closeCursor();?>
        </tbody>
    </table>
</div> <!-- /table-responsive-->

<div class="col-md-6">
    <h2 class="sub-header">Promote User to Admin</h2>
    <form role="form" method="post" action="includes/admin/act_add_admin.php">
        <div class="form-group">
            <label for="userPseudo">User Pseudo</label>
            <input type="text" class="form-control" name="pseudo" placeholder="Enter the user's pseudo do promote">
        </div>
        <button type="submit" class="btn btn-primary">Add Admin</button>
    </form>
</div>

<div class="col-md-6">
    <h2 class="sub-header">Remove Admin right</h2>
    <form role="form" method="post" action="includes/admin/act_del_admin.php">
        <div class="form-group">
            <label for="userPseudo">User Pseudo</label>
            <input type="text" class="form-control" name="pseudo" placeholder="Remove right to this pseudo">
        </div>
        <button type="submit" class="btn btn-primary">Remove Admin</button>
    </form>
</div>
