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
					<div class="mid-titel">
						<img class="icon-vinkje" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/vinkje.svg">
						<p class="mid-titel-text">Haal je theorie in één dag</p>
						<p class="mid-titel-caption">&#9679; 'S ochtend theorie cursus</p>
						<p class="mid-titel-caption">&#9679; 'S middags theorie examen</p>
					</div>
					<div class="mid-titel">
						<img class="icon-vinkje" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/vinkje.svg">
						<p class="mid-titel-text">100% slagingsgarantie</p>
					</div>
					<div class="mid-titel">
						<img class="icon-vinkje" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/vinkje.svg">
						<p class="mid-titel-text">100% examengericht les</p>
						<p class="mid-titel-caption">&#9679; Geen theorieboeken nodig</p>
					</div>
					<div class="mid-titel">
						<img class="icon-vinkje" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/vinkje.svg">
						<p class="mid-titel-text">In één dag klaar!</p>
					</div>
					<div class="mid-titel">
						<img class="icon-vinkje" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/vinkje.svg">
						<p class="mid-titel-text">De 1ste keer niet geslaagd?</p>
						<p class="mid-titel-caption">&#9679; Dan mag je onbeperkt cursus volgen</p>
					</div>
					<div class="mid-titel">
						<img class="icon-vinkje" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/vinkje.svg">
						<p class="mid-titel-text">Cursisten uit heel Nederland!</p>
					</div>
				</div>

				<div class="u-gridCol7 slideshow">
					<div class="Slider-img">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/img1.png">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/img2.png">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/img3.png">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/img4.png">
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

	<div class="u-gridContainer">
		<div class="u-gridRow">	
			
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
