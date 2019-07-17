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

/*****  ******/