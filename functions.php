<?php


/****** include scripts ******/

add_action('wp_enqueue_scripts','theme_one_include_scripts');

function theme_one_include_scripts(){
wp_enqueue_style('style',get_stylesheet_uri(),['bootstrap']);
wp_enqueue_style('bootstrap',get_template_directory_uri().'/bootstrap-4.3.1/css/bootstrap.min.css');
wp_enqueue_style('mystyle',get_template_directory_uri().'/css/mystyle.css');

wp_enqueue_script('bootstrap',get_template_directory_uri().'/bootstrap-4.3.1/js/bootstrap.min.js',['jquery'],null,true);
wp_enqueue_script('myscript',get_template_directory_uri().'/js/myscript.js',null,null,true);

}


/***** register menu ******/

add_action('after_setup_theme','register_menu_theme_one');

function register_menu_theme_one(){
	register_nav_menus([
    'top_menu'=>'Главное меню',
    'footer_menu'=>'Меню в подвале',
	]);
}


/***** function main menu *****/
 

add_action('main_menu',function(){

  require_once('/inc/bs4navwalker.php');
  
	wp_nav_menu([
	'theme_location'  => 'top_menu',
	'container_class' => 'collapse navbar-collapse', 
	'container_id'    => 'navbarSupportedContent',
	'menu_class'      => 'navbar-nav',
	'walker'          => new bs4navwalker(),
]);

});


/***** function thumbnails *****/

add_theme_support('post-thumbnails');

add_image_size( 'mysize', 100, 100,true);


/***** function widgets *****/

add_action('widgets_init','register_my_widgets');

function register_my_widgets(){

	register_sidebar([
     'name'=>'Left sidebar',
     'id'=>'left_sidebar',
     'descriptions'=>'Левое меню(left sidebar)',
     'before_widget' => '<div id="%1$s" class="widget %2$s">',
		 'after_widget'  => "</div>\n",
		 'before_title'  => '<h5 class="widgettitle">',
		 'after_title'   => "</h5>\n",
	]);

}

