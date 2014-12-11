<?php
  //import the default gravityform contact forms
define("GF_THEME_IMPORT_FILE", "includes/gravityforms-contactform.xml");

// Register the sitemap menu
add_action( 'init', 'register_menu_sitemap' );

function register_menu_sitemap(){
	register_nav_menus( array(
		'sitemap' => 'Sitemap'
    ));
}

$initialized = get_option('slate_initialized');
if($initialized == null){
	$initialized = false;
}

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'USP',
		'id' => 'home_usp',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="offscreen">',
		'after_title' => '</h2>',
	));

}

if(is_admin() && !$initialized){
	  include_once('includes/initialize_pages.php');
	
	  $siteIniter = new SiteInitializer(
		  "slate_theoriemeesters", 
		  "Californiëdreef 19 3565 BJ Utrecht", 
		  "0654603807", 
		  "rijschooladem@gmail.com");
	  $siteIniter->initializeAll();
	  add_option('slate_initialized', true);
}

//include_once('includes/navigation-walker.php');

include_once('includes/antispam.php');

?>
