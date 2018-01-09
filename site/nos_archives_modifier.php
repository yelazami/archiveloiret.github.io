
<?php 

            $req=$bdd->prepare("SELECT * FROM photographies ");
            $req->execute();
                  
                  while ($donner=$req->fetch()) {
                     ?>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                        <a href="modifier_photographie.php?id_article=<?= $donner['idarticle']; ?>">
                           <?php                           
                              $image=$donner['photographie'];                                               
                              echo "<img src='data:image/*;base64,".base64_encode($image)."'/>  " ; 
                           ?>  
                        </a>    
                  </div>
               </div> 
               <?php                                          
                  }
               ?>
