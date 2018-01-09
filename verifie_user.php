<?php
session_start();

if (isset($_POST['seconnecter'])) {
	$username=$_POST['Username'];
	$password=$_POST['password'];
	$password=sha1($password);

	if ($username&&$password) {
		$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_21116331_archiveloiret', 'epiz_21116331', 'CSe2oVqq9IyW');	
		$req = $bdd->prepare("SELECT * FROM administrateurs WHERE username='$username' && password='$password'");
        $req->execute();
        $row = $req->rowCount();

		if($row==1){
			$_SESSION['username']=$username;
			header('Location:administrateur.php');
		}
		else{header('Location:index.php');}
	}
}
?>