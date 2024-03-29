<section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <a class="navbar-brand" href="<?php bloginfo('template_directory'); ?>/index.html">
              <span>
                Guarder
              </span>
            </a>
            <p>
              ВАШАТА БЕЗОПАСНОСТ Е НАШАТА ОТГОВОРНОСТ!</p>
              <p>
              Най-добрата защита.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <?php if(!dynamic_sidebar('right-sidebar')): ?>
            <?php endif;?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Контакти
            </h5>
          </div>
          <div class="info_contact">
            <a href="" class="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Булевард България 236А,  Пловдив
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Номер : +359 876003767
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
              guardersecurity@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Новинарник
            </h5>
            <form action="#">
              <input type="email" placeholder="Въведете вашият имейл">
              <button>
                Абонирайте се
              </button>
            </form>

            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <span id="currentYear"></span> Всички Права Са Запазени.
		<a href= "http://localhost/guard/privacy-policy/">Поверителност</a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.4.1.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
  <?php wp_footer(); ?>
</body>

</html>