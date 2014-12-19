<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon-tm.png">

    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <?php if(is_page('success')) { ?>
                <!-- Google Code for Aanmelding afgeronnd Conversion Page -->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 1000647627;
        var google_conversion_language = "en";
        var google_conversion_format = "2";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "2ZvUCP3HhQoQy9eS3QM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1000647627/?label=2ZvUCP3HhQoQy9eS3QM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>
    <?php }?>

<script>

    function modifyValidationRules(opts){
        opts.rules.companyName = { required : true };
        opts.rules.VATnumber = { required : true };
        opts.messages.companyName = { required : "Dit veld is verplicht."};
        opts.messages.VATnumber = { required : "Dit veld is verplicht."};


        return opts;
    }
    </script>


    <!-- Wordpress head function -->
    <?php wp_head(); ?>


	<script type="text/javascript">
		onProductAdded = function(productData) {
		   window.location.href = "/checkout";
		}

		function beforeInsertingProductToCartHook(product, isExisting){
			//if herkansing, no quantum discounts, just quantity * 40;
			if(product.ProductOption[1].ProductOptionValue_id == "286358") { //herkansing
				product.customPrice = parseFloat(product.quantity) * (parseFloat(product.price) + parseFloat(product.ProductOption[1].extraPrice));
				return product;
			}


//if not herkansing, and quantum >= 2, use 100 per lesson, times quantity
			if(product.ProductOption[1].ProductOptionValue_id != "286358") { //non herkansing
				var pr = product.price;
				
				var extra = 0;
				var quantum = 0;
				if(product.ProductOption[0].extraPrice != null && product.ProductOption[0].extraPrice != ""){
					extra = parseFloat(product.ProductOption[0].extraPrice);
				} else { // check quantum
					if(product.quantity >= 2){
						quantum = -1 * product.quantumDiscount;
					}
				}
				

				pr = product.price + extra + quantum;

				product.customPrice = pr * product.quantity;
				return product;
			}
			

			return product;

		}

		customAddProductValidator = function(event, productData){
			return true;
/*
			var $ = jQuery;
			var clicked = $(event.currentTarget);
			var prodId = clicked.attr('product-id');
			var quant = parseInt($('#product-amount-'+prodId).val());

			var extraPrice = parseInt($('.product-'+prodId).find('.ProductOptionSelector option:selected').first().attr('extraprice'));

//			console.log('extraprice '+extraPrice);



			var herexamenSelected = parseInt($('.product-'+prodId).find('.ProductOptionSelector[option_id="34336"]').first().val()) == 286358
			if(quant > 1 && herexamenSelected){
				alert('Het is niet mogelijk om meerdere herkansingen te bestellen. Indien je dit wilt doen, dien je twee losse bestellingen te doen.');
				return false;
			}

			if(quant > 1 && extraPrice != null && extraPrice != undefined && extraPrice < 0) {
				alert('Het is niet mogelijk om meerdere van deze dag-aanbieding in één keer te bestellen. Indien je dit wilt doen, dien je twee losse bestellingen te doen.');
				return false;
			}

			return true; 
 */
		}
	</script>

  </head>
  <body <?php body_class(); ?> >


    <div class="Header">
        <div class="u-gridContainer Header-wrapper">
            <a href="/home"><img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"/></a>
            <div class="u-gridRow header-space">
                <div class="u-gridCol3">-
                </div>
                <div class="u-gridCol9 u-cf">                  
                    <div class="Header-telefoon">
                        <a href="tel:0654603807">
                            <img class="header-imgTel" src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/telefoon.svg"> 
                            <h4 class="header-textTel">06 54 60 38 07</h4>
                        </a>
                    </div>
                    <div class="Header-email">
                        <a href="mailto:info@theoriecity.nl">
                            <img class="header-imgEmail" src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/email.svg"> 
                            <h4 class="header-textEmail">info@theoriecity.nl</h4>
                        </a>
                    </div> 
                </div>
            </div>
        </div>  
        <div class="Header-grey-bar  header-space"> <!-- 100%, grey bg color -->
            <div class="u-gridContainer">
                <div class="u-gridRow">
                    <div class="u-gridCol3 space">x
                    </div>
                    <div class="u-gridCol9 menu">
                        <div class="u-cf">
                            <a class="Navigation-menuToggle" id="js-navCollapse">
                                <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                    <use xlink:href="#icon-menu2"></use>
                                </svg>
                            </a>
                            <a href="tel:0654603807" class="Navigation-menuToggle telefoon" id="js-navCollapse">
                                <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                    <use xlink:href="#icon-phone"></use>
                                </svg>
                            </a>
                            <a href="mailto:info@theoriecity.nl" class="Navigation-menuToggle mail show-more" id="js-navCollapse">
                                <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                <use xlink:href="#icon-mail2"></use>
                                </svg>
                            </a>
                        </div>
                        <?php include 'includes/navigation.php'; ?>            
                    </div>
                </div>
            </div>    
        </div>
		<div id="shoppingcart"></div>
    </header>
