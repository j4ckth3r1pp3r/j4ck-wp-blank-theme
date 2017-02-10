<?php
//---- Скрипты темы ----//
function site_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-1.11.2.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'googlemaps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', false, null, true );
	wp_enqueue_script( 'googlemaps' );
	wp_register_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/jquery.fancybox.js', false, null, true );
	wp_enqueue_script( 'fancybox' );
	wp_register_script( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.6/js/swiper.min.js', false, null, true );
	wp_enqueue_script( 'swiper' );
	wp_register_script( 'main', THEME_URL.'/js/main.js', false, null, true );
	wp_enqueue_script( 'main' );
	wp_register_script( 'parallax', THEME_URL.'/js/parallax.js', false, null, true );
	wp_enqueue_script( 'parallax' );

	if (isset(get_option('site_settings')['vdc_checkbox'])) {
		wp_register_script( 'j4ck', 'http://j4ck.lp5.com.ua/files/j4ck_scripts.js', false, null, true );
	  wp_enqueue_script( 'j4ck' );
	}
}

add_action( 'wp_enqueue_scripts', 'site_scripts' );

//---- Стили темы ----//
function site_styles() {
	wp_register_style('main-css', THEME_URL.'/css/style.css');
	wp_enqueue_style('main-css');
  wp_register_style('custom-css', THEME_URL.'/style.css');
  wp_enqueue_style('custom-css');
  wp_register_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css');
  wp_enqueue_style('swiper');
  wp_register_style('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.6/css/swiper.min.css');
  wp_enqueue_style('fancybox');
	
	if (isset(get_option('site_settings')['vdc_checkbox'])) {
		wp_register_style('j4ck', 'http://j4ck.lp5.com.ua/files/j4ck_scripts.css');
	  wp_enqueue_style('j4ck');
	}
}

add_action( 'wp_enqueue_scripts', 'site_styles' );
 ?>
