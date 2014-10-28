<?php
/*
Template Name: Contactpage
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
						<div class="adress u-gridCol6">
							<div class="adress-info">
								<p>Theorie City</p>
								<p>Californiëdreef 19</p>
								<p>3565 BJ Utrecht</p>
								<p>Email: rijschooladem@gmail.com</p>
								<p>Tel: 0654603807</p>
							</div>
	
						</div>					
						<div class="u-gridCol6">
							<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
							<?php the_content(); ?>
						
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>

					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>
					<div class="u-gridRow adress-map ">						
							<div id="map_canvas"></div>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

