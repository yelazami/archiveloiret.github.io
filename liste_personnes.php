
<?php 

            $req=$bdd->prepare("SELECT * FROM personnes ");
            $req->execute();
                  
                  while ($donner=$req->fetch()) {
                     ?>
                        <option value="<?= $donner['id_personne']; ?>"> <?php echo "".$donner['nom']; ?></option>
               <?php                                          
                  }
?>