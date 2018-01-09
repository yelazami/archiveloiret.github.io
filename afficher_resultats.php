 <?php
      $bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_21116331_archiveloiret', 'epiz_21116331', 'CSe2oVqq9IyW');

      $req = $bdd->prepare(" SELECT  count(c.id_cliche) as nombre , v.nom FROM villes v , photographies p , cliches c WHERE v.id_ville = p.id_ville AND c.id_cliche = p.id_cliche GROUP BY  v.nom");
      $req->execute();


      $req1 = $bdd->prepare(" SELECT  count(idarticle) as nombre_article_couleur FROM photographies WHERE couleur = 'couleur' ");
      $req1->execute();

      $req2 = $bdd->prepare(" SELECT  count(idarticle) as nombre_article_noir_blanc FROM photographies WHERE couleur = 'noir_et_blanc' ");
      $req2->execute();

      $req3 = $bdd->prepare(" SELECT  nom FROM  personnes pe,photographies p WHERE pe.id_personne = p.id_personne");
      $req3->execute();


 ?>

                    <div class="item">
                       <img src='public\img\phot.jpg' /> 

                        <div class="carousel-text">
                           <div class="line">

                              <div id="fourth-block" style="opacity: 0.7;">
            <div class="line">
               <div id="owl-demo2" class="owl-carousel owl-theme">
                  <div class="item">
                     
                     <?php
                           while ($donner=$req->fetch()) {
                              ?>
                              <p class="s-12 m-12 l-8 center">
                              <?php
                           echo "Pour la Ville ".$donner['nom']." y a ".$donner['nombre']." Cliche(s)";
                           ?>
                           </p>
                           <br>
                           <?php
                              }
                           ?>
                  </div>

                  <div class="item">
                     <p class="s-12 m-12 l-8 center">
                     <?php
                           while ($donner=$req1->fetch()) {
                           echo "Pour les Photographies en couleur y a ".$donner['nombre_article_couleur'];
                           ?>
                           </p>
                           <br>
                           <?php
                              }
                           ?>
                  </div>

                  <div class="item">
                     <p class="s-12 m-12 l-8 center">
                     <?php
                           while ($donner=$req2->fetch()) {
                           echo "Pour les Photographies en Noir et Blanc y a ".$donner['nombre_article_noir_blanc'];
                           ?>
                           </p>
                           <br>
                           <?php
                              }
                           ?>
                  </div>

                  <div class="item">
                   <p class="s-12 m-12 l-8 center">Nom des Personnes dans chaque photographie</p> 
                     
                     <?php
                           while ($donner=$req3->fetch()) {
                              ?><p class="s-12 m-12 l-8 center">
                              <?php
                           echo $donner['nom'];
                           ?>
                           </p>
                           <br>
                           <?php
                              }
                           ?>
                  </div>

               </div>
            </div>
         </div>