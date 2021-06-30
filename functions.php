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
        wp_register_style( 'theme-stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
        wp_register_script( 'color-mode-js', get_template_directory_uri() . '/assets/js/color-mode.js', [], filemtime( get_template_directory() . '/assets/js/color-mode.js' ), false  );
        wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js' ), true  );

        wp_enqueue_style( 'theme-stylesheet' );
        wp_enqueue_script( 'color-mode-js' );
        wp_enqueue_script( 'main-js' );
    }

    add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

?>
