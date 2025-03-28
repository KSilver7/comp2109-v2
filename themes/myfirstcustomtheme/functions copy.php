<?php
function my_theme_setup(){
    register_nav_menus( array(
        'header'    => 'Header menu',
        'footer'    => 'Footer menu'
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup');
// Add featured image support for the posts
add_theme_support( 'post-thumbnails' );

function cmsclass_widgets_init(){
    register_sidebar(array(
        'name'                  => __( 'Footer Widget Area One', 'cmsclass' ),
        'id'                    => 'footer-widget-area-one',
        'description'           => __( 'The first footer widget area', 'cmsclass' ),
        'before_widget'         => '<div class="logo-widget">',
        'after_widget'          => '</div>',
    ));
    register_sidebar(array(
        'name'                  => __( 'Footer Widget Area Two', 'cmsclass' ),
        'id'                    => 'footer-widget-area-two',
        'description'           => __( 'The second footer widget area', 'cmsclass' ),
        'before_widget'         => '<div class="about-widget">',
        'after_widget'          => '</div>',
        'before_title'          => '<h4 class="widget-title">',
        'after_title'           => '</h4>',
    ));
    register_sidebar(array(
        'name'                  => __( 'Footer Widget Area Three', 'cmsclass' ),
        'id'                    => 'footer-widget-area-three',
        'description'           => __( 'The third footer widget area', 'cmsclass' ),
        'before_widget'         => '<div class="menu-widget">',
        'after_widget'          => '</div>',
        'before_title'          => '<h4 class="widget-title">',
        'after_title'           => '</h4>',
    ));
    register_sidebar(array(
        'name'                  => __( 'Footer Widget Area Four', 'cmsclass' ),
        'id'                    => 'footer-widget-area-four',
        'description'           => __( 'The fourth footer widget area', 'cmsclass' ),
        'before_widget'         => '<div class="contact-widget">',
        'after_widget'          => '</div>',
        'before_title'          => '<h4 class="widget-title">',
        'after_title'           => '</h4>',
    ));
}
add_action( 'widgets_init', 'cmsclass_widgets_init' );
// Custom Plugin

function retro_game_init(){
    $args = array(
        'label'     => 'Retro Games',
        'public'    => true,
        'show_ui'   => true,
        'capability_type'   =? 'post',
        'taxonomies'    => array( 'category'),
        'hierarchical'  => 'false',
        'query_var'     =>true,
        'menu_icon'     => 'dashicons-album',
        'aupports'      => array(
            'title',
            'editor',
            'excerpts',
            'trackbacks',
            'author',
            'post-formats',
            'page-attributes',
        )
    );
    register_post_type('retroGames', $args);
}
add_action('init', 'retro_game_init');
