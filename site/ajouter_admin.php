<!--
 ce fichier permet à un administrateur de saisir les données de nouveau admin qu'on veut ajouter à notre base de donnée 
pour ce faire , lorsqu'on saisir les donnée on valide le formulaire et on se rederige vers le fichier "add_user.php" qui permet d'inseret les données à notre table
 -->

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
         <!-- CAROUSEL -->  
                  <img src="public/img/loiret4.jpg" alt="">      
                  <div class="carousel-text">
                      <div class="line">
                        <div class="s-12 l-9">
                              <ul class="nav navbar-nav navbar-right">
                                 <div class="row">
                                    <form method="post" action="add_user_admin.php">
                                       <span class="col-sm-9">
                                       <li>
                                          <span class="fa fa-user"><br>
                                          <input type="text" name="Username" class="form-control" placeholder="Username" style="font-family: sans-serif;letter-spacing:1.3px;padding-left:15px;opacity:0.55;" required>
                                          </span>
                                       </li>
                                       </span><br>

                                       <span class="col-sm-9">
                                       <li>
                                          <span class="fa fa-user"><br>
                                          <input type="email" name="Email" class="form-control" placeholder="Email" style="font-family: sans-serif;letter-spacing:1.3px;padding-left:15px;opacity:0.55;" required>
                                          </span>
                                       </li>
                                       </span><br>

                                       <span class="col-sm-9">
                                          <li>
                                             <span class="fa fa-lock"><br>
                                                <input type="password" name="password" class="form-control" placeholder="Password" style="font-family: sans-serif;letter-spacing:1.3px;padding-left:15px;opacity:0.55;" required>
                                             </span>
                                          </li>
                                       </span><br>
                                       <span class="col-sm-9">
                                          <li>
                                             <span class="fa fa-lock"><br>
                                                <input type="password" name="password1" class="form-control" placeholder="Password" style="font-family: sans-serif;letter-spacing:1.3px;padding-left:15px;opacity:0.55;" required>
                                             </span>
                                          </li>
                                       </span>

                                       <span class="col-sm-9" style="text-align:center;">
                                       <br><input name="valider" class="btn btn-primary" type="submit" value="Valider" style="opacity:0.75;">
                                       </span>
                                 </form>

                                 </div>
                              </ul>
                       </div>
                     </div>
                  </div>
                    </div>
      </section>

<!-- ________________________________ end content _________________________________-->

<?php 
   require_once "views/footer.php";
 ?>