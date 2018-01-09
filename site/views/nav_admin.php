<!-- nav1 est le nav pou un administrateur -->

<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=archiveloiret', 'root', '');


?>

<!-- /. NAV SIDE  -->

         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a href="./index.php">Archives <br /><strong> LOIRET </strong></a>
                  </div>                  
                  <p class="nav-text">Custom menu text</p>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                     		<?php
                          $bdd = new PDO('mysql:host=127.0.0.1;dbname=archiveloiret', 'root', '');  
                          $req = $bdd->prepare("SELECT * FROM administrateurs WHERE root=? and username = ?");
                              $req->execute(array(0,$_SESSION['username']));
                              $row = $req->rowCount();

                          if($row==1){
                          ?>
                            <li>
                              <a href="ajouter_admin.php">Ajouter Admin</a>
                            </li>
                          <?php
                        }else{
                          ?>
                            <li>
                              <a href="index.php">Home</a>
                            </li>
                          <?php
                        }
                          ?>
                           <li>
                           <a>Lister par des critères</a>         
                           <ul>
                              <li><a href="statistiques.php">Statistiques</a>
                              </li>
                             <li>
                                <a href="resultats.php">resultats </a>
                            </li>
                           </ul>
                        </li>
                        
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="./index.php">Archives <br /><strong>LOIRET</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class=" top-ul chevron">
                        <li>
                           <a>Opération</a>         
                           <ul>
                              <li>
                                  <a href="ajouter_photographie.php"> insérer </a>
                              </li>
                              <li>
                                  <a href="modifier.php"> modifier </a>
                              </li>
                               <li>
                                <a href="supprimer.php"> Supprimer </a>
                            </li>
                           </ul>
                        </li>
                        <li><a style="text-align:right;" href="logout.php">Deconnection</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>