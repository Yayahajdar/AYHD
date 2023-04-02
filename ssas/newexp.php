<?php
session_start();
include "pdo.php";
$Err1 = "";
$Err="";
var_dump($_POST);
$id = $_SESSION["user"]["id"];
$dateexp = $_POST["dateexp"];
$Titreexp = $_POST["Titreexp"];
$descexp = $_POST["descexp"];
$stmt = $db->prepare("SELECT * FROM exper WHERE Titreexp = ? and  id_exp='$id' ");
$stmt->execute([$_POST['dateexp']]);
if ($stmt->fetch(PDO::FETCH_ASSOC)) {
    $Err1 = 'You have already this exp!';
    echo $Err1;
   
}
if (!empty($_POST) && empty($Err1) && !empty($dateexp) && !empty($dateexp) && !empty($descexp)) {
    $sql = "INSERT INTO exper (dateexp, Titreexp , descexp ,id_exp )
                         VALUES ('$dateexp', '$Titreexp','$descexp','$id')";
    $query = $db->prepare($sql);
    $query->execute();
    echo 'hi';
}
else {
    $Err="fill all the field";
    echo $Err;
}
header( "refresh:3; url=profil.php" ); ?>