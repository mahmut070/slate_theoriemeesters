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
						<div class="adress u-gridCol3">
							<div class="adress-info">
								<p>Theoriemeesters</p>
								<p>Hazelkamp 36</p>
								<p>6836 BA Arnhem</p>
							</div>
	
						</div>

						<div class="u-gridCol3">
							--
						</div>

						<div class="adress-map u-gridCol6">
							<div id="map_canvas"></div>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>


					<div class="u-gridRow">					
						<div class="adress u-gridCol3">
							<div class="adress-info">
								<p>Theoriemeesters</p>
								<p>Californiëdreef 19</p>
								<p>3565 BJ Utrecht</p>
							</div>
	
						</div>		

						<div class="u-gridCol3">
							--
						</div>		

						<div class="adress-map u-gridCol6">
							<div id="map_canvas_twee"></div>
						</div>

					</div> <!-- /gridRow -->


					<div class="hr-style super-margin">
						<hr>
					</div>


					<div class="u-gridRow">					
						<div class="adress u-gridCol3">
							<div class="adress-info">
								<p>Theoriemeesters</p>
								<p>Moezelhavenweg 29</p>
								<p>1043 AM Amsterdam</p>
							</div>
	
						</div>		

						<div class="u-gridCol3">
							--
						</div>

						<div class="adress-map u-gridCol6">
							<div id="map_canvas_drie"></div>
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

