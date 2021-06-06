<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres', 'root', '');

if(isset($_POST['formconnexion'])){
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) && !empty($mdpconnect)){
        $requser = $bdd->prepare("SELECT *FROM membres WHERE mail = ?  AND motdepasse = ? ");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1){
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header('Location: profil.php?id='.$_SESSION['id']);
        }else{
            $erreur =" Mauvais identifiant ou mot de passe";
        }
    }else{
        $erreur = "Tous les champs doivent etre remplis";
    }
}
?>
<?php include 'incheader.php' ?>
<div class="container">
                
                <div class="row first-row">
                    <div class="cat-header">
                        <h4><strong>Passionés inscrits, accédez à votre compte</strong></h4>
                      <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur 
                        adipisicing elit. Soluta quisquam, voluptatem accusantium vel eius sapiente, fuga quo doloremque, 
                        assumenda voluptas natus ea voluptatibus voluptatum quaerat placeat quis adipisci error in?<br></p> 
                    
                    </div>
                </div>
<hr>

                <div class="row second-row">
                    <div class="sub-cat-card">
                        <h5><strong>J'accède à mon compte</strong></h5>
                        <form action="" method="POST">

                            <h5>Adresse Email</h5>
                            <input type="email" name="mailconnect" placeholder="Mail">

                            <h5>Mot de passe</h5>
                            <input type="password" name="mdpconnect" placeholder="Mot de passe">

                            <br>
                            <input type="submit" name="formconnexion" class="art-btn" value="Se connecter">
                            <br>  

                            <button class="art-btn"><strong><a href="inscription.php">Je créé mon compte</a> </strong></button>
                        </form>
                    </div>

<?php
if(isset($erreur)){
    echo $erreur;
}
?>
                </div>                
    </div>

<?php include 'incfooter.php'?>