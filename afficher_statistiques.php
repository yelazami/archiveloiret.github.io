<?php
	$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_21116331_archiveloiret', 'epiz_21116331', 'CSe2oVqq9IyW');
	$sql = "SELECT ph.idarticle,ph.reference,ph.date_photographie,ph.note_de_page,ph.fichier_numerique,ph.nbr_cliche,ph.negative_ou_inversible,ph.couleur,ph.remarque,ph.description,
		v.nom,p.nom,p.nom,p.description_personne,s.nom_sujet,c.taille
			FROM photographies ph, villes v, personnes p, sujets s, cliches c
			where ph.id_cliche=c.id_cliche and ph.id_ville=v.id_ville and ph.id_personne=p.id_personne and ph.id_sujet=s.id_sujet limit 500";
	
/*			$sql="SELECT ph.idarticle,ph.reference,ph.date_photographie,ph.note_de_page,ph.fichier_numerique,ph.nbr_cliche,ph.negative_ou_inversible,ph.couleur,ph.remarque,ph.description
				from photographies ph
				";*/
	$sth=$bdd->prepare($sql);
	$sth->execute();
	$data = $sth->fetchAll(PDO::FETCH_OBJ);
	
	$sql ="select count(*) from photographies ";
	$st=$bdd->prepare($sql);
	$st->execute();
	$count = $st->fetch();

	/*echo "<pre>";
		print_r($data);
	echo "</pre>";
	*/

?>