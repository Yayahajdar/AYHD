<?php
session_start();
include "pdo.php";
$Err1 = "";
$Err="";
$id = $_SESSION["user"]["id"];
$sname = $_POST["sname"];
$percent = $_POST["percent"];
$color = $_POST["color"];
$stmt = $db->prepare("SELECT * FROM skillbar WHERE sname = ? and sk_id ='$id' ");
$stmt->execute([$_POST['sname']]);
if ($stmt->fetch(PDO::FETCH_ASSOC)) {
    $Err1 = 'You have already this skill!';
    echo $Err1;
}
if (!empty($_POST) && empty($Err1)&& !empty($sname) && !empty($percent) && !empty($color)) {

    $sql = "INSERT INTO skillbar (sname, percent , color ,sk_id )
                         VALUES ('$sname', '$percent','$color','$id')";
    $query = $db->prepare($sql);
    $query->execute();
    echo "new skill has been  created ";
}
else {
    $Err="fill all the fields";
echo $Err;
}
header( "refresh:2; url=profil.php" );
?>