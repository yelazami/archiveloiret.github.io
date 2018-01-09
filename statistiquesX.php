<!-- 
le fichier "admin.php" est la page principale d'un administrateur 
 -->

<?php
	require_once "views/header.php";
   //	require_once "views/header.php";
      echo "</header>";
   
require_once "views/nav.php";
 ?>

 <!-- ________________________________ content _________________________________-->
 <?php require_once "afficher_statistiques.php" ?>
      <section>
         <!-- CAROUSEL -->  
                  <img src="public/img/phot.jpg" alt="">      
                  <div class="carousel-text">
                  	 <div class="line">
                     	<div class="s-12 l-9">
		                     	<ul class="nav navbar-nav navbar-right">
			                        <div class="row">
			                        	<button class="btn btn-success"> le nombre d'enregistrement est :<?= $count[0] ?> </button>

			                        	<table class="table table-striped table-bordered table-hover" id="myTable" style="text-align:center;opacity:0.8;">
			                        	<thead>
			                        		<tr>
				                        		<td>idarticle</td>
				                        		<td>reference</td>
				                        		<td>note_de_page</td>
				                        		<td>fichier_numerique</td>
				                        		<td>nbr_cliche</td>
				                        		<td>negative_ou_inversible</td>
				                        		<td>couleur</td>
				                        		<td>remarque</td>
				                        		<td>description</td>
				                        		</tr>

			                        	</thead>
			                        	<tbody>
			                        		
			                        		<?php  
			                        		 foreach ($data as $key => $value) {
			                        		 echo "<tr>";
			                        			echo "<td>$value->idarticle</td>";
			                        			echo "<td>$value->reference</td>";
			                        			echo "<td>$value->note_de_page</td>";
			                        			echo "<td>$value->fichier_numerique</td>";
			                        			echo "<td>$value->nbr_cliche</td>";
			                        			echo "<td>$value->negative_ou_inversible</td>";
			                        			echo "<td>$value->couleur</td>";
			                        			echo "<td>$value->remarque</td>";
			                        			echo "<td>$value->description</td>";
			                        		echo "</tr>";
			                        		} ?>
			                        		
			                        	</tbody>


			                        	</table>


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