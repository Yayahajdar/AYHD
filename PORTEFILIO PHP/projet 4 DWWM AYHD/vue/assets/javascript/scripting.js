$(document).ready(function(){
    $('.menu-tab').click(function(){
      $('.menu-hide').toggleClass('show');
      $('.menu-tab').toggleClass('active');
    });
    $('a').click(function(){
      $('.menu-hide').removeClass('show');
      $('.menu-tab').removeClass('active');
    });
  });

  // -- nav
  
  
  
  
  
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
 
    
  