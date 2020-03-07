<?php

namespace UFCD\Classes;

class Posting {
    
    private static $instance;

	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self;
		}
			return self::$instance;
    }
    
    public function __construct() {
          
        // add_filter( 'title_save_pre', array( $this, 'post_title_automate' ) );
        
    }
    
    public function post_title_automate( $title ) {
        
    }
    
}