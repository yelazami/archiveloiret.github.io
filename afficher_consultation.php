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

$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_21116331_archiveloiret', 'epiz_21116331', 'CSe2oVqq9IyW');

            $id=$_GET['id_article'];
            $req=$bdd->prepare("SELECT * FROM photographies where idarticle= ?");
            $req->execute(array($id));

            ?>
         <section>
            <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
            <?php
                  
                  while ($donner=$req->fetch()) {
                     ?>
                     <div class="item">
                       
                        <?php                           
                              $image=$donner['photographie'];
                              $ville=$donner['id_ville'];
                              $requete=$bdd->prepare("SELECT nom from villes where id_ville = ?");
                              $requete->execute(array($ville));
                              while ($city=$requete->fetch()) {
                                 $town=$city['nom'];
                              }                                               
                              echo "<img src='data:image/*;base64,".base64_encode($image)."'/>  " ; 
                        ?>      
                        <div class="carousel-text">
                           <div class="line">
                              <div class="s-12 l-9">
                                 <p>Archive Loiret
                                 </p>
                              </div>
                              <div class="s-12" style="opacity:0.5;">
                                 <?php echo "<h2>".$donner['date_photographie']."</h2>"; ?>
                                 <?php echo "<h2>".$town."</h2>"; ?>
                                 <?php echo "<h2>".$donner['remarque']."</h2>"; ?>
                                 <?php echo "<h2>".$donner['description']."</h2>"; ?>
                              </div>


                             </div>
                        </div>
                     </div>
               <?php                                          
                  }
               ?>

            </div>
         </div>
      </section>
<?php 
   require_once "views/footer.php";
 ?>