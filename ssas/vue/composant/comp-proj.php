<link rel="stylesheet" href="../assets/styleproj.css">
<script src="js.js"></script>

<?php
if (isset($_SESSION["user"])): ?>

  <?php 
 $id = $util["id_user"];
$sql = "SELECT * FROM projects where projects.proid=$id order by date";
$requete = $db->query($sql);
$projets = $requete->fetchAll();
?>
<div class="pro-con">
  <div class="hs__wrapper">
    <div class="hs__header">
      <h1 class="hs__headline"> MES PROJETS
      </h1>
      <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
    </div>
    <ul class="hs">
      <li class="hs__item">
        <div class="hs__item__image__wrapper">

          <?php foreach ($projets as $projet) : ?>

            <div class="c">
              <img src="<?= $projet["imgpro"] ?>">
              <div class="cc">
                <div class="CCC">
                  <h2><?= $projet["Titre"] ?></h2>
                </div>
                <div>
                  <span><?= $projet["date"] ?><br>
                  <p><?= $projet["descriptif"] ?></p>
                </div>
                <?php
              
              $id = $projet["projets_id"];
              ?>
              <div class="det">
                <h5><?= $projet["author"] ?></span> </h5>
             
                </div>
              <a type="button" class="btnpro" href="#mypopup?id=<?= $id ?>"> voir plus </a>
              </div>
              
            </div>
          
            <div class="popup" id="mypopup?id=<?= $id ?>">
              <div class="popup-inner">
                <div class="popup-photo">
                  <img src="<?= $projet["imgpro"] ?>" alt="">
                </div>
                <h5><?= $projet["date"] ?></h5>
                <div class="popup-text">
                  <h1><?= strip_tags($projet["Titre"]); ?></h1>
                  <p><?= $projet["ful_desc"] ?>
                  </p>
                  <h5><?= $projet["author"] ?></h5>
                </div>
                <a class="popup-close" href="#">X</a>
              </div>
            </div>



          <?php endforeach; ?>
        </div>
      </li>
    </ul>
  </div>
</div>
<?php else : ?>
<div class="pro-con">
  <div class="hs__wrapper">
    <div class="hs__header">
      <h1 class="hs__headline"> MES PROJETS
      </h1>
      <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
    </div>
    <ul class="hs">
      <li class="hs__item">
        <div class="hs__item__image__wrapper">
            <div class="c">
              <img src="Images/1.png">
              <div class="cc">
                <div class="CCC">
                  <h2>   Titre   </h2>
                </div>
                <div>
                  <p> descriptif </p>
                </div>
                <?php
              ?>
              <div class="det">
                <h5> author </h5>
             
                </div>
              <a type="button" class="btnpro" href="#mypopup"> voir plus </a>
              </div>
              
            </div>
          
            <div class="popup" id="mypopup">
              <div class="popup-inner">
                <div class="popup-photo">
                  <img src="Images/1.png" alt="">
                </div>
                <h5> date </h5>
                <div class="popup-text">
                  <h1> Titre </h1>
                  <p> ful_desc 
                  </p>
                  <h5> author</h5>
                </div>
                <a class="popup-close" href="#">X</a>
              </div>
            </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<?php endif; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js"></script>

<script>

</script>

<script>
  // work in progress )
  var instance = $(".hs__wrapper");
  $.each(instance, function(key, value) {

    var arrows = $(instance[key]).find(".arrow"),
      prevArrow = arrows.filter('.arrow-prev'),
      nextArrow = arrows.filter('.arrow-next'),
      box = $(instance[key]).find(".hs"),
      x = 0,
      mx = 0,
      maxScrollWidth = box[0].scrollWidth - (box[0].clientWidth / 2) - (box.width() / 2);

    $(arrows).on('click', function() {

      if ($(this).hasClass("arrow-next")) {
        x = ((box.width() / 2)) + box.scrollLeft() - 10;
        box.animate({
          scrollLeft: x,
        })
      } else {
        x = ((box.width() / 2)) - box.scrollLeft() - 10;
        box.animate({
          scrollLeft: -x,
        })
      }

    });

    $(box).on({
      mousemove: function(e) {
        var mx2 = e.pageX - this.offsetLeft;
        if (mx) this.scrollLeft = this.sx + mx - mx2;
      },
      mousedown: function(e) {
        this.sx = this.scrollLeft;
        mx = e.pageX - this.offsetLeft;
      },
      scroll: function() {
        toggleArrows();
      }
    });

    $(document).on("mouseup", function() {
      mx = 0;
    });

    function toggleArrows() {
      if (box.scrollLeft() > maxScrollWidth - 10) {
        // disable next button when right end has reached 
        nextArrow.addClass('disabled');
      } else if (box.scrollLeft() < 10) {
        // disable prev button when left end has reached 
        prevArrow.addClass('disabled')
      } else {
        // both are enabled
        nextArrow.removeClass('disabled');
        prevArrow.removeClass('disabled');
      }
    }

  });
