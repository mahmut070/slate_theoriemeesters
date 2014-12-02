<?php
/*
Template Name: Single-products
*/
?>

<?php get_header(); ?>

		<div class="u-gridContainer">
			<div class="u-gridRow">								
				<div class="u-gridCol4">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="Content Content--leftsidebar" id="post-<?php the_ID(); ?>">

								<?php $prodid = get_field('product_id'); ?>

								<?php echo do_shortcode('[webshop_products id='.$prodid.']'); ?>
							
						</article>
					<?php endwhile; endif; ?>
				</div>

				<div class="u-gridCol8">
					<div class="omschrijving">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
