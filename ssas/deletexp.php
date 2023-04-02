<?php
include "pdo.php";
$id=$_GET["id"];
$sql = "DELETE  FROM exper  where exper_id= $id";
$requete = $db->query($sql);
// header("Location: profil.php?success=1");
	 echo 'Deleted successfully.';
	 header( "refresh:3; url=profil.php" )
?>