</script>















































<!-- 

<div class="pro-con">
  <div class="left-project">
    <div class="container-projet">
      <div class="proj-s">
        <a class="button" href="#projet1">projet1</a>

      </div>
      <div class="popup" id="projet1">
        <div class="popup-inner">
          <div class="popup-photo">
            <img src="./Images/SC-Project-Icon.png" alt="">
          </div>
          <div class="popup-text">
            <h1>Projet 1</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ex velit, viverra non vulputate
              vitae,
            </p>
          </div>
          <a class="popup-close" href="#">X</a>
        </div>
      </div>
      <a class="button" href="#projet2">projet2</a>
      <div class="popup" id="projet2">
        <div class="popup-inner">
          <div class="popup-photo">
            <img src="./Images/bac.png" alt="">
          </div>
          <div class="popup-text">
            <h1>projet 2</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ex velit, viverra non vulputate
              vitae,
            </p>
          </div>
          <a class="popup-close" href="#">X</a>
        </div>
      </div>

      <a class="button" href="#projet3">projet3</a>
      <div class="popup" id="projet3">
        <div class="popup-inner">
          <div class="popup-photo">
            <img src="./Images/color-abstract-axmbacking.jpg" alt="">
          </div>
          <div class="popup-text">
            <h1>Projet 3</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ex velit, viverra non vulputate
              vitae,
              blandit vitae nisl. Nullam fermentum orci et erat viverra bibendum. Aliquam sed varius nibh, vitae
              mattis
            </p>
          </div>
          <a class="popup-close" href="#">X</a>
        </div>
      </div>

      <a class="button" href="#gal">photos
      </a>
      <div class="popup" id="gal">
        <div class="popup-inner">
          <div class="popup-text">
            <h1>yahya</h1>
          </div>MY gallrey
          <a class="popup-close" href="#">X</a>
        </div>
      </div>
    </div>

  </div>
  <div class="right-project">
    <div class="container-skill">
      <div>
        <H3>CODAGE</H3>
      </div>
      <div class="flex">
        <h5>HTML:</h5>
        <div class="bar">
          <div class="inbar1"></div>
        </div>
        <h5>70%</h5>
      </div>

      <div class="flex">
        <h5>CSS:</h5>
        <div class="bar">
          <div class="inbar2"></div>
        </div>
        <h5>60%</h5>
      </div>

      <div class="flex">
        <h5>JS:</h5>
        <div class="bar">
          <div class="inbar3"></div>
        </div>
        <h5>30%</h5>
      </div>
      <div class="flex">
        <h5>php:</h5>
        <div class="bar">
          <div class="inbar4"></div>
        </div>
        <h5>60%</h5>
      </div>
      <div class="flex">
        <h5>C++</h5>
        <div class="bar">
          <div class="inbar5"></div>
        </div>
        <h5> 70%</h5>
      </div>

    </div>

    <div class="container-skill2">
      <div>
        <H3>Other</H3>
      </div>
      <div class="flex">
        <h5>windows:</h5>
        <div class="bar">
          <div class="inbar1"></div>
        </div>
        <h5>70%</h5>
      </div>

      <div class="flex">
        <h5>MacOS:</h5>
        <div class="bar">
          <div class="inbar2"></div>
        </div>
        <h5>60%</h5>
      </div>

      <div class="flex">
        <h5>linux:</h5>
        <div class="bar">
          <div class="inbar3"></div>
        </div>
        <h5>30%</h5>
      </div>
      <div class="flex">
        <h5>PS:</h5>
        <div class="bar">
          <div class="inbar4"></div>
        </div>
        <h5>60%</h5>
      </div>
      <div class="flex">
        <h5>office</h5>
        <div class="bar">
          <div class="inbar5"></div>
        </div>
        <h5> 70%</h5>
      </div>

    </div>


  </div>

</div> -->