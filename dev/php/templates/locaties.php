<?php
/*
Template Name: Locaties
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">

					<div class="u-gridRow">					
							<div id="map_canvas"></div>
					</div>

					<div class="u-gridRow">					
						<div class="adress u-gridCol3">
							<div class="adress-info">
								<p class="adres-titel">Theorie City Arnhem</p>
								<p>Hazenkamp 36</p>
								<p>6836 BA Arnhem</p>
								<a target="_Blank" href="https://www.google.nl/maps/dir/Hazenkamp+36,+6836+BA+Arnhem/Hazenkamp+10,+6836+BA+Arnhem/@51.9495394,5.8803373,17z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x47c7a6729c07d2a9:0xbf691d108f059c95!2m2!1d5.8803729!2d51.9494249!1m5!1m1!1s0x47c7a67218d452c7:0x12b910479bd8f152!2m2!1d5.8846128!2d51.9500632">Bekijk route</a>
							</div>
	
						</div>

						<div class="u-gridCol9">
						<h4>Routebeschrijving</h4>
							<p><?php the_field('arnhem'); ?></p>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>

					<div class="u-gridRow">					
							<div id="map_canvas_twee"></div>
					</div>

					<div class="u-gridRow">					
						<div class="adress u-gridCol3">
							<div class="adress-info">
								<p class="adres-titel">Theorie City Utrecht</p>
								<p>Californiëdreef 19</p>
								<p>3565 BJ Utrecht</p>
								<a target="_Blank" href="https://www.google.nl/maps/dir/Californi%C3%ABdreef+19,+3565+BJ+Utrecht/Mississippidreef+151A,+3565+CE+Utrecht/@52.1240567,5.0852214,17z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x47c66e553e298b03:0x174b205557263ccc!2m2!1d5.087698!2d52.1254826!1m5!1m1!1s0x47c66faaeb8f7c35:0x9c9ef15a4ac5e510!2m2!1d5.0871336!2d52.122551">Bekijk route</a>
							</div>
	
						</div>		

						<div class="u-gridCol9">
						<h4>Routebeschrijving</h4>
							<p><?php the_field('utrecht'); ?></p>
						</div>		

					</div> <!-- /gridRow -->


					<div class="hr-style super-margin">
						<hr>
					</div>
					
					<div class="u-gridRow">					
							<div id="map_canvas_drie"></div>
					</div>

					<div class="u-gridRow">					
						<div class="adress u-gridCol3">
							<div class="adress-info">
								<p class="adres-titel">Theorie City Amsterdam</p>
								<p>Moezelhavenweg 29</p>
								<p>1043 AM Amsterdam</p>
								<a target="_Blank" href="https://www.google.nl/maps/dir/Moezelhavenweg+29,+1043+AM+Amsterdam/Naritaweg+150,+1043+CA+Amsterdam/@52.3903725,4.8155496,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x47c5e301d1496b99:0x557e3229f42482b1!2m2!1d4.819248!2d52.3942058!1m5!1m1!1s0x47c5e254e49120a3:0x7891bb67eaca435f!2m2!1d4.8209785!2d52.3880093">Bekijk route</a>
							</div>
	
						</div>		

						<div class="u-gridCol9">
							<h4>Routebeschrijving</h4>
								<p><?php the_field('amsterdam'); ?></p>
						</div>


					</div> <!-- /gridRow -->

					<div class="u-gridRow">						
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

