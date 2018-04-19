<?php 

	global $lang;
	$lang = pll_current_language(); //define current language

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
				// путь к пользовательскому файлу определения полей
				require_once __DIR__ . '/inc/custom_fields/post-meta.php';
				require_once __DIR__ . '/inc/custom_fields/menu.php';
				require_once __DIR__ . '/inc/custom_fields/theme-options.php';
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
	* Add support of post thumbnails
	**/
	add_theme_support('post-thumbnails');

	/*Custom functions*/	
	function showCategoryName($id_ua, $id_en, $lang){
			if($lang == "uk"){
				echo get_cat_name($id_ua);
			}else{
				echo get_cat_name($id_en);
			} 
		}

	function showSinglePostTitle($id_ua, $id_en, $lang){
		if($lang == "uk"){
			echo get_the_title($id_ua);
		}else{
			echo get_the_title($id_en);
		} 
	}

	function showSinglePostContent($id_ua, $id_en, $lang){
		if($lang == "uk"){
			$my_post_obj = get_post($id_ua);
		}else{
			$my_post_obj = get_post($id_en);
		} 
		$the_content_filtered = apply_filters( 'the_content', $my_post_obj->post_content );
		echo str_replace( ']]>', ']]&gt;', $the_content_filtered );
	}

	function showSinglePostImage($id_ua, $id_en, $lang){
		if($lang == "uk"){
			echo get_the_post_thumbnail_url($id_ua);
		}else{
			echo get_the_post_thumbnail_url($id_en);
		} 
	}

	function selectProductAvailability($avl, $lang){
		if( $avl === false  ){
			if($lang == "uk"){
					    $text = 'Поле не вибрано';
				}else{$text = 'Field is not specified';}	
		}
		if( $avl == 'available' ){
			if($lang == "uk"){
				    $text = 'В наявності';
			}else{$text = 'Available';}	
		}
		if( $avl == 'not_available' ){
			if($lang == "uk"){
				    $text = 'Немає в наявності';
			}else{$text = 'Not available';}	
		}
		if( $avl == 'pre_order' ){
			if($lang == "uk"){
				    $text = 'Доступний за передзамовленням';
			}else{$text = 'Available for pre-order';}	
		}
		echo $text;
	}

	function showProductPhoto($main_photo, $second_photo, $third_photo){
		echo $main_photo;
		if($second_photo){echo ','.$second_photo;};
		if($third_photo){echo ','.$third_photo;};	
	}

	function showProductPrice($numPrice, $lang){
		echo $numPrice;
		if ($lang == "uk"){echo " грн";
		}else{echo " &euro;";} 
	}

	function showOldPrice($numOldPrice, $lang){
		echo $numOldPrice;
		if ($lang == "uk"){echo " грн";
		}else{echo " &euro;";} 
	}

	function showOrderBtnText($lang){
		if ($lang == "uk"){echo "замовити";
		}else{echo "order now";}
	}


	