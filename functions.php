<?php
/**
 * Theme Functions
 * 
 * @package PlayAir
 */

    /**
     * wp_enqueue_scripts HOOK
     * 
     * Load stylesheets and scripts here
     * 
     */
    function theme_enqueue_scripts() {
        // wp_enqueue_style( 'main-stylsheet', get_template_directory_uri() . '/main.css' );
        wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );

        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js' ), true  );
    }

    add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

?>
