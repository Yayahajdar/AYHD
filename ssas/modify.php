<?php
session_start();

require_once "pdo.php";
$username = strip_tags($_POST["username"]);
$email = strip_tags($_POST["email"]);
$descrip= strip_tags($_POST["descrip"]);
$tele= strip_tags($_POST["tele"]);
$location= strip_tags($_POST["location"]);
$email2= strip_tags($_POST["email2"]);

$id = $_SESSION["user"]["id"];

if (!empty($_POST)) {
    if(!empty($username)){
       $sql = "UPDATE users SET username= '$username' where id_user= $id";
$stmt= $db->prepare($sql);
$stmt->execute(); 
    }
    if(!empty($email)){
        $sql = "UPDATE users SET email= '$email' where id_user= $id";
 $stmt= $db->prepare($sql);
 $stmt->execute(); 
     }
      if(!empty($descrip)){
        $sql = "UPDATE users SET descrip= '$descrip' where id_user= $id";
 $stmt= $db->prepare($sql);
 $stmt->execute(); 
     }

      if(!empty($tele)){
        $sql = "UPDATE users SET tele= '$tele' where id_user= $id";
 $stmt= $db->prepare($sql);
 $stmt->execute(); 
     }

      if(!empty($location)){
        $sql = "UPDATE users SET location= '$location' where id_user= $id";
 $stmt= $db->prepare($sql);
 $stmt->execute(); 
     }


      if(!empty($email2)){
        $sql = "UPDATE users SET email2= '$email2' where id_user= $id";
 $stmt= $db->prepare($sql);
 $stmt->execute(); 
     }
echo " you information modified successfully";

     header( "refresh:2; url=profil.php" );

}
