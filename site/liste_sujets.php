
<?php 

            $req=$bdd->prepare("SELECT * FROM sujets ");
            $req->execute();
                  
                  while ($donner=$req->fetch()) {
                     ?>
                        <option value="<?= $donner['id_sujet']; ?>"> <?php echo "".$donner['nom_sujet']; ?></option>
               <?php                                          
                  }
?>