<?php
include "conection.php";
?>

<div class="wnav">
  <nav class="navga">
    <ul>
      <?php if (!isset($_SESSION["user"])) : ?>
        <li><a id="log" href="#"> <i class="fa-solid fa-right-to-bracket"></i></i>Connexion</a></li>
        <li><a href="./vue/composant/inscription.php"> <i class="fa-solid fa-pen-to-square"></i>Inscription</a></li>
      <?php else : ?>
        <li class="define"> <a href="profil.php"> <i class="fa-solid fa-user"></i>bonjour <?= $_SESSION["user"]["username"] ?></a> </li>
        <li> <a href="./vue/composant/deconnexion.php"><i class="fa-solid fa-right-from-bracket"></i> deconnxion</a></li>
      <?php endif; ?>
    </ul>
  </nav>
</div>

<script>
  var modal = document.getElementById("lon-in");

  // Get the button that opens the modal
  var btn = document.getElementById("log");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on the button, open the modal
  btn.onclick = function() {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>

