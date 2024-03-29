<?php 
/*
 * Подключение стилей и скриптов
 * */

function my_assets()
{
    wp_deregister_script('jquery-core');
    wp_register_script('jquery-core', get_stylesheet_directory_uri() . '/build/js/libs/jquery-3.6.0.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_style('main-style', get_template_directory_uri() . '/build/css/style.min.css');
    wp_enqueue_style('slider-style', get_template_directory_uri() . '/build/css/libs/swiper.min.css');

    //wp_enqueue_style('inter-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

    wp_enqueue_script('slider-js', get_stylesheet_directory_uri() . '/build/js/libs/swiper-bundle.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('sliderbj-js', get_stylesheet_directory_uri() . '/build/js/modules/slider.js', array('jquery','slider-js'),'1.0',true);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/build/js/app.js',  array('jquery'), '1.0', true);

    $page_template =  mb_substr(get_page_template_slug(), 0, -4); // get template file name and cut last 4 symbols


    $is_singular = is_singular('news') || is_singular('products') || is_singular('tips');



    if (is_front_page()) {}

    if (is_page_template('page-news.php')) {}

    if (is_singular('news')) {
        // wp_enqueue_style('single-news-css', get_template_directory_uri() . '/build/css/pages/single-news.css');
        // wp_enqueue_script('single-news-js', get_stylesheet_directory_uri() . '/build/js/pages/single-news.js', array('jquery'), '1.0', true);

        // wp_enqueue_style('swiper', get_template_directory_uri() . '/build/css/libs/swiper.css');
        // wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/build/js/libs/swiper.min.js',  array('jquery'), '1.0', true);
    }

    if (is_404()) {}
}

add_action('wp_enqueue_scripts', 'my_assets');