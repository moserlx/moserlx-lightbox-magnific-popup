<?php /*	Plugin Name: MoserLX Lightbox Magnific	Plugin URI: http://moserlx.com	Description: Responsive Lightbox for Wordpress (Magnific Popup)	Version: 1.0	Author: Moser Konstantinos Paulos	Author URI: http://moserlx.com	Licence: GPL2*/function msr_enqueue() {	wp_register_style('magnific-popup', get_template_directory_uri() . '/inc/css/magnific-popup.css', array(), '1.0', 'all' );	wp_enqueue_style('magnific-popup');		wp_register_script( 'magnific-popup', get_template_directory_uri() . '/inc/css/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);	wp_enqueue_script( 'magnific-popup' );}add_action('wp_enqueue_scripts', 'msr_enqueue');