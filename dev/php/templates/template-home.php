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

		
				<!--<div class="u-gridCol4 box">
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




			</div>-->


		</div>
		<?php for($i = 0; $i < 4 ; $i++) : ?>
			<?php if( get_field('link_aanbieding_'.$i) ): ?>
				<div class="u-gridRow aanbieding">
					<a href="<?php the_field('link_aanbieding_'.$i); ?>"><?php the_field('text_aanbieding_'.$i); ?></a>
				</div>	
			<?php else: ?>
				<?php if( get_field('text_aanbieding_'.$i)) : ?>
					<div class="u-gridRow aanbieding">
						<?php the_field('text_aanbieding_'.$i); ?>
					</div>	
				<?php endif; ?>
			<?php endif; ?>
		<?php endfor; ?>


			<?php echo do_shortcode('[webshop_categories id="1263" render_options_on_overview="true"]'); ?>
				
			<p class="eind-text"><?php the_field('welkom_tekst'); ?></p>
	</div>

<?php get_footer(); ?>
