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
function fywave_theme_styles(){
    wp_enqueue_style( 'animations_css', get_template_directory_uri() . '/css/animations/animations.css' );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'mobile_css', get_template_directory_uri() . '/css/mobile.css' );
}

//LIVE STYLES
//function fywave_theme_styles(){
//    wp_enqueue_style( 'animations_css', get_template_directory_uri() . '/final.min.css' );
//}

add_action( 'wp_enqueue_scripts', 'fywave_theme_styles' );

//SCRIPTS
function fywave_theme_js(){
    
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'ux_js', get_template_directory_uri() . '/js/ux.js', array('jquery'), '', false );
    wp_enqueue_script( 'fonts_js', get_template_directory_uri() . '/js/fonts.js', array('jquery'), '', false );
    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/js/gsap/minified/TweenMax.min.js', '', '', false );
    wp_enqueue_script( 'scrollmagic', get_template_directory_uri() . '/js/gsap/bower_components/ScrollMagic/scrollmagic/minified/ScrollMagic.min.js', '', '', false );
//    wp_enqueue_script( 'angularjs', get_template_directory_uri() . '/js/node_modules/angular/angular.min.js', '', '', false );
//    wp_enqueue_script( 'angular-route', get_template_directory_uri() . '/js/node_modules/angular-route/angular-route.min.js', '', '', false );
//    wp_enqueue_script( 'app_js', get_template_directory_uri() . '/js/app.js', array('angularjs',  'angular-route'), '', false );

}

add_action( 'wp_enqueue_scripts', 'fywave_theme_js' );

?>