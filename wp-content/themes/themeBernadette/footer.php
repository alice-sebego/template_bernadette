</div>
  <footer class="bg-primary text-white mt-5">
    <div class="container-fluid">
      <div class="row pb-3 pt-4 shadow-sm rounded">
        <div class="col-2">
          <img src="https://cdn.svgporn.com/logos/bunny-net-icon.svg" alt="" width="100">
        </div>
        <div class="col-5 ">
          <nav class="navbar navbar-expand-lg navbar-dark d-inline-block align-middle">
          <?php wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'navbar-nav me-auto mb2 mb-lg-0 text-white'
          ]) ?>
          </nav>
        </div>
        <div class="col-5">
          <div class="col">
          <?= get_search_form() ?>
        </div>
        </div>
      </div>
      <div class="row pt-2 pb-3 shadow-sm rounded">
        <div class="col">
          <h3 class="text-center">Suivez-nous</h3>
          <div class="row">
            <div class="d-flex justify-content-center">
              <a href="#"><img src="https://icon-library.com/images/twitter-icon-white/twitter-icon-white-9.jpg" alt="" width="50"></a>
              <a href="#"><img src="https://icon-library.com/images/twitter-icon-white/twitter-icon-white-9.jpg" alt="" width="50"></a>
              <a href="#"><img src="https://icon-library.com/images/twitter-icon-white/twitter-icon-white-9.jpg" alt="" width="50"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-3 pb-3">
        <div class="col">
          <p class="text-center ">Copyright <?php echo date('Y') ?> - <?php bloginfo('name') ?></p>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer()
  ?>

</body>
</html>