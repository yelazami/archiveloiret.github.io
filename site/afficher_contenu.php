<?php 

            $req=$bdd->prepare("SELECT * FROM photographies ");
            $req->execute();
                  
                  while ($donner=$req->fetch()) {
                     ?>
                     <div class="item">
                       
                        <?php                           
                              $image=$donner['photographie'];                                                
                              echo "<img src='data:image/*;base64,".base64_encode($image)."'/>  " ; 
                        ?>      
                        <div class="carousel-text">
                           <div class="line">
                              <div class="s-12 l-9">
                                 <p>Archive Loiret
                                 </p>
                              </div>
                              <div class="s-12 l-9">
                                 <?php echo "<h2>".$donner['date_photographie']."</h2>"; ?> </div>
                             </div>
                        </div>
                     </div>
               <?php                                          
                  }
               ?>