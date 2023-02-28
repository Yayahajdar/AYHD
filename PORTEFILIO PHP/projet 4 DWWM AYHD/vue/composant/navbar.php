<div class="wmenu" id="navigation">
      <nav class="menu-con navbar " id="act">
        <ul class="navbar-nav">
          <li><a class="nav-link anchor active"  href="#home"    >HOME <i class="fa fa-home"></i></a></li>
          <li><a class="nav-link  anchor" href="#about" >ABOUT <i class="fa fa-user-circle"></i></a></li>
          <li><a  class="nav-link anchor " href="#experience"  >EXPERINCE <i class="fa fa-graduation-cap"></i></a></li>
          <li><a class="nav-link anchor " href="#projects"  >PROJECT <i class="fa fa-briefcase"></i></a></li>
          <li><a class="nav-link anchor" href="#contacts"  >CONTACT <i class="fa fa-envelope-open"></i></a></li>
        </ul>

      </nav>
    </div>
  
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
  // $(window).scroll(function () {
  //   var distance = $(window).scrolltop();
  //   $("section").each(function (i) {

  //     if ($(this).position().offset().top
  //       <= distance + 60) {

  //       $(".navbar-nav a.active")
  //         .removeClass("active");

  //       $(".navbar-nav a").eq(i)
  //         .addClass("active");
  //     }
  //   });
  // }).scroll();

  
</script>
