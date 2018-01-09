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
 <?php require_once "prestatistique.php" ?>
      <section>
         <!-- CAROUSEL -->  
                       
                 
                  	 <div class="line">
                  	 	<div class="col-md-12">
                  	 		
                  	 		<div class="col-md-8">

                  	 			<br> <br>
                  	 			<br><br><br><br>
                  	 			<div class="col-md-8 col-md-offset-7">

                  	 				<button class="alert alert-info"> <?= $count[0] ?> est nombre d'enregistrement ! </button>
                  	 				<br><br><br>
                  	 			</div>
			                        	<table id="myTable" class="uk-table uk-table-hover uk-table-striped" cellspacing="0" width="100%">
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
                  	 		<div class="col-md-2"></div>
                  	 	</div>        	
                     </div>

              
      </section>

<!-- ________________________________ end content _________________________________-->

 <!-- FOOTER -->   

<?php 
	require_once "views/footer.php";
 ?>