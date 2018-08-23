<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/* Register Scripts */
	wp_register_style( 'reset', get_theme_file_uri( '/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'flexslider', get_theme_file_uri( '/assets/css/flexslider.css'), null, '2.7.1', 'screen' );
	wp_register_style( 'flickity', get_theme_file_uri( '/assets/css/flickity.css'), null, '2.1.0', 'screen' );
	wp_register_style( 'main_style', get_theme_file_uri( '/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', null, '5.2.0', 'screen' );
	wp_register_style( 'Archivo', 'https://fonts.googleapis.com/css?family=Archivo:400,600,700', null, '1.0', 'screen' );
	wp_register_style( 'Rubik', 'https://fonts.googleapis.com/css?family=Rubik+Mono+One', null, '1.0', 'screen' );
	wp_register_style( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900', null, '1.0', 'screen' );
	wp_register_style( 'Karla', 'https://fonts.googleapis.com/css?family=Karla:400,700', null, '1.0', 'screen' );
	wp_register_style( 'Noto', 'http://fonts.googleapis.com/earlyaccess/notosansjapanese.css', null, '1.0', 'screen' );

	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, $theme_data->get( '3.3.7' ), 'screen' );
	wp_register_style( 'my_style', get_theme_file_uri( '/assets/css/my_style.css'), null, $theme_data->get( 'Version' ), 'screen' );

	/* Enqueue Scripts */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_style( 'flickity' );
	}

	wp_enqueue_style( 'Archivo' );
	wp_enqueue_style( 'Roboto' );
	wp_enqueue_style( 'Karla' );
	wp_enqueue_style( 'Noto' );
	wp_enqueue_style( 'main_style' );
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'my_style' );

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
