<footer>
  <div class="footer">
  <div class="company-ico">
          <a href="index.php"><picture>
            <source
              media="(max-width: 934px)"
              srcset="assets/logo-text-white.png"
            />
            <source
              media="(min-width: 935px)"
              srcset="assets/logo-text-white.svg"
            />
            <img
              src="assets/logo-text-white.svg"
              alt="logo:sph technologies"
              style="height: 85px"
            />
          </picture></a>
        </div>
        <hr class="foot-hr" />
        <div class="company-dis">
          Meet Section 508  regulations  by ensuring that<br />
          all of your user  have equal  access  to  your<br />
           documentation, irrespective of their ability
        </div>
        <hr class="foot-hr" />
        <div class="useful-links">
          <span style="font-size: 20px; font-weight: bold">Useful Links</span
          ><br />
          <a href="<?php if ($currentPage == 'index') echo '#'; else echo 'index.php';?>" class="footer-links">Home</a><br />
          <a href="<?php if ($currentPage == 'services') echo '#'; else echo 'services.php';?>" class="footer-links">Services</a><br />
          <a href="<?php if ($currentPage == 'whychooseus') echo '#'; else echo 'whychooseus.php';?>" class="footer-links">Why Choose Us</a
          ><br />
          <a href="<?php if ($currentPage == 'aboutus') echo '#'; else echo 'aboutus.php';?>" class="footer-links">About Us</a><br />
          <a href="<?php if ($currentPage == 'contactus') echo '#'; else echo 'contactus.php';?>" class="footer-links">Contact Us</a>
        </div>
        <hr class="foot-hr" />
        <div class="contact-info">
          <a
            href="tel:+91-8851393486"
            style="text-decoration: none; color: white"
            ><img
              src="assets/phone.svg"
              alt="telephone icon"
              class="footer-ico" />
            +91-8851393486 <br
          /></a>
          <a
            href="mailto:info@sphtechnologies.com"
            style="text-decoration: none; color: white"
            ><img
              src="assets/envelope.svg"
              alt="mail-icon"
              class="footer-ico"
            />
            info@sphtechnologies.com</a
          >
        </div>
  </div> 
        <div id="developerContact">
          <div class="dev-info">Design & Developed with &#10084; by <a href="//linktr.ee/maahidevendra"><img src="assets/maahidevendra.png" alt="MaahiDevendra"></a></div>
        </div>
      </footer>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
      $(window).on("load", function () {
        $(".loader").fadeOut();
        $("#preloder").delay(100).fadeOut("slow");
      });
      function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
    </script>
    <script>
      AOS.init();
    </script>
  </body>
</html>