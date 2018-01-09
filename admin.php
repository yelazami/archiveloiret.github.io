<!-- 
le fichier "admin.php" est la page principale d'un administrateur 
 -->

<?php
session_start();
	require_once "views/header.php";
   	require_once "views/header.php";
      echo "</header>";
      if(!empty($_SESSION['username'])) {
		header('Location:administrateur.php');
}
require_once "views/nav.php";
 ?>

 <!-- ________________________________ content _________________________________-->
      <section>
         <!-- CAROUSEL -->  
                  <img src="public/img/loiret3.jpg" alt="">      
                  <div class="carousel-text">
                  	 <div class="line">
                     	<div class="s-12 l-9">
		                     	<ul class="nav navbar-nav navbar-right">
			                        <div class="row">
			                        	<form method="post" action="verifie_user.php">
			                  				<span class="col-sm-8">
				                    			<li>
					                    			<span class="fa fa-user"><br>
					                    			<input type="text" name="Username" class="form-control" placeholder="Username" style="font-family: sans-serif;letter-spacing:1.3px;padding-left:15px;opacity:0.55;" required>
					                    			</span>
				                    			</li>
			                 				</span><br>

			                  				<span class="col-sm-8">
				                      			<li>
					                      			<span class="fa fa-lock"><br>
					                      				<input type="password" name="password" class="form-control" placeholder="Password" style="font-family: sans-serif;letter-spacing:1.3px;padding-left:15px;opacity:0.55;" required>
					                      			</span>
				                      			</li>
			                  				</span>

			                  				<span class="col-sm-8" style="text-align:center;">
			                     			<br><input name="seconnecter" class="btn btn-primary" type="submit" value="Se Connecter">
			                  				</span>
			              				</form>

			                        </div>
		                        </ul>
	                    </div>
                     </div>
                  </div>
      </section>

<!-- ________________________________ end content _________________________________-->

<?php 
	require_once "views/footer.php";
 ?>