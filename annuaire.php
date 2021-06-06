
<?php include 'incheader.php'?>
<?php
$bdd = new PDO('mysql:dbname=cave_vins;host=localhost;charset=utf8', 'root', '');

$vins = $bdd->query('SELECT nom_vin, CONCAT( description) AS concatenation FROM vins ORDER BY id DESC');

if(isset($_GET['q']) AND !empty($_GET['q'])) {
    $q = htmlspecialchars($_GET['q']);
    $vins = $bdd->query('SELECT nom_vin, CONCAT( description) AS concatenation FROM vins WHERE nom_vin LIKE "%' .$q. '%" ORDER BY id DESC');
}
?>

<div class="container">
                
                <div class="row first-row">
                    <div class="cat-header">
                        <h4><strong>Rechercher un vin</strong></h4>
                      <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur 
                        adipisicing elit. Soluta quisquam, voluptatem accusantium vel eius sapiente, fuga quo doloremque, 
                        assumenda voluptas natus ea voluptatibus voluptatum quaerat placeat quis adipisci error in?<br></p> 
                    
                    </div>
                </div>
<hr>

<form method="GET">
    <input type="search" name="q" placeholder="recherche ..." class="input-style">
    <input type="submit" value="Valider" class="art-btn">
</form>

    <ul>
        <?php while($a = $vins->fetch()){ ?>
            <li><?= $a['nom_vin'] ?> - <?= $a['concatenation'] ?></li>
        <?php } ?>
    </ul>
                 
    </div>



<?php include 'incfooter.php'?>