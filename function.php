<?php

// Setup del tema

function bauerpress_setup() {

    // Con questo comando facciamo gestire <title> a Wordpress

    add_theme_support( 'title-tag' );



    // Thumbnail per i post
    
    add_theme_support( 'post-thumbnails' );



    // Menu di navigazione
    
    register_nav_menus( array(
        
        'primary' => __( 'Menu principale', 'bauerpress' ),
    ) );



    // Sidebar principale

    register_sidebar( array(
        
        'name' => __( 'Sidebar principale', 'bauerpress' ),

        'id' => 'sidebar-1',

        'description' => __('Widget mostrati nella sidebar a destra.', 'baurpress'),

        'before_widget' => '<section class="sidebar-section widget %2$s">',

        'after-widget' => '</section>',

        'before_title' => '<h3 class="widget-title">',

        'after-title' => '</h3>',
    ) );

}

add_action( 'after_setup_theme', 'bauerpress_setup' );


//Caricamento CSS del tema

function bauerpress_assets() {

    wp_enqueue_style(

        'bauerpress-style',

        get_stylesheet_uri (), //style.css

        array(),

        '1.0'

    );

}

add_action('wp-enqueue_scripts', 'bauerpress_assets');