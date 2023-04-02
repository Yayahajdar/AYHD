<?php

session_start();
include 'pdo.php';
var_dump($_SESSION);
$id = $_SESSION["user"]["id"];
$username = $_SESSION["user"]["username"];
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$confirmnewpassword = $_POST['confirmnewpassword'];

$query= $db->prepare("SELECT * FROM users WHERE username='$username'");
$query->execute(); 
$user = $query->fetch();
var_dump($user);
?>
<?php
 
 
 if (!password_verify($_POST["password"],$user["pass"])) {
    die("pad pass");
  } 

else{
        if($newpassword==$confirmnewpassword){
            $newpassword = password_hash($_POST["newpassword"], PASSWORD_DEFAULT);
        $sql=$db->query("UPDATE users SET pass='$newpassword' where username='$username'"); 
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
    }
    header( "refresh:2; url=profil.php" )
     ?>
 