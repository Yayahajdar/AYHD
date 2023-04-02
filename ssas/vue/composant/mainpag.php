<?php
if (isset($_SESSION["user"])): ?>
<?php 
  $id = $_SESSION["user"]["id"];

  $sql = "SELECT * from users where `id_user`= $id ";
  $query = $db->prepare($sql);
  $query->execute();
  $util = $query->fetch();
?>
<div class="main-page">

<div class="ho-tex">
  <h1>
    Hello World..!
  </h1>
  <h1>
    I am <?php echo $util['username']; ?>
  </h1>
  <h2>Développeur Web full Stack..</h2>
</div>

<div class="ho-im">
  <img src="<?php echo $util['img']; ?>" alt="">
</div>

</div>

    <?php else : ?>
      <div class="main-page">

<div class="ho-tex">
  <h1>
    Hello World..!
  </h1>
  <h1>
    I am username
  </h1>
  <h2>Développeur Web full Stack..</h2>
</div>

<div class="ho-im">
  <img src="Images/1.jpg" alt="">
</div>

</div>

    <?php endif; ?>
