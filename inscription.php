
<?php
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres', 'root', '');

if(isset($_POST['forminscription'])){

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);

    if(!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mail2']) && !empty($_POST['mdp']) && !empty($_POST['mdp2'])){
 
        $pseudolength = strlen($pseudo);
        if($pseudolength <= 255){
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                if($mail == $mail2){
                    $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
                    $reqmail->execute(array($mail));
                    $mailexist = $reqmail->rowCount();
                    if($mailexist == 0){
                                    if($mdp == $mdp2){
                                        $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                                        $insertmbr->execute(array($pseudo, $mail, $mdp));
                                        $erreur = "Votre compte a bien été crée <a href=\"connexion.php\">Me connecter</a>";
                                    }else{
                                        $erreur = "Les mots de passes ne sont pas identiques";
                                    }
                        }else{
                            $erreur = "Adressee mail déjà utilisée";
                        }
                    }else {
                        $erreur = "Votre mail n'est pas valide";
                    }
                }else{
                    $erreur = "Les mails ne sont pas identiques";
                }
                    }else {
                        $erreur= "Votre pseudo est trop long";
                    }
            }else { 
                $erreur = "Tous les champs doivent être remplis";
    }
}

?>
<?php include 'incheader.php' ?>
<div class="container">
                
                <div class="row first-row">
                    <div class="cat-header">
                        <h4><strong>Passionés du vin, rejoignez-nous !</strong></h4>
                      <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur 
                        adipisicing elit. Soluta quisquam, voluptatem accusantium vel eius sapiente, fuga quo doloremque, 
                        assumenda voluptas natus ea voluptatibus voluptatum quaerat placeat quis adipisci error in?<br></p> 
                    
                    </div>
                </div>
<hr>

                <div class="row second-row">
                    <div class="sub-cat-card">
                    <h5><strong>Je créé mon compte</strong></h5>
                   
<form method="POST" action="">
                            <label for="pseudo">Pseudo</label>
                            <br>
                            <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo">
                            <br>

                            <label for="mail">Mail</label>
                            <br>
                            <input type="email" placeholder="Votre mail" id="mail" name="mail">
                            <br>

                            <label for="mail2">Confirmation mail</label>
                            <br>
                            <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2">
                            <br>

                            <label for="mdp">Mot de passe</label>
                            <br>
                            <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp">
                            <br>

                            <label for="mdp2">Confirmation mot de passe</label>
                            <br>
                            <input type="password" placeholder="Confirmez votre mot de passe" id="mdp2" name="mdp2">
                            <br>
           

                            <br>
                          <input type="submit" name="forminscription" value="Je m'inscris" class="art-btn"></strong> 
                            <br> 

                            <button class="art-btn"><strong><a href="connexion.php">J'ai déjà un compte</a></strong></button>
                        
</form>

    <?php

    if(isset($erreur)){
        echo $erreur;
    }
    ?>
                    </div>
                </div>                
</div>

<?php include 'incfooter.php' ?>