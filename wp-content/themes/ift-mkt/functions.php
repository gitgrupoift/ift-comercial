<?php
/**
 * IFT Comercial & Marketing Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package IFT Comercial & Marketing
 * @since 1.0.0
 */

use IFT\Child\Footer;
/**
 * Define Constants
 */
define( 'CHILD_THEME_IFT_COMERCIAL_MARKETING_VERSION', '1.0.0' );

require __DIR__ . '/vendor/autoload.php';

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'ift-comercial-marketing-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_IFT_COMERCIAL_MARKETING_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function add_escola_to_head( $classes ) {
    
    if ( is_single() ) {
        
        global $post;
        
        $escola = get_the_terms( $post->ID, 'escola' );
        if ( $escola && ! is_wp_error( $escola ) ) {
            $classes[] = $escola[0]->slug;
        }
        return $classes;
    }
}
add_filter( 'body_class', 'add_escola_to_head' );

function ufcds_assoc() {
    $post_objects = get_field('ufcd_do_cartaz', $post->ID);
     echo $post_objects;
}


new Footer();

