<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

// **** Add the stuff below to your functions.php, the part above is the default content of a BeaverBuilder Child Theme ****

// module enqueued google fonts
add_filter( 'fl_builder_google_fonts_pre_enqueue', function( $fonts ) {
    return array();
} );

// takes care of theme enqueues
add_action( 'wp_enqueue_scripts', function() {
    global $wp_styles;
    if ( isset( $wp_styles->queue ) ) {
        foreach ( $wp_styles->queue as $key => $handle ) {
            if ( false !== strpos( $handle, 'fl-builder-google-fonts-' ) ) {
                unset( $wp_styles->queue[ $key ] );
            }
        }
    }
}, 101 );
