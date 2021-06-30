<?php
/**
 * Theme Functions
 * 
 * @package Play Air
 */

    /**
     * wp_enqueue_scripts HOOK
     * 
     * Load stylesheets and scripts here
     * 
     */
    function theme_enqueue_scripts() {
        // Register Styles
        wp_register_style( 'theme-stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
        // Register Scripts
        wp_register_script( 'color-mode-js', get_template_directory_uri() . '/assets/js/color-mode.js', [], filemtime( get_template_directory() . '/assets/js/color-mode.js' ), false  );
        wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js' ), true  );

        // Enqueue Styles
        wp_enqueue_style( 'theme-stylesheet' );
        // Enqueue Scripts
        wp_enqueue_script( 'color-mode-js' );
        wp_enqueue_script( 'main-js' );
    }

    // Add Action Enqueue Scripts ( theme_enqueue_scripts )
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


    /**
     * Filter the except length to 20 words.
     *
     * @param int $length Excerpt length.
     * @return int (Maybe) modified excerpt length.
     */
    function wpdocs_custom_excerpt_length( $length ) {
        return 10;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

    /**
     * Filter the "read more" excerpt string link to the post.
     *
     * @param string $more "Read more" excerpt string.
     * @return string (Maybe) modified "read more" excerpt string.
     */
    function wpdocs_excerpt_more( $more ) {
        if ( ! is_single() ) {
            $more = sprintf( '<a class="read-more ml-6" href="%1$s">%2$s</a>',
                get_permalink( get_the_ID() ),
                __( 'Read More', 'textdomain' )
            );
        }
    
        return $more;
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

?>
