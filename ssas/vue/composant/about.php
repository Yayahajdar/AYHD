<?php
if (isset($_SESSION["user"])) : ?>

  <?php
  $id = $_SESSION["user"]["id"];

  $sql = "SELECT *  from users where id_user= $id ";
  $query = $db->prepare($sql);
  $query->execute();
  $util = $query->fetch();
  ?>

  <div class="row" id="details1">
    <div class="bord">
      <div class="about-text">
        <div class="tit">
          <h4>ABOUT ME </h4>
        </div>
        <div class="container2">
          <div class="profile">
            <div class="image" style="background-image: url('<?php echo $util['img']; ?>')">
            </div>
            <h2><?php echo $util['username']; ?></h2>
            <p><?php echo $util['descrip']; ?></p>
          </div>
        </div>
      </div>

    <?php else : ?>
      <div class="row" id="details1">
        <div class="bord">
          <div class="about-text">
            <div class="tit">
              <h4>ABOUT ME </h4>
            </div>
            <div class="container2">
              <div class="profile">
                <div class="image">
                </div>
                <h2> full user name</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              </div>
            </div>
          </div>

        <?php endif; ?>

        <div class="skill-con">

          <h1>MY SKILL :</h1><br>
          <?php
          if (isset($_SESSION["user"])) : ?>

            <?php
            $id = $util["id_user"];
            $sql = "SELECT * FROM skillbar where sk_id=$id";
            $requete = $db->query($sql);
            $skills = $requete->fetchAll();
            ?>
            <?php foreach ($skills as $skill) : ?>
              <div class="skillbar clearfix " data-percent="<?= $skill['percent'] ?>%">
                <div class="skillbar-title" style="background: #d35400;"><span><?= $skill['sname'] ?></span></div>
                <div class="skillbar-bar" style="background:<?= $skill['color'] ?>;"></div>
                <div class="skill-bar-percent"><?= $skill['percent'] ?>%</div>
              </div>
            <?php endforeach; ?>
          <?php else : ?>
            <div class="skillbar clearfix " data-percent="35%">
              <div class="skillbar-title" style="background: #d35400;"><span> HTML5</span></div>
              <div class="skillbar-bar" style="background: #e67e22;"></div>
              <div class="skill-bar-percent">35%</div>
            </div> 
          <?php endif; ?>
        </div>

        </div>
      </div>

      <script>
        jQuery(document).ready(function() {
          jQuery('.skillbar').each(function() {
            jQuery(this).find('.skillbar-bar').animate({
              width: jQuery(this).attr('data-percent')
            }, 3000);
          });
        });
      </script>