<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M' );
@ini_set( 'max_execution_time', '300' );

class wp_ng_theme {

	function enqueue_scripts() {

		wp_enqueue_style( 'bootstrapCSS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '1.0', 'all' );
		wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.map', array('jquery'), '1.0', false);
		wp_enqueue_script( 'angular-core', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular.min.js', array( 'jquery' ), '1.0', false );
		wp_enqueue_script( 'angular-touch', 'https://cdnjs.cloudflare.com/ajax/libs/angular-touch/1.5.7/angular-touch.js', array('jquery'), '1.0', false);
		wp_enqueue_script( 'angular-animate', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular-animate.min.js', array('jquery'), '1.0', false);
		wp_enqueue_script( 'angular-resource', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-rc.0/angular-resource.min.js', array('angular-core'), '1.0', false);
		wp_enqueue_script( 'angular-sanitize', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-rc.0/angular-sanitize.min.js', array('angular-core'), '1.0', false);
		wp_enqueue_script( 'ngScripts', get_template_directory_uri() . '/assets/javascript/script.js', array( ), '1.0', false );
		wp_localize_script( 'ngScripts', 'appInfo',
			array(

				'api_url'			 => rest_get_url_prefix() . '/wp/v2/',
				'template_directory' => get_template_directory_uri() . '/',
				'nonce'				 => wp_create_nonce( 'wp_rest' ),
				'is_admin'			 => current_user_can('administrator')

			)
		);

	}
}


$ngTheme = new wp_ng_theme();
add_action( 'wp_enqueue_scripts', array( $ngTheme, 'enqueue_scripts' ) );


// NAVIGATION

function kz_nav() {
    wp_nav_menu(
	    array(
	        'theme_location'  => 'main-menu',
	        'menu'            => '',
	        'container'       => false,
	        'container_class' => '',
	        'container_id'    => '',
	        'menu_class'      => 'menu',
	        'menu_id'         => '',
	        'echo'            => true,
	        'fallback_cb'     => 'wp_page_menu',
	        'before'          => '',
	        'after'           => '',
	        'link_before'     => '',
	        'link_after'      => '',
	        'items_wrap'      => '%3$s',
	        'depth'           => 0,
	        'walker'          => ''
        )
    );
}

function social_kz_menu() {
	wp_nav_menu(
	    array(
	        'theme_location'  => 'social-footer-menu',
	        'menu'            => '',
	        'container'       => false,
	        'container_class' => '',
	        'container_id'    => '',
	        'menu_class'      => 'menu',
	        'menu_id'         => '',
	        'echo'            => true,
	        'fallback_cb'     => 'wp_page_menu',
	        'before'          => '',
	        'after'           => '',
	        'link_before'     => '',
	        'link_after'      => '',
	        'items_wrap'      => '%3$s',
	        'depth'           => 0,
	        'walker'          => ''
        )
    );
}

function register_kz_menu() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ), // Main Navigation
            'social-footer-menu' => __( 'Social Footer Menu' ), // Main Navigation
        )
    );
}

add_action( 'init', 'register_kz_menu' );


// CUSTOM POST TYPES

register_post_type( 'classrooms', array(
    'labels' => array(
        'name' => 'Classrooms',
        'singular_name' => 'Classroom',
    ),
    'description' => 'Content for the Classroom Section of the homepage',
    'public' => true,
    'menu_icon' => 'dashicons-admin-home',
    'menu_position' => 10,
    'supports' => array( 'title' ),
    'show_in_rest'	=> true,
    'publicly_queryable' => true,
));

?>