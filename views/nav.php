<!-- le nav est le nav pour un utilisateur -->
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
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                           <li>
                           <a href="index.php">accueil</a> 
                        </li>
                        
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="./index.php">Archives <br /><strong>LOIRET</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="left top-ul chevron">
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
               </div>
            </div>
         </nav>