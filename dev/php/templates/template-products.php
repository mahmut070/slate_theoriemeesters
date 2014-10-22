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
						<?php
							$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


							if (false !== strpos($url,'60383')) {
						?>

						<b class="product-titel">Slaag in 1 dag voor uw auto theorie-examen! Meteen na de theoriecursus doet u 
						theorie-examen voor de auto bij het CBR.</b>
						<p>
							Op dit moment worden de cursussen in Amsterdam, Arnhem en Utrecht gegeven.
							Onze locaties zijn op enkele minuten loopafstand van het CBR waar je je theorie examen moet afleggen.
							Ondanks dat wij maar in 3 plaatsen zijn gevestigd, hebben veel van onze cursisten er een lange reistijd
							voor over om onze spoedcursus te volgen. Onze cursisten komen bijvoorbeeld uit: Spijkenisse, Rotterdam, Leeuwarden,
							Groningen, Zwolle, Nijmegen, Goes, Hoorn, Alkmaar, Emmen, Enschede, Weert, Venlo, Maastricht, Almere, Lelystad, etc. Kortom
							vanuit heel Nederland komen zij naar ons toe!!
						</p>


						<?php
							} 
						?>


						<?php

							if (false !== strpos($url,'60381')) {
						?>

							<b class="product-titel">Slaag in 1 dag voor uw motor theorie-examen! Meteen na de theoriecursus doet u 
							theorie-examen voor de auto bij het CBR.</b>
							<p>
								Op dit moment worden de cursussen in Amsterdam, Arnhem en Utrecht gegeven.
								Onze locaties zijn op enkele minuten loopafstand van het CBR waar je je theorie examen moet afleggen.
								Ondanks dat wij maar in 3 plaatsen zijn gevestigd, hebben veel van onze cursisten er een lange reistijd
								voor over om onze spoedcursus te volgen. Onze cursisten komen bijvoorbeeld uit: Spijkenisse, Rotterdam, Leeuwarden,
								Groningen, Zwolle, Nijmegen, Goes, Hoorn, Alkmaar, Emmen, Enschede, Weert, Venlo, Maastricht, Almere, Lelystad, etc. Kortom
								vanuit heel Nederland komen zij naar ons toe!!
							</p>

						<?php
							} 
						?>



						<?php

							if (false !== strpos($url,'60382')) {
						?>

						<b class="product-titel">Slaag in 1 dag voor uw scooter theorie-examen! Meteen na de theoriecursus doet u 
						theorie-examen voor de auto bij het CBR.</b>
						<p>
							Op dit moment worden de cursussen in Amsterdam, Arnhem en Utrecht gegeven.
							Onze locaties zijn op enkele minuten loopafstand van het CBR waar je je theorie examen moet afleggen.
							Ondanks dat wij maar in 3 plaatsen zijn gevestigd, hebben veel van onze cursisten er een lange reistijd
							voor over om onze spoedcursus te volgen. Onze cursisten komen bijvoorbeeld uit: Spijkenisse, Rotterdam, Leeuwarden,
							Groningen, Zwolle, Nijmegen, Goes, Hoorn, Alkmaar, Emmen, Enschede, Weert, Venlo, Maastricht, Almere, Lelystad, etc. Kortom
							vanuit heel Nederland komen zij naar ons toe!!
						</p>


						<?php
							} 
						?>

						<b class="product-titel">Moeite met de theorie of heeft u dyslexie?</b>
						<p>
						Er komen vaak cursisten bij ons die al drie, vier keer of vaker zijn gezakt voor het 
						theorie-examen bij het CBR. Ook cursisten die dyslexie hebben komen bij ons. Bent u
						onzeker, heeft u examenvrees of dyslexie? U kunt dan onze cursus twee of meer keer 
						gratis volgen voordat u examen gaat doen. U reserveert bijvoorbeeld de cursus plus 
						examen over 3 weken. Voor deze datum kunt u in overleg met ons de cursus al volgen 
						voor deze datum.
						</p>

						<b class="product-titel">Altijd slagen voor het theorie-examen!</b>
						<p>
						Wij hebben een unieke methode ontwikkeld. Dankzij deze methode is het bijna niet meer mogelijk om te zakken! 
						Zakken is na het volgen van onze cursus zo goed als onmogelijk.
						Zelfs als u het al een aantal keer zelf hebt geprobeerd bij het CBR.
						Zakt u toch, dan mag u onbeperkt de theoriecursus gratis overdoen!
						</p>

						<b class="product-titel">Ik heb al een examendatum bij het CBR. Wat nu?</b>
						<p>
						Als je zelf al een theorie-examen datum hebt gereserveerd bij het CBR 
						via www.mijn.cbr.nl is dat geen probleem. Wij kunnen deze datum vervroegen naar de examendatum aansluitend aan onze spoedcursus! Hiervoor moet je zeker wel eerst contact met ons opnemen!!!
						</p>

					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
