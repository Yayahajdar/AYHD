<!DOCTYPE html>
<html>

<head>
  <title>yahya portfolio</title>
  <meta lang="en,fr">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src=".//assets/javascript/scripting.js"></script>
  <link rel="stylesheet" href="./vue/assets/style.css">
  <link rel="stylesheet" href="./vue/assets/exper.css">
  <link rel="stylesheet" href="./vue/assets/project.css">
  <link rel="stylesheet" href="./vue/assets/style_nav.css">
  <link rel="stylesheet" href="./vue/assets/contact.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic'
    rel='stylesheet' type='text/css'>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

</head>

<body>
  <!-- HEADER FIXE -->
  <header>
    <div>
      <nav class="side-navbar" id="sidebar">
        <ul class="nav flex-column">
          <li class="nav-header">
            <h3>Menu :</h3>
          </li>
          <a href="#">
            <li class="nav-link">
              <i class="fa fa-home"></i>
              <span>HOME</span>
            </li>
          </a>
          <a href="#">
            <li class="nav-link">
              <i class="fa fa-user-circle"></i>
              <span>ABOUT</span>
            </li>
          </a>
          <a href="#">
            <li class="nav-link">
              <i class="fa fa-briefcase"></i>
              <span>EXPERINCE</span>
            </li>
          </a>
          <a href="#">
            <li class="nav-link">
              <i class="fa fa-braille"></i>
              <span>PROJECT</span>
            </li>
          </a>
          <a href="#">
            <li class="nav-link">
              <i class="fa fa-envelope-open"></i>
              <span>Contact</span>
            </li>
          </a>
        </ul>
        <div class="foot-ico nav-link">
          <div class="social-ms">
            <a href="#"><i class="bx bxl-linkedin text-white"></i></a>
            <a href="#"><i class="bx bxl-instagram-alt text-white"></i></a>
            <a href="#"><i class="bx bxl-twitter px-2 text-white"></i></a>
            <a href="#"><i class="bx bxl-facebook text-white"></i></a>

          </div>
        </div>
    </div>
    </nav>
    <div class="burger-container">
      <div class="nav-btn top-navbar">
        <a class="btn" id="menu-btn"><i class="bx bx-menu"></i></a>
      </div>
    </div>
    </div>
    <ul>
      <li class="logo">
        <img src="./Images/logo.png" alt="" class="im"> <a href="#"></a>
      </li>
    </ul>
  </header>
  <!-- PANNEAU SCROLL -->
  <div class="container-main" id="scrl1">
    <section class="content-info page" id="home">
      <div>
        <div class="ho-im">
          <img src="./Images/y.png" alt="">
        </div>
        <div class="ho-tex">
          <h1>
            Hello World..!
          </h1>
          <h1>
            I am YAHYA
          </h1>
          <h2>Dévoppeur Web full Stack..</h2>
        </div>
      </div>
    </section>
    <section class="page" id="about">
      <div class="row" id="details1">
        <div class="bord">
          <div class="about-text">
            <div class="tit">
              <h4>ABOUT ME </h4>
            </div>
            <div class="sub-tit">
              <h5>HI I  am yahya </h5>
              <p>I burn in syria,
                I graduated from Aleppo University as an Informatics Engineer,
My passion for computer science did not end, and I studied IT at the University of Aleppo

