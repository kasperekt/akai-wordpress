<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

    </div>
  </div>
  
  <div class="newsletter-bar">
    <div class="content">
      <div class="content-left">
        Chcesz być na bieżąco informowany o naszych wydarzeniach? Wpisz się na listę: 
        <form action="#" id="newsletter-form">
          <input placeholder="Twój Email" type="text" /> <button id="newsletter-submit">Wyślij</button>
        </form>
      </div>
      <div class="content-right">
        <i id="newsletter-bar-quit" class="fa fa-times"></i>
      </div>
    </div>
  </div>

  <footer class="site-footer">
    <div class="container">
      <section class="copyright">
        &copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>">AKAI</a> <?= "2010 - " . date("Y") ?>
      </section>

      <section class="partners">
        <a href="http://put.poznan.pl/" class="partner">
          <img src="<?php bloginfo('template_directory'); ?>/images/pp.svg" alt="Politechnika Poznańska">
        </a>
        <a href="http://amu.edu.pl/" class="partner">
          <img src="<?php bloginfo('template_directory'); ?>/images/uam.svg" alt="Uniwersytet Adama Mickiewicza">
        </a>
      </section>
    </div>
  </footer>

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  
  <?php wp_footer(); ?>
</body>
</html>
