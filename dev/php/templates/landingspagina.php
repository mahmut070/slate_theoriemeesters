<?php
/*
Template Name: Landingspagina
*/
?>

<?php get_header(); ?>
	<div class="grey-bar">
	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="slider">
				<div class="u-gridCol5">
					<?php dynamic_sidebar('USP'); ?>
				</div>

				<div class="u-gridCol7 slideshow">
					<div class="Slider-img">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/img1.png">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/img2.png">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/img3.png">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/img4.png">
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

	<div class="u-gridContainer">
		<div class="u-gridRow">	
			
			<?php echo do_shortcode('[webshop_categories id="1263" render_options_on_overview="true"]'); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content Content--home" id="post-<?php the_ID(); ?>">
					<h2><?php the_title(); ?></h2>
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
		
		</div>
	</div>

<?php get_footer(); ?>
