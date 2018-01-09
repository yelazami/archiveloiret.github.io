
<?php 

            $req=$bdd->prepare("SELECT DISTINCT * FROM cliches ");
            $req->execute();
                  
                  while ($donner=$req->fetch()) {
                     ?>
                        <option value="<?= $donner['id_cliche']; ?>"> <?php echo "".$donner['taille']; ?></option>
               <?php                                          
                  }
?>