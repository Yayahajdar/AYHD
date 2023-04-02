<?php
session_start();
include "pdo.php";
if (!empty($_POST)) {
    $id = $_SESSION["user"]["id"];
    $dateexp=strip_tags($_POST["dateexp"]);
    $Titreexp=strip_tags($_POST["Titreexp"]);
    $descexp=strip_tags($_POST["descexp"]);
    $ide=$_GET["id"];
    ?>
    <?php

    if(!empty($Titreexp)    ){
        $sql = "UPDATE exper SET Titreexp ='$Titreexp' where id_exp= '$id' and exper_id ='$ide'";
$stmt= $db->prepare($sql);
$stmt->execute(); 
echo "ok"; 
    }
    if(!empty($descexp)){
       $sql = "UPDATE exper SET descexp= '$descexp' where id_exp= '$id' and exper_id ='$ide'";
$stmt= $db->prepare($sql);
$stmt->execute();  
echo "ok";
    }
    if(!empty($dateexp)){
        $sql = "UPDATE exper SET dateexp= '$dateexp' where id_exp= '$id' and exper_id ='$ide' ";
 $stmt= $db->prepare($sql);
 $stmt->execute();  
 echo "ok";
     }

     
 else {
    echo "not ok ";
}
header( "refresh:5; url=profil.php" );
}
?>