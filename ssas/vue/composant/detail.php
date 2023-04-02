<link rel="stylesheet" href="./vue/assets/project.css">

<?php

$id = $_GET["id"];
require "pdo.php";
var_dump($id);
$sql = "SELECT * FROM projects WHERE projets_id = $id";
$requete = $db->prepare($sql);

$requete->execute();

$project = $requete->fetch();
?>
<div class="popup" id="myPopup">
  <div class="popup-inner">
    <div class="popup-photo">
      <img src="<?= $project["img"] ?>" alt="">
    </div>
    <h5><?= $project["date"] ?></h5>
    <div class="popup-text">
      <h1><?= strip_tags($project["Titre"]); ?></h1>
      <p><?= $project["ful_desc"] ?>
      </p>
      <h5><?= $project["author"] ?></h5>
    </div>
    <a class="popup-close" href="#">X</a>
  </div>
</div>