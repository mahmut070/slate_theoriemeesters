	<div class="footer-top">
		<div class="u-gridContainer">
                <div class="u-gridCol6">
					         <a href="/home"><img class="logo-footer" src="<?php echo get_stylesheet_directory_uri();?>/img/logo-footer.png"></a>
                </div>
                <div class="u-gridCol3">
                	<div class="social-button">
						        <a target="_blank" href="https://nl-nl.facebook.com/rijschooladem.nl"><img src="<?php echo get_stylesheet_directory_uri();?>/img/svg/facebook.svg"></a>
                	</div>
                </div>
                <div class="u-gridCol3">
                	<div class="betaal-informatie">
						        <img class="ideal" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/ideal.svg">
                	</div>
                </div>
		</div>
	</div>


	<div class="Footer">
		<div class="u-gridContainer">


			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
                <div class="u-gridCol6">
        					<h4 class=" widgettitle">Locaties</h4>
        					<p>Hazelkamp 36, 6836 BA Arnhem. (Gratis parkeren!)<p>
        					<p>Californiëdreef 19, 3565 BJ Utrecht. (Gratis parkeren!)</p>
        					<p>Moezelhavenweg 29, 1043 AM Amsterdam. (Gratis parkeren!)</p>
                </div>
                <div class="u-gridCol3">
        					<h4 class=" widgettitle">Informatie</h4>
        					<p>KVK nummer: 34225586</p>
        					<p>BTW: NL146409929B01</p>
                  <p>Rijschoolnummer: 3526X8</p>
                </div>
                <div class="u-gridCol3">
				        	<?php dynamic_sidebar( 'footer-widgets' ); ?>
                </div>
			<?php endif; ?>
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank" class="footer-link">LokaalGevonden</a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script> 
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/add-classes-to-product.js"></script> 
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ga.js"></script> 
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/change-text.js"></script> 
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
