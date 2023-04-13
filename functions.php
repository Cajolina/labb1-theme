<?php

function themeSupport()
{
    //support menu
    register_nav_menu('primary', 'Primary');

    //this add dynamic title tag support
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    //add theme support for widgets
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'themeSupport');
//get_sidebar() får man tillgång till php filen sidebar.php
register_sidebar([
    'name' => 'sidebarWidget',
    'description' => 'Widget for sidebars',
    'id' => 'sidebarWidget'
]);


///enqueue scripts

function enqueue_styles()
{
    wp_register_style('css-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('css-style');
    wp_register_style('fontawe', get_template_directory_uri() . '/assets/css/font-awesome.css');
    wp_enqueue_style('fontawe');
    wp_register_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('bootstrap-style');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js');
    wp_enqueue_script('jquery');
    wp_register_script('scriptjs', get_template_directory_uri() . '/assets/js/script.js', array('jquery'));
    wp_enqueue_script('scriptjs');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
