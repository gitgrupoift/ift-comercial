<?php

namespace UFCD\Classes;

class Pdf {

    private static $instance;
    
    private $post_types_with_pdf;

	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self;
		}
			return self::$instance;
    }
    
    public function __construct() {   
        
        $this->post_types_with_pdf = array();
        
    }
    
    
}