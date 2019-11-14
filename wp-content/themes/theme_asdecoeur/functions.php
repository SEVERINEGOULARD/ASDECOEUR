<?php
// Ajout du titre de la page dans la balise <title></title> :
add_theme_support('title-tag');

// Déclaration des feuilles de style et js :
function declaration_scripts_theme(){
	// déclare les JS
	// wp_enqueue_script('jquery'); //livré avec WP (dans wp-includes/js/jquery)
	// wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', '', true); //true : placé dans le footer
	// wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', '', '', true);
	// déclare le CSS
	// wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'declaration_scripts_theme');//Wp va compiler les fichiers de façon optimale et aux bons endroits

// Create menu
add_action('init', 'mon_menu');
function mon_menu()
{
	register_nav_menu('main_menu', 'Menu Principal');
}

// Create widget zone
add_action('widgets_init', 'widget_zone');
function widget_zone(){
	register_sidebar([
						'id'	=> 'my_widget_zone',
						'name'	=> 'widget zone',
						'description' 	=> 'Zone dédiée aux widgets',
						'class'			=> 'cst-widget',
						'before_widget'	=> '<div class="cst-div-widget">',
						'after_widget'	=> '</div>',
						'before_title'	=> '<h3 class="cst-widget-title">',
						'after_title'	=> '</h3>'
					]);
}