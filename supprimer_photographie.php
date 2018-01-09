
<?php 
session_start();
if(!$_SESSION['username'])
 header('Location:index.php'); 

$user=$_SESSION['username'];

if (isset($_GET['id_article'])) { 
$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_21116331_archiveloiret', 'epiz_21116331', 'CSe2oVqq9IyW');
            $idarticle = $_GET['id_article'];

                  $req = $bdd->prepare("DELETE FROM photographies WHERE idarticle = ? ");

                  $req->execute(array($idarticle)); 

                    header('Location:supprimer.php');
               }


?>