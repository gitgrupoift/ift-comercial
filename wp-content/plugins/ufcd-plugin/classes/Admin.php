<?php

namespace UFCD\Classes;


class Admin {
    
    
    public function __construct() {
        
        add_filter('use_block_editor_for_post_type', array( $this, 'disable_gutenberg' ), 10, 2);
        add_action( 'do_meta_boxes', array( $this, 'remove_astra_metabox' ) );
        
    }
    
    public function disable_gutenberg( $current_status, $post_type ) {

        if ($post_type === 'cartaz') return false;
        return $current_status;
        
    }
    
    public static function remove_astra_metabox( $post_type ) {
        
        remove_meta_box( 'astra_settings_meta_box', $post_type, 'side' );	
        
    }
    
    public static function remove_content_editor( $default, $post_type_to_apply ) {

        
    }
    
    
}