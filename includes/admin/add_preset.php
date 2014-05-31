<h1 class="page-header">Preset administration</h1>
<?php include 'includes/mysql.php';
    /* On se connecte est on récupérer tous les preset deja existant que l'on affiche dans un tableau */
    $preset = $connect->query('SELECT * FROM preset'); ?>
<h2 class="sub-header">Available Presets</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Preset Name</th>
                <th>Lenght</th>
                <th>Port numb</th>
                <th>CPU</th>
                <th>Freq</th>
                <th>RAM</th>
                <th>HDD</th>
                <th>GPU</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($fetched = $preset->fetch()){?>
            <tr>
                <td><?php echo $fetched['name']; ?></td>
                <td><?php echo $fetched['lenght']; ?></td>
                <td><?php echo $fetched['number_port']; ?></td>
                <td><?php echo $fetched['cpu']; ?></td>
                <td><?php echo $fetched['frequence']; ?></td>
                <td><?php echo $fetched['ram']; ?></td>
                <td><?php echo $fetched['hard_drive']; ?></td>
                <td><?php echo $fetched['gpu']; ?></td>
            </tr>
        <?php } 
        $preset->closeCursor();?>
        </tbody>
    </table>
</div> <!-- /table-responsive-->

<h2 class="sub-header">Add preset</h2>










