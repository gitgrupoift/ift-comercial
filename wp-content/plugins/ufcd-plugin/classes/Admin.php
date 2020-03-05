<?php

namespace UFCD\Classes;


class Admin {
    
    
    public function __construct() {
        
        add_filter('use_block_editor_for_post_type', array( $this, 'disable_gutenberg' ), 10, 2);
        add_action( 'do_meta_boxes', array( $this, 'remove_astra_metabox' ) );
        add_action( 'media_buttons', array( $this, 'add_file_buttons' ) );
        add_action( 'admin_init', array( $this, '_post_editor_css' ) );
        add_action( 'admin_init', array( $this, 'non_admin_backend' ) );
        
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
    
    public static function add_file_buttons() {
        
        $button_permalink = get_permalink( $post->ID ) . 'pdf';
        echo '<a href="' . $button_permalink . '" class="button button-pdf">Gerar PDF</a>';
        
        $button_permalink = get_permalink( $post->ID ) . 'jpg';
        echo '<a href="' . $button_permalink . '" class="button button-jpg">Gerar JPG</a>';
        
    }
    
    public function _post_editor_css() {
        
        wp_register_style( '_post-editor-fix', plugin_dir_url( __FILE__ ) . '../assets/post-editor-fix.css' );
        wp_enqueue_style('_post-editor-fix');
        
    }
    
    public function non_admin_backend() {
        
        if ( current_user_can( 'manage_options' ) ) {
            
        } else {
            remove_menu_page( 'edit-comments.php' );
            remove_menu_page( 'upload.php' );
            remove_menu_page( 'tools.php' );
            remove_menu_page( 'edit.php?post_type=page' );
            remove_menu_page( 'edit.php?post_type=elementor_library' );
            remove_menu_page( 'edit.php?post_type=qualifica' );
            remove_menu_page( 'edit.php?post_type=ufcd' );
            remove_menu_page( 'edit.php' );
        }
        
    }
    
    
}