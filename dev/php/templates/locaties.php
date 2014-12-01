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
								<p class="adres-titel">Theorie City Arnhem</p>
								<p>Hazelkamp 36</p>
								<p>6836 BA Arnhem</p>
								<a target="_Blank" href="https://www.google.nl/maps/dir/Hazenkamp+36,+6836+BA+Arnhem/Hazenkamp+10,+6836+BA+Arnhem/@51.9495394,5.8803373,17z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x47c7a6729c07d2a9:0xbf691d108f059c95!2m2!1d5.8803729!2d51.9494249!1m5!1m1!1s0x47c7a67218d452c7:0x12b910479bd8f152!2m2!1d5.8846128!2d51.9500632">Bekijk route</a>
							</div>
	
						</div>

						<div class="u-gridCol9">
						<h4>Routebeschrijving</h4>
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
								<p class="adres-titel">Theorie City Utrecht</p>
								<p>Californiëdreef 19</p>
								<p>3565 BJ Utrecht</p>
								<a target="_Blank" href="https://www.google.nl/maps/dir/Californi%C3%ABdreef+19,+3565+BJ+Utrecht/Mississippidreef+151A,+3565+CE+Utrecht/@52.1240567,5.0852214,17z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x47c66e553e298b03:0x174b205557263ccc!2m2!1d5.087698!2d52.1254826!1m5!1m1!1s0x47c66faaeb8f7c35:0x9c9ef15a4ac5e510!2m2!1d5.0871336!2d52.122551">Bekijk route</a>
							</div>
	
						</div>		

						<div class="u-gridCol9">
						<h4>Routebeschrijving</h4>
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
								<p class="adres-titel">Theorie City Amsterdam</p>
								<p>Moezelhavenweg 29</p>
								<p>1043 AM Amsterdam</p>
								<a target="_Blank" href="https://www.google.nl/maps/dir/Moezelhavenweg+29,+1043+AM+Amsterdam/Naritaweg+150,+1043+CA+Amsterdam/@52.3903725,4.8155496,16z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x47c5e301d1496b99:0x557e3229f42482b1!2m2!1d4.819248!2d52.3942058!1m5!1m1!1s0x47c5e254e49120a3:0x7891bb67eaca435f!2m2!1d4.8209785!2d52.3880093">Bekijk route</a>
							</div>
	
						</div>		

						<div class="u-gridCol9">
							<h4>Routebeschrijving</h4>
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

