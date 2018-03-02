<?php 

	/**
	* Удаление default админпанели и стилей 
	**/
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'print_emoji_detection_script', 7);		
	remove_action('wp_print_styles', 'print_emoji_styles');
	add_filter( 'emoji_svg_url', '__return_false' );
	show_admin_bar(false);
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

	/**
	* Carbon fields подключение
	**/
	require_once get_template_directory() . '/libs/carbon_fields/carbon-fields-plugin.php';
	
		add_action( 'carbon_fields_register_fields', 'crb_register_custom_fields' );
			function crb_register_custom_fields() {
				// путь к пользовательскому файлу определения поля (полей), измените под себя
				require_once __DIR__ . '/inc/custom_fields/post-meta.php';
				require_once __DIR__ . '/inc/custom_fields/menu.php';
			}
			

	/**
	*  Логотипы в виджеты WP
	**/

	function logo_widget_init() {
		register_sidebar( array(
			'name'          => 'Logo_nav_SVG',
			'id'            => 'logo_nav',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<span class="hidden">',
			'after_title'   => '</span>',
		) );
	}
	add_action( 'widgets_init', 'logo_widget_init' );


	function logo_about_widget_init() {
		register_sidebar( array(
			'name'          => 'Logo_about_SVG',
			'id'            => 'logo_about',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<span class="hidden">',
			'after_title'   => '</span>',
		) );
	}
	add_action( 'widgets_init', 'logo_about_widget_init' );


	function logo_footer_widget_init() {
		register_sidebar( array(
			'name'          => 'Logo_footer_SVG',
			'id'            => 'logo_footer',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<span class="hidden">',
			'after_title'   => '</span>',
		) );
	}
	add_action( 'widgets_init', 'logo_footer_widget_init' );

	/**
	* поддержка миниатюр для постов
	**/
	add_theme_support('post-thumbnails');

	

?>