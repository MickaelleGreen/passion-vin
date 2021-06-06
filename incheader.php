<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();  
    }; ?>

<?php 
if(isset($_GET['accepte-cookie'])){
    setcookie('accepte-cookie', 'true', time() + 365*24*3600);
    header('Location:./');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/favicon_vin.png" />
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Crimson+Text|Lora|Montserrat&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">  
    <script src="https://kit.fontawesome.com/118aaba51a.js" crossorigin="anonymous"></script>
    <title>Passion Vin</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162163815-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-162163815-1');
    </script>

</head>
<body>
    
<div class="wrapper">

    <div class="sidebar">

        <div class="sidebar_inner">
            
            <div class="profile_info">
                <a href="index.php"><div class="profile_img">
                   <img src="./logos/logoblanc500par144px.png" alt="logo pic"> 
                </a></div>
            </div>



            <ul class="sidebar_menu active">
                <li>
                    <a href="degustation.php" class="active">
                        <div class="icon"><i class="fas fa-wine-glass-alt"></i></div>
                        <div class="title">Déguster</div>
                    </a>
                </li>

                <li>
                    <a href="choisir.php" class="active">
                        <div class="icon"><i class="fas fa-bullseye"></i></div>
                        <div class="title">Choisir - Servir</div>
                    </a>
                </li>

                <li>
                    <a href="annuaire.php" class="active">
                        <div class="icon"><i class="fas fa-book-open"></i></div>
                        <div class="title">Rechercher</div>
                    </a>
                </li>

                <li>
                    <a href="vignobles.php" class="active">
                        <div class="icon"><i class="fas fa-chess-rook"></i></div>
                        <div class="title">Vignobles</div>
                    </a>
                </li>

                <li>
                    <a href="secrets.php" class="active">
                        <div class="icon"><i class="fas fa-mask"></i></div>
                        <div class="title">Secrets de vigne</div>
                    </a>
                </li>

                <li>
                    <a href="blog.php" class="active">
                        <div class="icon"><i class="fas fa-feather-alt"></i></div>
                        <div class="title">Blog</div>
                    </a>
                </li>

                <li>
                    <a href="fiches_pdf.php" class="active">
                        <div class="icon"><i class="fas fa-file-pdf"></i></div>
                        <div class="title">Fiches - EBOOKS</div>
                    </a>
                </li>
            </ul>
            <!--end of sidebar content-->
        </div>
    </div>


<!--Main container-->
    <div class="main-container">


        <!-- TOP NAVBAR -->
        <div class="top_navbar">

            <div class="hamburger">
                <div class="hamburger_inner">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="close"><i class="fas fa-times"></i></div>
            </div>
            
            <div class="grape_index"><a href="index.php"><img src="./logos/logo-mobile500.png" alt="Home" style="height: 30px;"></a></div>
            <h4 class="subtitle"><a href="index.php">Découvrir le vin, partager une passion</a></h4>
           

            <!-- RIGHT SIDE sign up/in and search-->

            <ul class="right_bar">
              <!--  <li><i class="fas fa-search"></i></li> -->
                 
        <?php if (isset($_SESSION['id'])){?>

            <li><a href="deconnexion.php"> <i class="fas fa-sign-out-alt"></i></a></li>
        <?php }else{ ?>

<li><a href="connexion.php"> <i class="fas fa-sign-in-alt"></i></a></li>
        <?php } ?>
            
            </ul>
        </div>
