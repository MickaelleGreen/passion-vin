<footer>

<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
                <h3 class="foot-h3">Passion Vin</h3>
                <p class="foot-p">Découvrir et partager la passion du vin</p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
                <h2 class="foot-h2">Liens utiles</h2>
               <ul>
                    <li><a href="#">A propos</a></li>
                    <li><a href="documents/cgv_cgu.pdf" target="_blank">CGU</a></li>
                    <li><a href="#">Langues</a></li>
               </ul>
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12 segment-three sm-mb-30">
                <h2 class="foot-h2">Suivez nous !</h2>
                <p  class="foot-p">Restons en contact sur les médias sociaux. Ne manquez pas les nouveaux articles ou un nouveau ebook.</p>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>

        </div>
    </div>
</div>
<p class=" foot-p footer-bottom-text">Copyright Micka Green 2020 &copy;. All rights reserved. Logos créés par Graph'Art.</p>
</footer>

<!-- Bannière cookies -->

<?php 
    if(!isset($_COOKIE['accepte-cookie'])){
  ?>      
   
    <div class="banniere">
            <div class="texte-banniere">
                <p>Notre site utilise les cookies pour une meilleure expérience de navigation</p>
            </div>

            <div class="button-banniere">
                <a href="?accepte-cookie">J'ai compris</a>
            </div>
    </div>
<?php  } ?>

</div>
</div>
    
<script>

$(document).ready(function(){
    $(".hamburger .fas").click(function(){
        $(".wrapper").addClass("active");
    });

    $(".close").click(function(){
        $(".wrapper").removeClass("active");
    });
});

</script>

</body>
</html>