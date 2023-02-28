<main>
  <div id="panels">
    <div id="panels-container" style="width: 400%;">
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
      <section class="page" id="contacts">
        <?php include "comp-cont.php"  ?>
      </section>
    </div>
  </div>
</main>

<!-- ========= scripts ========== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollToPlugin.min.js"></script>

<script>
  let panelsSection = document.querySelector("#panels"),
    panelsContainer = document.querySelector("#panels-container"),
    tween;
  document.querySelectorAll(".anchor").forEach(anchor => {
    anchor.addEventListener("click", function(e) {
      e.preventDefault();
      let targetElem = document.querySelector(e.target.getAttribute("href")),
        y = targetElem;
      if (targetElem && panelsContainer.isSameNode(targetElem.parentElement)) {
        let totalScroll = tween.scrollTrigger.end - tween.scrollTrigger.start,
          totalMovement = (panels.length - 1) * targetElem.offsetWidth;
        y = Math.round(tween.scrollTrigger.start + (targetElem.offsetLeft / totalMovement) * totalScroll);
      }
      gsap.to(window, {
        scrollTo: {
          y: y,
          autoKill: false
        },
        duration: 1
      });
    });
  });

  /* Panels */
  const panels = gsap.utils.toArray("#panels-container .page");
  tween = gsap.to(panels, {
    xPercent: -100 * (panels.length - 1),
    ease: "none",
    scrollTrigger: {
      trigger: "#panels-container",
      pin: true,
      start: "top top",
      scrub: 1,
      snap: {
        snapTo: 1 / (panels.length - 1),
        inertia: false,
        duration: {
          min: 0.1,
          max: 0.1
          
        }


      },
      end: () => "+=" + (panelsContainer.offsetWidth - innerWidth)
      
    }
    
  });
  
</script>
