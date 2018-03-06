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


	/**
	* Custom taxonomy 
	**/

	function add_new_taxonomies(){	
		register_taxonomy('catalog',
			array('post'),
			array(
				'hierarchical' => true,
				/* true - по типу рубрик, false - по типу меток*/
				'labels' => array(
					/* ярлыки, нужные при создании UI, можете
					не писать ничего, тогда будут использованы
					ярлыки по умолчанию */
					'name' => 'Каталог товаров',
					'singular_name' => 'Раздел каталога',
					'search_items' =>  'Найти раздел каталога',
					'popular_items' => 'Популярные разделы',
					'all_items' => 'Все разделы каталога',
					'parent_item' => null,
					'parent_item_colon' => null,
					'edit_item' => 'Редактировать раздел каталога', 
					'update_item' => 'Обновить раздел',
					'add_new_item' => 'Добавить новый раздел каталога',
					'new_item_name' => 'Название нового раздела',
					'separate_items_with_commas' => 'Разделяйте разделы запятыми',
					'add_or_remove_items' => 'Добавить или удалить раздел каталога',
					'choose_from_most_used' => 'Выбрать из наиболее часто используемых разделов',
					'menu_name' => 'Каталог товаров'
				),
				'public' => true, 
				/* каждый может использовать таксономию, либо
				только администраторы, по умолчанию - true */
				'show_in_nav_menus' => true,
				/* добавить на страницу создания меню */
				'show_ui' => true,
				/* добавить интерфейс создания и редактирования */
				'show_tagcloud' => true,
				/* нужно ли разрешить облако тегов для этой таксономии */
				'update_count_callback' => '_update_post_term_count',
				/* callback-функция для обновления счетчика $object_type */
				'query_var' => true,
				/* разрешено ли использование query_var, также можно 
				указать строку, которая будет использоваться в качестве 
				него, по умолчанию - имя таксономии */
				'rewrite' => array(
				/* настройки URL пермалинков */
					'slug' => 'catalog', // ярлык
					'hierarchical' => false // разрешить вложенность
	 
				),
			)
		);
}
add_action( 'init', 'add_new_taxonomies', 0 );

?>