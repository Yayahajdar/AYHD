<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
var_dump($_GET);
include "pdo.php";
$id=$_GET["id"];
$sql = "DELETE  FROM projects  where projets_id= $id";
$requete = $db->query($sql);

echo " <script>
Swal.fire(
  'Good job!',
  'projet deleted successfully ',
  'success'
)</script>";

header( "refresh:3; url=profil.php" )
?>
