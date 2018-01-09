
<?php 

            $req=$bdd->prepare("SELECT * FROM villes ");
            $req->execute();
                  
                  while ($donner=$req->fetch()) {
                     ?>
                        <option value="<?= $donner['id_ville']; ?>"> <?php echo "".$donner['nom']; ?></option>
               <?php                                          
                  }
?>