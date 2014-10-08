<?php
/*
Template Name: Homepage
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
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/slider1.png">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/slider2.png">
						<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider/slider3.png">
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

	<div class="u-gridContainer">
		<div class="u-gridRow">	
		<!--<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--home" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>-->
		
				<div class="u-gridCol4 box">
					<div class="box-auto">
						<img class="badge-auto" src="<?php echo get_stylesheet_directory_uri();?>/img/badge-auto.png">	
						<div class="box-auto-content">
							<img class="ribbon" src="<?php echo get_stylesheet_directory_uri();?>/img/ribbon-auto.png">	
							<img class="les-prijs" src="<?php echo get_stylesheet_directory_uri();?>/img/les-prijs.png">							
						
							<div class="korting-text">
								<p class="korting">€25,- korting p.p.</p>
								<p>bij aanmelding van 2 personen</p>
							</div>

						</div>
					</div> 

					<div class="aanmeld-content-auto">
						<table width ="100%">
							<tr><td class="tabel-titel">
								<p class="tabel-text">Aantal personen:</p> 
							</td><td>
								<input class="aantal-personen" style="text" size="2">
							</td></tr>
							<tr><td class="tabel-titel">

							<p class="tabel-text">Datum + plaats:</p>
							</td><td>
								<select>
								  <option value="1">Kies datum</option>
								  <option value="2">Dinsdag</option>
								  <option value="3">Woensdag</option>
								  <option value="4">Donderdag</option>
								</select>
							</td></tr>
						</table>
					</div>

					<div class="les-button">
						<a class="aanmeld-button-auto" href="#">Aanmelden ></a>
					</div>

				</div>



				<div class="u-gridCol4 box">
					<div class="box-motor">
					<img class="badge-motor" src="<?php echo get_stylesheet_directory_uri();?>/img/badge-motor.png">	
						<div class="box-motor-content">
							<img class="ribbon" src="<?php echo get_stylesheet_directory_uri();?>/img/ribbon-motor.png">	
							<img class="les-prijs" src="<?php echo get_stylesheet_directory_uri();?>/img/les-prijs.png">														
						
							<div class="korting-text">
								<p class="korting">€25,- korting p.p.</p>
								<p>bij aanmelding van 2 personen</p>
							</div>

						</div>
					</div> 


					<div class="aanmeld-content-motor">
						<table width ="100%">
							<tr><td class="tabel-titel">
								<p class="tabel-text">Aantal personen:</p> 
							</td><td>
								<input class="aantal-personen" style="text" size="2">
							</td></tr>
							<tr><td class="tabel-titel">

							<p class="tabel-text">Datum + plaats:</p>
							</td><td>
								<select>
								  <option value="1">Kies datum</option>
								  <option value="2">Dinsdag</option>
								  <option value="3">Woensdag</option>
								  <option value="4">Donderdag</option>
								</select>
							</td></tr>
						</table>
					</div>

					<div class="les-button">
						<a class="aanmeld-button-motor" href="#">Aanmelden ></a>
					</div>

				</div>

				<div class="u-gridCol4 box">
					<div class="box-brommer">
					<img class="badge-brommer" src="<?php echo get_stylesheet_directory_uri();?>/img/badge-brommer.png">	
						<div class="box-brommer-content">
							<img class="ribbon" src="<?php echo get_stylesheet_directory_uri();?>/img/ribbon-brommer.png">	
							<img class="les-prijs" src="<?php echo get_stylesheet_directory_uri();?>/img/les-prijs.png">	
						
							<div class="korting-text">
								<p class="korting">€25,- korting p.p.</p>
								<p>bij aanmelding van 2 personen</p>
							</div>

						</div>
					</div> 

					<div class="aanmeld-content-brommer">
						<table width ="100%">
							<tr><td class="tabel-titel">
								<p class="tabel-text">Aantal personen:</p> 
							</td><td>
								<input class="aantal-personen" style="text" size="2">
							</td></tr>
							<tr><td class="tabel-titel">

							<p class="tabel-text">Datum + plaats:</p>
							</td><td>
								<select>
								  <option value="1">Kies datum</option>
								  <option value="2">Dinsdag</option>
								  <option value="3">Woensdag</option>
								  <option value="4">Donderdag</option>
								</select>
							</td></tr>
						</table>
					</div>

					<div class="les-button">
						<a class="aanmeld-button-brommer" href="#">Aanmelden ></a>
					</div>

				</div>




			</div>


		</div>
			<?php echo do_shortcode('[webshop_categories id="1263" render_options_on_overview="true"]'); ?>
			<p class="eind-text">Snel je theorie halen in één dag voor de auto, brommer en motor! <br/>
			Meteen  na de theoriecursus doe je theorie-examen bij het CBR. </p>
	</div>

<?php get_footer(); ?>
