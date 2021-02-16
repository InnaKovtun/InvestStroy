<?php
	add_action( 'wp_enqueue_scripts', 'invest_theme_style');
	add_action( 'wp_enqueue_scripts', 'jquery_lib');
	add_action( 'wp_footer', 'invest_theme_style_footer');

	function invest_theme_style(){
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );
	}

	function invest_theme_style_footer(){
		wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css');
		wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');
	}

	function jquery_lib(){
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
		wp_enqueue_script('jquery');
		wp_enqueue_script('slick_script', get_template_directory_uri() . '/assets/slick/slick.js', array('jquery'), null, true);
		wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);	
	}

	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails', array( 'post' ) );          // Только для post
	add_image_size( 'object-preview', 371);

?>
