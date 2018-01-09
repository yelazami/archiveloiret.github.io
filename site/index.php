<?php 
$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_21116331_archiveloiret', 'epiz_21116331', 'CSe2oVqq9IyW');

if(empty($_SESSION['username'])) {
      // header 
      require_once "views/header.php";

      require_once "views/nav.php";
      echo "</header>";
}
else{
      $user=$_SESSION['username'];
   // header 
      require_once "views/header.php";

      require_once "views/nav_admin.php";
      echo "</header>";
} 

 ?>

 <!-- ________________________________ content _________________________________-->
      <section>
         <!-- CAROUSEL -->  	
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
               <?php
                  require_once "afficher_contenu.php";
               ?>
            </div>
         </div>
         <!-- GALLERY --> 	
         <div id="third-block">
            <div class="line">
               <h2>visualisations de statistiques</h2>
               <p class="subtitile">
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3 left">
                     <a href="statistiques.php">
                        <img src="public/img/statistique.png" alt="alternative text">
                     </a> <br>     
                     <h4 style="letter-spacing:2px;">Statistiques</h4>
                  </div>
                  <div class="s-12 m-6 l-3 right">
                     <a href="resultats.php">
                        <img src="public/img/resultats.png" alt="alternative text">
                     </a> <br>     
                     <h4 style="letter-spacing:2px;">Résultats</h4>
                  </div>
               </div>
            </div>
         </div>


 <!-- SECOND BLOCK -->  
         <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 l-8 center">
               <h1>Nos archives</h1>
                        <p class="margin-bottom"></p>          
                     </article>
                  </div>
               </div>
            </div>
         </div>



         <div id="third-block">
            <div class="line">
               <p class="subtitile">
               </p>
                  <?php
                     require_once "nos_archives.php";
                  ?>
            </div>
         </div>

      </section>

<!-- ________________________________ end content _________________________________-->

<?php 
	require_once "views/footer.php";
 ?>