I trained as a web developer in France - Blois
                
              </p>
            </div>
          </div>
          <div class="imge">
            <img src="./Images/Sans titre-1.png">
          </div>
        </div>
      </div>
    </section>
    <section class="page" id="experience">
      <div class="row">
        <div class="container-switch" id="">
          <div class="slider__warpper">
            <div class="container-flex flex--dep flex-active" data-slide="1">
              <div class="item-flex item-flex--left">
                <div class="flex__content">
                  <div class="time-dep">
                    <ul class="timeline">
                      <li>
                        <div class="direction-l">
                          <div class="flag-wrapper">
                            <span class="flag">CCI campus</span>
                            <span class="time-wrapper"><span class="time">2022 - 2023</span></span>
                          </div>
                          <div class="desc">WDDM</div>
                        </div>
                      </li>
                      <li>
                        <div class="direction-r">
                          <div class="flag-wrapper">
                            <span class="flag">Université d’Alep, Syrie</span>
                            <span class="time-wrapper"><span class="time">2008 - 2013</span></span>
                          </div>
                          <div class="desc">Systèmes informatiques et d’information dans le commerce,
                            l’économie et la comptabilité</div>
                        </div>
                      </li>


                      <li>
                        <div class="direction-l">
                          <div class="flag-wrapper">
                            <span class="flag">Université d’AlMaomon,Syrie</span>
                            <span class="time-wrapper"><span class="time">2003 - 2006</span></span>
                          </div>
                          <div class="desc">Ingénierie des systèmes informatiques</div>
                        </div>
                      </li>


                      <li>
                        <div class="direction-r">
                          <div class="flag-wrapper">
                            <span class="flag">Université d’Alep, Syrie</span>
                            <span class="time-wrapper"><span class="time">2000 - 2002</span></span>
                          </div>
                          <div class="desc">Institut de génie informatique</div>
                        </div>
                      </li>

                    </ul>
                  </div>
                </div>
                <p class="back-text">Mes diplômes</p>
              </div>
              <div class="item-flex item-flex--right"></div>
            </div>
            <div class="container-flex flex--exp animate--start" data-slide="2">
              <div class="item-flex item-flex--left">
                <div class="flex__content">
                  <ul class="timeline">
                    <li>
                      <div class="direction-l">
                        <div class="flag-wrapper">
                          <span class="flag">Association de solidarité sociale</span>
                          <span class="time-wrapper"><span class="time">2012-2013</span></span>
                        </div>
                        <div class="desc">Technicien informatique</div>
                      </div>
                    </li>
                    <li>
                      <div class="direction-r">
                        <div class="flag-wrapper">
                          <span class="flag">Le Croissant Rouge syrien</span>
                          <span class="time-wrapper"><span class="time">2012 - 2013</span></span>
                        </div>
                        <div class="desc">Statisticien</div>
                      </div>
                    </li>


                    <li>
                      <div class="direction-l">
                        <div class="flag-wrapper">
                          <span class="flag">Hôpital Al Kindi, Alep,Syrie </span>
                          <span class="time-wrapper"><span class="time">2019 – 2020</span></span>
                        </div>
                        <div class="desc">Gestion du site internet du musée numérique Les Micro-folies,
                          Maintenance des ordinateurs portables
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="direction-r">
                        <div class="flag-wrapper">
                          <span class="flag">Gérant de magasin de publicité </span>
                          <span class="time-wrapper"><span class="time">2000-2003 / 2005-2008 </span></span>
                        </div>
                        <div class="desc">Création d’affiches ,
                          Design</div>
                      </div>
                    </li>

                  </ul>


                </div>
                <p class="back-text">Mon exprérience</p>
              </div>
              <div class="item-flex item-flex--right"></div>
            </div>
            <div class="container-flex flex--beno animate--start" data-slide="3">
              <div class="item-flex item-flex--left">
                <div class="flex__content">
                  <ul class="timeline">
                    <li>
                      <div class="direction-l">
                        <div class="flag-wrapper">
                          <span class="flag">Maison de Bégon - Blois</span>
                          <span class="time-wrapper"><span class="time">2012-2013</span></span>
                        </div>
                        <div class="desc">Technicien informatique</div>
                      </div>
                    </li>
                    <li>
                      <div class="direction-r">
                        <div class="flag-wrapper">
                          <span class="flag">les Restaurants du Cœur</span>
                          <span class="time-wrapper"><span class="time">2019 -2020</span></span>
                        </div>
                        <div class="desc">Traducteur Anglais / Arabe , Organiser les étagères</div>
                      </div>
                    </li>


                    <li>
                      <div class="direction-l">
                        <div class="flag-wrapper">
                          <span class="flag"> France terre d’asile –Créteil </span>
                          <span class="time-wrapper"><span class="time">2019</span></span>
                        </div>
                        <div class="desc">Traducteur Anglais / Arabe</div>
                      </div>
                    </li>

                  </ul>

                </div>
                <p class="back-text">Bénévolats</p>
              </div>
              <div class="item-flex item-flex--right"></div>
            </div>
            <div class="container-flex flex--cv animate--start" data-slide="4">
              <div class="item-flex item-flex--left">
                <div class="flex__content">
                  <img src="./Images/YAHYA CV .png" alt="">
                </div>
                <p class="back-text">CV </p>
              </div>
              <div class="item-flex item-flex--right"></div>
              <a href="./Images/YAHYA CV  (2).pdf" class="download-btn">
                <span>
                  Download
                  <i class="fa fa-download"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="slider-nav">
            <a href="#" class="slide-nav st-btn active1" data-slide="1">Mes diplômes </a>
            <a href="#" class="slide-nav st-btn" data-slide="2">Mon exprérience</a>
            <a href="#" class="slide-nav st-btn " data-slide="3">Bénévolats</a>
            <a href="#" class="slide-nav st-btn" data-slide="4">Mon CV </a>
          </div>

        </div>
      </div>
    </section>
    <section class="page" id="projects">
      <div class="left-project">
        <div class="container-projet">
          <div class="proj-s">
            <img src="">
            <a class="button" href="#projet1">projet 1</a>

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
          <a class="button" href="#projet2">projet 2</a>
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

          <a class="button" href="#projet3">projet 3</a>
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

    </section>
    <section class="page" id="contacts">

      <div class="contact1">
        <div class="contact1">
          <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
              <span class="contact1-form-title">
                Get in touch
              </span>
              <img src="./Images/call.png" alt="IMG">
            </div>

            <form class="contact1-form validate-form">

              <div class="wrap-input1 validate-input" data-validate="Name is required">
                <input class="input1" type="text" name="name" placeholder="Name">
                <span class="shadow-input1"></span>
              </div>

              <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input class="input1" type="text" name="email" placeholder="Email">
                <span class="shadow-input1"></span>
              </div>

              <div class="wrap-input1 validate-input" data-validate="Subject is required">
                <input class="input1" type="text" name="subject" placeholder="Subject">
                <span class="shadow-input1"></span>
              </div>

              <div class="wrap-input1 validate-input" data-validate="Message is required">
                <textarea class="input1" name="message" placeholder="Message"></textarea>
                <span class="shadow-input1"></span>
              </div>

              <div class="container-contact1-form-btn">
                <button class="contact1-form-btn">
                  <span>
                    Send Email
                    <i class="fa fa-send" aria-hidden="true"></i>
                  </span>
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>

    </section>
  </div>


  <!-- SOCIAL MEDIA FIXE -->
  <nav class="social">
    <ul>
      <li><a href="http:/www.facebook.com"> <i class="fa fa-facebook"> </i> facebook</a></li>
      <li><a href="http:/www.twitter.com"> <i class="fa fa-twitter"> </i> Twitter</a></li>
      <li><a href="http:/www.instagram.com"> <i class="fa fa-instagram"></i> instagram</a></li>
      <li><a href="http:/www.linkedin.com"> <i class="fa fa-linkedin"></i>Linkedin</a></li>

    </ul>
  </nav>
  <!-- FOOTER FIXE -->
  <footer class="bottom" id="">
    <div class="wmenu" id="navigation">
      <nav class="menu-con navbar " id="act">
        <ul class="navbar-nav">
          <li><a href="#home" class="nav-link active">HOME <i class="fa fa-home"></i></a></li>
          <li><a href="#about" class="nav-link ">ABOUT <i class="fa fa-user-circle"></i></a></li>
          <li><a href="#experience" class="nav-link ">EXPERINCE <i class="fa fa-graduation-cap"></i></a></li>
          <li><a href="#projects" class="nav-link ">PROJECT <i class="fa fa-briefcase"></i></a></li>
          <li><a href="#contacts" class="nav-link ">CONTACT <i class="fa fa-envelope-open"></i></a></li>
        </ul>
      </nav>
    </div>
    <div class="footer-infos">
      <ul class="row-infos">
        <li><a href="#">copyright</a></li>
        <li><a href="#">contact</a></li>
        <li><a href="#">voir les projets</a></li>
        <li><a href="#">mentions légales</a></li>
      </ul>
    </div>
    <div class="wnav">
      <nav class="navga">
        <ul>
          <li><a href=" #"> <i class="fa fa-angle-double-left"></i> précédente </a></li>
          <li><a href="#"> <i class="fa fa-angle-double-right"></i> suivante</a></li>
        </ul>
      </nav>
    </div>

  </footer>

