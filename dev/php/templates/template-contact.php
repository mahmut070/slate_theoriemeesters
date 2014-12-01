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
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<b>Theorie City</b>
								<p>Tel: 06 54 60 38 07</p></br>

								<p>Locatie Arnhem</p>
								<p>Hazelkamp 36</p>
								<p>6836 BA Arnhem</p></br>

								<p>Locatie Utrecht</p>
								<p>Californiëdreef 19</p>
								<p>3565 BJ Utrecht</p></br>

								<p>Locatie Amsterdam</p>
								<p>Moezelhavenweg 29</p>
								<p>1043 AM Amsterdam</p>								
							</div>
	
						</div>					
						<div class="u-gridCol8">
							<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
							<?php the_content(); ?>
						
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>

					</div> <!-- /gridRow -->

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

