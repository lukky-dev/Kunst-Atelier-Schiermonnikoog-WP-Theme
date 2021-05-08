<?php

//settings

add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// loading css

function load_css(){
    wp_register_style("bootstrap", get_template_directory_uri(). "/css/bootstrap/bootstrap.min.css",array(),false,"all");

    wp_enqueue_style('bootstrap');

    wp_register_style("base", get_template_directory_uri(). "/css/base.css",array(),false,"all");
    
    wp_enqueue_style('base');
}

add_action('wp_enqueue_scripts','load_css');


// loading javascript

function load_js(){
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri(). "/js/bootstrap/bootstrap.min.js",'jquery',false,true);

    wp_enqueue_script('bootstrap');

    wp_register_script('header-script', get_template_directory_uri(). "/js/main.js",false,true);

    wp_enqueue_script('header-script');
}

add_action('wp_enqueue_scripts','load_js');

//loading fonts

function load_fonts(){

    wp_enqueue_style( 'google-fonts-indie-flower', 'https://fonts.googleapis.com/css2?family=Caveat&display=swap', false );
    wp_enqueue_style( 'google-fonts-raleway', 'https://fonts.googleapis.com/css2?family=Raleway&display=swap', false );
    
   
   add_action( 'wp_enqueue_scripts', 'google-fonts-indie-flower' );
   add_action( 'wp_enqueue_scripts', 'google-fonts-raleway' );
}

add_action('wp_enqueue_scripts','load_fonts');

//menus

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);



?>