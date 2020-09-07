<?php 

function title_supports() {
    add_theme_support('title-tag'); 
}

function bootstrap_register_assets() {
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function iberia_register_style() {
    wp_register_style('iberia_style', get_template_directory_uri() . '/assets/css/style.scss');
    wp_enqueue_style('iberia_style');
}

function font_familly() {
    wp_register_style('Merriweather', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap');
    wp_register_style('Dancing_Script', 'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap');
    wp_enqueue_style('Dancing_Script');
    wp_enqueue_style('Merriweather');
}

function iberia_title($title){
    return 'Salut';
};

add_action('after_setup-theme', 'title_supports');
add_action('wp_enqueue_scripts', 'bootstrap_register_assets');
add_action('wp_enqueue_scripts', 'iberia_register_style');
add_action('wp_enqueue_scripts', 'font_familly');
add_filter('wp_title', 'iberia_title');

?>