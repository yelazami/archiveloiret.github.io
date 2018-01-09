<?php 
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

      <section>
         <!-- GALLERY --> 	
         <div id="carousel">
                     <div id="owl-demo" class="owl-carousel owl-theme">
                        <?php
                           require_once "afficher_resultats.php";
                        ?>
                     </div>
         </div>
      </section>

<!-- ________________________________ end content _________________________________-->

<?php 
	require_once "views/footer.php";
 ?>