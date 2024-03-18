<?php

function workout_files() {

    wp_enqueue_style('workout_styles', get_theme_file_uri('/assets/css/style.min.css'));

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js');


    wp_enqueue_script('jquery');
    wp_enqueue_script('workout_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '3.6.1');

}

add_action('wp_enqueue_scripts', 'workout_files');

function theme_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => ('Primary Menu'),
            'burger-menu' => ('Mobile Menu')
        )
    );
}
add_action('after_setup_theme', 'theme_register_menus');

function team_post_type() {
    register_post_type('team', array(
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'team'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' =>  'Team Members',
            'singular_name' => 'team',
            'add_new' => 'Add new',
            'add_new_item' => 'Add new member',
        ),
    ));
}
add_action('init', 'team_post_type');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

remove_filter('the_content', 'wpautop');

?>