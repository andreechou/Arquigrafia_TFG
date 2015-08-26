<?php
	
	// Thumbnail Support
	add_theme_support( 'post-thumbnails' );

	// Register Menu
	function register_my_menu() {
	  register_nav_menu('header-menu-top',__( 'Header Menu Top' ));
	  register_nav_menu('header-menu-bot',__( 'Header Menu Bottom' ));
	}
	add_action( 'init', 'register_my_menu' );

?>