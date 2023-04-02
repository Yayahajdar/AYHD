<?php
session_start();
var_dump($_POST);
var_dump($_SESSION);
include "pdo.php";
if (!empty($_POST)) {
    $id = $_SESSION["user"]["id"];
    $sname= strip_tags($_POST["sname"]);
    $percent=strip_tags($_POST["percent"]);
    $color=strip_tags($_POST["color"]);

    $ids=$_GET["id"];
    $stmt = $db->prepare("SELECT * FROM skillbar WHERE sname = ? and sk_id ='$id' ");
$stmt->execute([$_POST['sname']]);
if ($stmt->fetch(PDO::FETCH_ASSOC)) {
    $Err1 = 'You have already this skill!';
    echo $Err1;
}

    if(!empty($sname) && empty($Err1)){
       $sql = "UPDATE skillbar SET sname= '$sname' where sk_id= '$id' and id_skill='$ids' ";
$stmt= $db->prepare($sql);
$stmt->execute();  
    }
    if(!empty($percent) && empty($Err1)){
       $sql = "UPDATE skillbar SET percent= '$percent' where sk_id= '$id' and id_skill='$ids' ";
$stmt= $db->prepare($sql);
$stmt->execute();  
    }
    if(!empty($color) && empty($Err1)){
       $sql = "UPDATE skillbar SET color='$color' where  sk_id= '$id' and id_skill='$ids'  ";
$stmt= $db->prepare($sql);
$stmt->execute();  
    }
}
header( "refresh:3; url=profil.php" );
?>