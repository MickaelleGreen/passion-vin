<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres', 'root', '');
include 'incheader.php';

if(isset($_GET['id']) && $_GET['id'] > 0){

$getid = intval($_GET['id']);
$requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
$requser->execute(array($getid));
$userinfo = $requser->fetch();
?>


<div class="container">
                
                <div class="row first-row">
                    <div class="cat-header">
                        <h4><strong>Bienvenue sur votre espace personnel</strong></h4>
                      <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur 
                        adipisicing elit. Soluta quisquam, voluptatem accusantium vel eius sapiente, fuga quo doloremque, 
                        assumenda voluptas natus ea voluptatibus voluptatum quaerat placeat quis adipisci error in?<br></p> 
                    
                    </div>
                </div>
<hr>
<h3>Profil de  <?php echo $userinfo['pseudo']; ?></h3>
<br>
<br>

        Pseudo = <?php echo $userinfo['pseudo']; ?>
        <br>
        Mail = <?php echo $userinfo['mail']; ?>
        <br>

        <?php 
        if(isset($_SESSION['id']) && $userinfo['id'] == $_SESSION['id']){ ?>
           <button class="art-btn"><strong> <a href="deconnexion.php">Se déconnecter</a></strong></button>
        <?php }
        ?>

<?php
if(isset($erreur)){
    echo $erreur;
}
?>
</div>

<?php
}
?>

<?php include 'incfooter.php'; ?> 