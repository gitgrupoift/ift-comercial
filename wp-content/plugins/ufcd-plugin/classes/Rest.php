<?php

namespace UFCD\Classes;

class Rest {
                
    private static $instance;

	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self;
		}
			return self::$instance;
    }
    
    function __construct() {   
        
    }
    
    public function add_ufcd() {
        
        
    }        
        
    public function ufcd_exist( $code ) {
        
        global $wpdb;
        
        $post_id = $wpdb->get_var( $wpdb->prepare( "SELECT post_id FROM $wpdb->postmeta WHERE meta_key='ufcd-ufcd' AND meta_value= %s LIMIT 1", $code ) );
        
        return $post_id;
    }
        
    
}