<?php 

session_start();
if(!$_SESSION['username']) {

 header('Location:index.php');
}
/*$user=$_SESSION['username'];*/
/*echo "<pre>";
print_r($_POST);
echo "</pre>";
die();*/
if (isset($_POST['inserer_image'])) {     

               $test="test";
               $image = (file_get_contents($_FILES['photographie']['tmp_name'])); 
               $image_name = addslashes($_FILES['photographie']['name']);
               $extensionsValides = array('jpg', 'jpeg', 'png');
                 $extensionUpload = strtolower(substr(strrchr($_FILES['photographie']['name'], '.'), 1));
                 if(in_array($extensionUpload, $extensionsValides))
                    {

                  $bdd = new PDO('mysql:host=127.0.0.1;dbname=archiveloiret', 'root', '');   
                  
                  $req = $bdd->prepare("INSERT INTO fuckingPicture (test,pic) VALUES(?,?)");
                  $req->execute(array($test,$image)); 

                    header('Location:inserer_photographie.php');
               }}
   

?>