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
                <th>Description</th>
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
                <td><?php echo $fetched['description']; ?></td>
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

<h2 class="sub-header">Add a preset</h2>
<form role="form" method="post" action="includes/admin/act_add_preset.php">
    <div class="form-group">
        <label for="presetName">Preset Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter the preset name">
    </div>
    <div class="form-group">
        <label for="description">Descrition</label>
        <input type="text" class="form-control" name="description" placeholder="Description, Keep it short ;-)">
    </div>
    <!-- -->
     <table class="table table-striped">
        <thead>
            <tr>
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
            <tr>
                <td>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="lenght">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="number_port">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="cpu">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="frequence">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="ram">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="hard_drive">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="gpu">
                        </label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
<button type="submit" class="btn btn-default">Add</button>
</form>












