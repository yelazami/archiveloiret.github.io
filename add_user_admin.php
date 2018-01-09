<?php 
      session_start();
$bdd = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_21116331_archiveloiret', 'epiz_21116331', 'CSe2oVqq9IyW');

if(!$_SESSION['username']) {

 header('Location:index.php');
}
$user=$_SESSION['username'];

if (isset($_POST['valider'])) {
   if ($_POST['password']==$_POST['password1']) {      
               $username=$_POST['Username'];
               $password=$_POST['password'];
               $email=$_POST['Email'];
               $password=sha1($password);

               if ($username&&$password) {
                  $bdd = new PDO('mysql:host=127.0.0.1;dbname=archiveloiret', 'root', '');   
                  $req = $bdd->prepare("INSERT INTO administrateurs (root,username,email,password) VALUES(?,?,?,?)");
                    $req->execute(array(1,$username,$email,$password));
                    header('Location:admin.php');
               }
   }
}
?>