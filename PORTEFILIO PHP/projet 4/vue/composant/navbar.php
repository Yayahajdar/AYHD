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




  $(window).scrollTop(function () {
  
    var distance = $(window).scrollTop();
    $(".page").each(function (i) {
      if ($(this).position().offset().top
        <= distance + 1500) {

        $(".navbar-nav a.active")
          .removeClass("active");

        $(".navbar-nav a").eq(i)
          .addClass("active");
      }
    });
  }).scroll();




  
  
</script>