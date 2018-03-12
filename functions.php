<?php 


	function ewiingles_styles(){

		/* Hojas de estilo */
		wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css');		
		wp_enqueue_style('heroic-features', get_stylesheet_directory_uri().'/css/heroic-features.css');	
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('slider', get_stylesheet_directory_uri().'/css/slider.css');

		/* FontAwesome */
		wp_enqueue_style('fontawesome', get_stylesheet_directory_uri().'/css/font-awesome.min.css');

		/* JS */
		wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js');
		wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js');	
		
	}

	add_action('wp_enqueue_scripts','ewiingles_styles');

	add_theme_support('post-thumbnails');
	
	register_nav_menus(array(
		'menu_principal' => __('Menú Principal', 'ewiingles'),
		'menu_redes-sociales' => __('Menú Redes Sociales', 'ewiingles')
	));

	add_image_size('entradas', 200, 200, true);

	function ewiingles_widgets(){

		register_sidebar(array(
			'name' => __('Footer Widget'),
			'id' => 'footer_widget',
			'description' => 'Widget para el Footer de la página',
			'before_widget' => '<div id="%1$s" class="widget col-sm-6 %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));

		register_sidebar(array(
			'name' => __('Sidebar Widget'),
			'id' => 'sidebar_widget',
			'description' => 'Widget para el Sidebar de la página',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));

	}

	add_action('widgets_init','ewiingles_widgets');

?>