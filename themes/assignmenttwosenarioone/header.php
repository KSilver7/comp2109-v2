<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?> 
<!-- Linking my stylesheet-->
        <link rel="stylesheet" href="<?php echo esc_url( home_url( 'wp-content/themes/assignmentwosenarioone/css/custom-styles.css' ) ); ?>">
    </head>
    <body <?php body_class(); ?>>
        <header>
            <div>
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo esc_url( home_url( 'wp-content/uploads/2025/03/book.svg' ) ); ?>" alt="header logo">
<!-- Photo as a logo-->
                </a>
            </div>
            <nav>
                <?php
                // Things get convoluted when they're named too similarly
                wp_nav_menu( array(
                    'menu'              => 'main2',
                    'theme_location'    => '',
                    'depth'             => 2,
                    'fallback_cb'       => false
                ));
                ?>
            </nav>
        </header>