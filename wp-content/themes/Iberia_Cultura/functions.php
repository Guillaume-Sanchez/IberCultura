<?php 

function title_supports() {
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'Menu_Principal');
    register_nav_menu('footer', 'Pied_de_Page');
};

function bootstrap_register_assets() {
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
};

function iberia_register_style() {
    wp_register_style('iberia_style', get_template_directory_uri() . '/assets/css/style.scss');
    wp_enqueue_style('iberia_style');
};

function font_familly() {
    wp_register_style('Merriweather', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap');
    wp_register_style('Dancing_Script', 'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap');
    wp_enqueue_style('Dancing_Script');
    wp_enqueue_style('Merriweather');
};

function header_menu_class($classes) {
    $classes[] = 'nav-item';
    return $classes;
};

function header_menu_link($attrs) {
    $attrs['class'] = 'nav-link';
    return $attrs;
};

add_action('after_setup_theme', 'title_supports');
add_action('wp_enqueue_scripts', 'bootstrap_register_assets');
add_action('wp_enqueue_scripts', 'iberia_register_style');
add_action('wp_enqueue_scripts', 'font_familly');
add_filter('nav_menu_css_class', 'header_menu_class');
add_filter('nav_menu_link_attributes', 'header_menu_link');

?>