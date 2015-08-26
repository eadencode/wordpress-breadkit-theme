<?php

//ADD MENU TO WORDPRESS DASHBOARD
add_theme_support( 'menus' );

//REGISTER MENU WITH WORDPRESS
function register_theme_menus(){

    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' )
        )
    );
}

add_action( 'init', 'register_theme_menus' );


//DEV STYLES
function fywave_theme_dev_styles(){
    wp_enqueue_style( 'animations_css', get_template_directory_uri() . '/css/animations/animations.css' );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
}

//LIVE STYLES
function fywave_theme_live_styles(){
    wp_enqueue_style( 'live_css', get_template_directory_uri() . '/final.min.css' );
}

//DEV STYLES
add_action( 'wp_enqueue_scripts', 'fywave_theme_dev_styles' );

//LIVE STYLES
//add_action( 'wp_enqueue_scripts', 'fywave_theme_live_styles' );

//DEV SCRIPTS
function fywave_theme_dev_js(){
    
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'ux_js', get_template_directory_uri() . '/js/ux.js', array('jquery'), '', false );
    wp_enqueue_script( 'fonts_js', get_template_directory_uri() . '/js/fonts.js', array('jquery'), '', false );
    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/node_modules/gsap/src/minified/TweenMax.min.js', '', '', false );
    wp_enqueue_script( 'scrollmagic', get_template_directory_uri() . '/node_modules/scrollmagic/scrollmagic/minified/ScrollMagic.min.js', '', '', false );

}

//LIVE SCRIPTS
function fywave_theme_live_js() {
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('final_js', get_template_directory_uri() . '/js/final.min.js', '', '', false);
    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/js/gsap/minified/TweenMax.min.js', '', '', false );
    wp_enqueue_script( 'scrollmagic', get_template_directory_uri() . '/js/gsap/bower_components/ScrollMagic/scrollmagic/minified/ScrollMagic.min.js', '', '', false );
    
}
    
//DEV SCRIPTS
add_action( 'wp_enqueue_scripts', 'fywave_theme_dev_js' );

//LIVE SCRIPTS
//add_action( 'wp_enqueue_scripts', 'fywave_theme_live_js' );

?>