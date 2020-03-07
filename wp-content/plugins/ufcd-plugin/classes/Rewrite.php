<?php

namespace UFCD\Classes;

class Rewrite {
                
    private static $instance;

	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self;
		}
			return self::$instance;
    }
    
    function __construct() {

        
    }
    

    
}