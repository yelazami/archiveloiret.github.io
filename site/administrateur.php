<?php 
      session_start();
$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_21116331_archiveloiret', 'epiz_21116331', 'CSe2oVqq9IyW');

if(!$_SESSION['username']) {

 header('Location:index.php');
}
$user=$_SESSION['username'];

   	// header 
   	require_once "views/header.php";

      require_once "views/nav_admin.php";
      echo "</header>";
 ?>
 <!-- ________________________________ content _________________________________-->
      <section>
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
               <div class="item">
                  <img src="public/img/loiret1.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 ">
                           <h2 style="opacity:0.6;">Bienvenue <span style="color:#2fcbe0;"><?php echo $_SESSION['username']; ?></span> dans votre espace Administrateur</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>Que voulez vous faire Aujourd'hui ?
                           </p>
                        </div>
                     </div>
                  </div> 
               </div>
            </div>
         </div>


                  <!-- FIRST BLOCK -->    
         <div id="first-block">
            <div class="line">
               <h2>Mes Operations</h2>
               <br>
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <a style="text-decoration:none;" href="ajouter_photographie.php"><i class="icon-plus icon2x"></i> </a>
                     <h3>Ajouter</h3>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <a style="text-decoration:none;" href="supprimer.php"><i class="icon-minus icon2x"></i></a>
                     <h3>Supprimer</h3>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <a style="text-decoration:none;" href="modifier.php"><i class="icon-pen icon2x"></i></a>
                     <h3>Modifier</h3>
                  </div>

                  <?php
                          $bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_21116331_archiveloiret', 'epiz_21116331', 'CSe2oVqq9IyW');  
                          $req = $bdd->prepare("SELECT * FROM administrateurs WHERE root=? and username = ?");
                              $req->execute(array(0,$_SESSION['username']));
                              $row = $req->rowCount();

                          if($row==1){
                          ?>
                              <div class="s-12 m-6 l-3 margin-bottom">
                                 <a style="text-decoration:none;" href="ajouter_admin.php"><i class="icon-user icon2x"></i></a>
                                 <h3>Adminer</h3>
                              </div>
                          <?php
                        }
                        ?>
               </div>
            </div>
         </div>
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
         <!-- GALLERY --> 	
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