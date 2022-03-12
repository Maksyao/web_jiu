<?php
    add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
    add_action('after_setup_theme', 'add_menu');

 
    function add_scripts_and_styles(){
        wp_enqueue_style( 'style', get_stylesheet_uri() );

		if(is_category( 'news' ) || is_home()){
            wp_enqueue_script( 'dateTransform', get_template_directory_uri() . '/assets/js/dateTransform.js', null, null, true );
        }

		if(is_home()){
            wp_enqueue_script( 'newsSwitcher', get_template_directory_uri() . '/assets/js/newsSwitcher.js', null, null, true );
        }
		
    }


    add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);


    function add_menu(){
        register_nav_menu( 'top', 'Главное меню сайта' );
    }
    ?>