</body>

<script>
  // ....................scroling............
  window.onload = () => {
    document.onwheel = customScrollFunction;

    function customScrollFunction(event) {

      let deltaY = event.deltaY;
      let deltaYSign = Math.sign(deltaY);

      if (deltaYSign == -1) {
        document.getElementById("scrl1").scrollBy({
          top: 0,
          left: -169,
          behavior: 'auto'
        });

      } else {
        document.getElementById("scrl1").scrollBy({
          top: 0,
          left: 169,
          behavior: 'auto'
        });
      }

    }
  }


</script>
<!--.. buger menu......... -->
<script>
  var menu = document.querySelector("#menu-btn");
  var bar = document.querySelector("#sidebar");
  var container = document.querySelector(".burger-container");
  menu.addEventListener("click", () => {
    bar.classList.toggle("active-nav");
    container.classList.toggle("active-cont");
  });
</script>
<!-- contact  -->
<script src="./assets/javascript/contact.js"></script>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src="./script.js"></script>


<!-- active -->
<script>

  /* changing active link on clicking */
  var btns =
    $("#navigation .navbar-nav .nav-link");

  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
      var current = document
        .getElementsByClassName("active");

      current[0].className = current[0]
        .className.replace(" active", "");

      this.className += " active";
    });
  }

  // active link on Scrolling 
  $(window).scroll(function () {
    var distance = $(window).scrollLeft();
    $(".page").each(function (i) {

      if ($(this).position().offset().left
        <= distance + 1499) {

        $(".navbar-nav a.active")
          .removeClass("active");

        $(".navbar-nav a").eq(i)
          .addClass("active");
      }
    });
  }).scroll();


</script>
<!-- exper -->

<script>
  $('.slide-nav').on('click', function (e) {
    e.preventDefault();
    // get current slide
    var current = $('.flex-active').data('slide'),
      // get button data-slide
      next = $(this).data('slide');

    $('.slide-nav').removeClass('active1');
    $(this).addClass('active1');

    if (current === next) {
      return false;
    } else {
      $('.slider__warpper').find('.container-flex[data-slide=' + next + ']').addClass('flex--preStart');
      $('.flex-active').addClass('animate--end');
      setTimeout(function () {
        $('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex-active');
        $('.animate--end').addClass('animate--start').removeClass('animate--end flex-active');
      }, 800);
    }
  });
</script>

</html>