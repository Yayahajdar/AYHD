<?php
var_dump($_GET);
include "pdo.php";
$id=$_GET["id"];
$sql = "DELETE  FROM skillbar  where id_skill= $id";
$requete = $db->query($sql);
// header("Location: profil.php?success=1");
	 echo 'Deleted successfully.';
	 header( "refresh:2; url=profil.php" );
?>
