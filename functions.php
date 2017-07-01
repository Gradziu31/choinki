<?php



//poniżej mam 2 sposoby linkowania !!!!!!!!!!!!!!!!!!!!


//------------------------------------------------------
if(!defined('CHOINKI_THEME_DIR')) {
	//define('LOVETOEAT_THEME_DIR', ABSPATH.'wp-content/themes/'.get_template().'/');
	//można użyć opcji wyżej
	define('CHOINKI_THEME_DIR', get_theme_root().'/'.get_template().'/');
}
	// efekt: D:\Praca\Programy\Vertrigo\www/wp-content/themes/choinki/
	// wywyłanie <?php echo CHOINKI_THEME_DIR ? > (bez spacji)

//------------------------------------------------------
if(!defined('CHOINKI_THEME_URL')) {
	define('CHOINKI_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}
	// efekt: http://127.0.0.1/wp-content/themes/choinki/
	// wywołanie <?php echo CHOINKI_THEME_URL ? > (bez spacji)





	//to niżej podłacza mi 2 pliki php do mojego projektu które same startują przez funkcje
// wywołanie tych dwóch dodaje mi w menu opcje
require_once CHOINKI_THEME_DIR.'libs/posttypes.php';
require_once CHOINKI_THEME_DIR.'libs/utils.php';



// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'mejemenu' => __( 'Menu główne', 'text_domain' ),
		'Menuboczne' => __( 'Menu boczne', 'text_domain' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );
