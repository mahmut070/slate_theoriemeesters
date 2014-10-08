jQuery(document).ready(function($) {
	$('.product-overview').addClass('u-gridContainer');
	$('.product').addClass('box');


	var base = '/wp-content/themes/slate-0.3.1_slate_theoriemeesters'; 

	var htmlAuto = '<div class="box-auto">'+
				   '	<img class="badge-auto" src="'+base+'/img/badge-auto.png">	'+
				   '		<div class="box-auto-content">'+
				   '			<img class="ribbon" src="'+base+'/img/ribbon-auto.png">'+
				   '			<img class="les-prijs" src="'+base+'/img/les-prijs.png">'+
				   '		'+
				   '			<div class="korting-text">'+
			       '					<p class="korting">€25,- korting p.p.</p>'+
			       '					<p>bij aanmelding van 2 personen</p>'+
				   '			</div>'+
				   '		</div>'+
				   '</div>';	

	var htmlMotor = '<div class="box-motor">'+
				   '	<img class="badge-motor" src="'+base+'/img/badge-motor.png">	'+
				   '		<div class="box-motor-content">'+
				   '			<img class="ribbon" src="'+base+'/img/ribbon-motor.png">'+
				   '			<img class="les-prijs" src="'+base+'/img/les-prijs.png">'+
				   '		'+
				   '			<div class="korting-text">'+
			       '					<p class="korting">€25,- korting p.p.</p>'+
			       '					<p>bij aanmelding van 2 personen</p>'+
				   '			</div>'+
				   '		</div>'+
				   '</div>';	

	var htmlBrommer = '<div class="box-brommer">'+
				   '	<img class="badge-brommer" src="'+base+'/img/badge-brommer.png">	'+
				   '		<div class="box-brommer-content">'+
				   '			<img class="ribbon" src="'+base+'/img/ribbon-brommer.png">'+
				   '			<img class="les-prijs" src="'+base+'/img/les-prijs.png">'+
				   '		'+
				   '			<div class="korting-text">'+
			       '					<p class="korting">€25,- korting p.p.</p>'+
			       '					<p>bij aanmelding van 2 personen</p>'+
				   '			</div>'+
				   '		</div>'+
				   '</div>';	
	$('.product-60381 .product-image').html(htmlMotor);
	$('.product-60382 .product-image').html(htmlBrommer);
	$('.product-60383 .product-image').html(htmlAuto);

	//wrap .form in div
	$('.product-60381 form.form').wrap('<div class="aanmeld-content-motor"></div>');
	$('.product-60382 form.form').wrap('<div class="aanmeld-content-brommer"></div>');
	$('.product-60383 form.form').wrap('<div class="aanmeld-content-auto"></div>');


	$('.addtocart').addClass('les-button');
	$('.addtocart .btn').html('Aanmelden &gt;');
	$('.addtocart .btn').css('display','block');
	$('.product-60381 .addtocart .btn').addClass('aanmeld-button-motor');
	$('.product-60382 .addtocart .btn').addClass('aanmeld-button-brommer');
	$('.product-60383 .addtocart .btn').addClass('aanmeld-button-auto');
	
	//hide some items
	$('.product-title, .product-detail-button, .product-price, .skuInfo').hide();


	$('.addtocart').click(function(evt){

		window.location.href = "/checkout";
	});
});
