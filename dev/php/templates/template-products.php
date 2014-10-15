<?php
/*
Template Name: Products
*/
?>

<?php get_header(); ?>

		<div class="u-gridContainer">
			<div class="u-gridRow">								
				<div class="u-gridCol4">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="Content Content--leftsidebar" id="post-<?php the_ID(); ?>">
							
								<?php the_content(); ?>
							
						</article>
					<?php endwhile; endif; ?>
				</div>

				<div class="u-gridCol8">
					<div class="omschrijving">
						<div class="mid-titel">
							<img class="icon-vinkje" src="<?php echo get_stylesheet_directory_uri();?>/img/svg/vinkje.svg">
							<p class="mid-titel-text">Haal je theorie in één dag</p>
							<p class="mid-titel-caption">&#9679; 's ochtends theoriecursus</p>
							<p class="mid-titel-caption">&#9679; 's middags theorie-examen</p>
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
				</div>
			</div>
		</div>

<?php get_footer(); ?>
