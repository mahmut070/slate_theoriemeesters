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
								<p>Theorie City</p>
								<p>Hazelkamp 36</p>
								<p>6836 BA Arnhem</p>
							</div>
	
						</div>

						<div class="u-gridCol9">
						<p>
							Onze locatie is gemakkelijk te bereiken met het openbaar vervoer. Als je met de trein reist, kom je  aan op station Arnhem Centraal.
							Bij het station neemt u bus 7. Je stapt dan uit bij het CBR. Je loopt dan naar Hazenkamp 36.
							Wij zijn in hetzelfde gebouw gevestigd als Ballorig. Alleen moet je de achteringang nemen.
							Dus in plaats van rechtsaf het parkeerterrein op te gaan van Ballorig ga je rechtdoor door een hek. Dan kom je vanzelf bij de achteringang.
						</p>
						<p>	
							Wij zijn in dezelfde straat gevestigd als het CBR. Het CBR is op nummer 10 en wij op nummer 36.
						</p>
						<p>	
							Na afloop van de cursus ga je lopend naar het CBR. Dit is de deur uit naar links, ons parkeerterrein aflopen en meteen het parkeerterrein van het CBR oplopen. Binnen twee minuten ben je bij het CBR aan de Hazenkamp 10 aangekomen.
						</p>
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
								<p>Theorie City</p>
								<p>Californiëdreef 19</p>
								<p>3565 BJ Utrecht</p>
							</div>
	
						</div>		

						<div class="u-gridCol9">
						<p>
							Onze locatie is gemakkelijk te bereiken met het openbaar vervoer. Als u met de trein reist, kom je  aan op station Utrecht Centraal.
							Bij het station neemt u bus 6 of 16. Je stapt dan uit op de Mississippidreef. Hier is ook het CBR gevestigd, op nummer 151.
							Vanaf hier loop je zo naar de Californiëdreef 19.
						</p>
						<p>
							Na afloop van de cursus ga je lopend naar het CBR. Dit is de deur uit naar links, aan het einde van de straat linksaf en dan meteen rechtsaf. Binnen twee minuten ben je bij het CBR aan de Mississsippidreef 151 aangekomen.
						</p>
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
								<p>Theorie City</p>
								<p>Moezelhavenweg 29</p>
								<p>1043 AM Amsterdam</p>
							</div>
	
						</div>		

						<div class="u-gridCol9">
							<p>
								Het adres waar de theoriecursus wordt gegeven is de Moezelhavenweg 29, 1043 AM te Amsterdam. Dit is op een paar minuten loopafstand van het CBR. Zie onderstaand kaartje.
								Onze locatie is gemakkelijk te bereiken met het openbaar vervoer. Als u met de trein reist, komt u aan op station Amsterdam Sloterdijk. Vanaf het station kunt u er voor kiezen om twee haltes met de bus te gaan of om een minuut of 10 te lopen.
							</p>
							<p>								
								Als u er voor kiest om de bus te nemen, kunt u vanaf Station Sloterdijk bus 61 of 69 nemen. U stapt dan uit op de Naritaweg 150 (Punt 1 op het kaartje). Dit is ook het adres van het CBR in Amsterdam.
								Vanaf het CBR gaat u bij de verkeerslichten rechtsaf en aan het einde van de straat, dus pas na de verkeerslichten (bij SCHERPENZEEL AMSTERDAM), rechtsaf en meteen linksaf. U bent dan op de Moezelhavenweg.
								U loopt deze straat in. U ziet dan aan de linkerzijde een complex met ongeveer 50 bedrijfs- en kantoorruimtes. U loopt door een toegangshek en op nummer 29 zijn wij gevestigd.
							</p>
							<p>
								U kunt op Station Sloterdijk ook bus 82 of 231 nemen. U stapt dan uit op de halte Oderweg (Punt 2 op het kaartje).
								Vanaf hier gaat u bij de verkeerslichten rechtsaf en aan het einde van de straat, dus pas na de verkeerslichten (bij SCHERPENZEEL AMSTERDAM), rechtsaf en meteen linksaf. U bent dan op de Moezelhavenweg.
								U loopt deze straat in. U ziet dan aan de linkerzijde een complex met ongeveer 50 bedrijfs- en kantoorruimtes. U loopt door een toegangshek en op nummer 29 zijn wij gevestigd.
							</p>
							<p>
								Als u met de auto komt of met de auto wordt gebracht moet de auto buiten het terrein op de parkeerplaatsen geparkeerd worden. Parkeren op het terrein is niet toegestaan.
								Er zijn meer dan voldoende parkeerplaatsen buiten het toegangshek.
							</p>
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

