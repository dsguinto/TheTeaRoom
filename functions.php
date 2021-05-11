<?php

//Theme Supports
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header');

// Custom Image Sizes
add_image_size('blog-large', 400, 400, true);
add_image_size('blog-small', 150, 150, true);



//Load Stylesheets
function global_css()
{
    wp_register_style('global', get_template_directory_uri() . '/css/global.css', array(), false, 'all' );
    wp_enqueue_style('global');
}
add_action('init', 'global_css');

//Conditional CSS functions
function hompage_css() //Homepage stylesheet
{
    if( is_page('the-tea-room')){
        wp_register_style('homepage', get_template_directory_uri() . '/css/homepage.css', array(), false, 'all' );
        wp_enqueue_style('homepage');
    }
}
add_action('wp_enqueue_scripts', 'hompage_css');

function aboutus_css()//About Us stylesheet
{
    if( is_page('about-us')){
        wp_register_style('aboutus', get_template_directory_uri() . '/css/aboutus.css', array(), false, 'all' );
        wp_enqueue_style('aboutus');
    }
}
add_action('wp_enqueue_scripts', 'aboutus_css');

function menu_css()//Menu stylesheet
{
    if( is_page('menu')){
        wp_register_style('menu', get_template_directory_uri() . '/css/menu.css', array(), false, 'all' );
        wp_enqueue_style('menu');
    }
}
add_action('wp_enqueue_scripts', 'menu_css');

function contactus_css()//Contact Us stylesheet
{
    if( is_page('contact-us')){
        wp_register_style('contactus', get_template_directory_uri() . '/css/contactus.css', array(), false, 'all' );
        wp_enqueue_style('contactus');
    }
}
add_action('wp_enqueue_scripts', 'contactus_css');

function error404_css()//404 stylesheet
{
    if( is_page_template('404.php')){
        wp_register_style('404', get_template_directory_uri() . '/css/404.css', array(), false, 'all' );
        wp_enqueue_style('404');
    }
}
add_action('wp_enqueue_scripts', 'error404_css');


//Load FontAwesome
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );

function enqueue_load_fa() {
    wp_enqueue_script( 'load-fa', 'https://kit.fontawesome.com/2956115494.js' );
}


//Load JavaScript
function load_js()
{
    // wp_register_style('main', get_template_directory_uri() . '/js/main.js', array(), false, 'all' );

    // wp_enqueue_style('main');
    //https://www.youtube.com/watch?v=KtMwTBl-j8I&ab_channel=MrDigital
}

// add_action('wp_enqueue_scripts', 'name_of_file_to_load');


// Generator Menus
register_nav_menus(

    array(

        'main-menu' => 'Main Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )
);

//Custom Post Types
// function cars_post()
// {
//     $args = array(
//         'labels' => array(
//             'name' => 'Cars',
//             'singular_name' => 'Car',
//         ),
//         'hierarchical' => true,
//         'public' => true,
//         'has_archive' => true,
//         'supports' => array('title', 'thumbnail')
//     );

//     register_post_type('cars', $args);

// }
// add_action('init', 'cars_post');


//Email Functions

// add_action('wp_ajax_enquiry')

function enquiry_form()
{
    wp_send_json_sucess('It Works!');
}