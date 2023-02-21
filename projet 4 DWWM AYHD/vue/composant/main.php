<div class="container-main" id="scrl1">
    <section class="content-info page" id="home">
        <?php include "mainpag.php"  ?>
    </section>
    <section class="page" id="about">
        
        <?php include "about.php"  ?>
    </section>
    <section class="page" id="experience">
        <?php include "exper.php"  ?>
    </section>


    <section class="page" id="projects">

        <?php include "comp-proj.php"  ?>
    </section>

    <section class="page" id="contacts" >
        <?php include "comp-cont.php"  ?>
    </section>
</div>

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


