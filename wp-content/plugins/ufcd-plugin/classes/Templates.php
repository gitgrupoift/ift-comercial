<?php

namespace UFCD\Classes;


class Templates {
    
    private static $instance;
    protected $templates;

	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self;
		}
			return self::$instance;
    }
    
    public function __construct() {
        
        $this->templates = array();
        
    }
    
    public function register_project_templates() {
        
    }
    
    public function view_project_template() {
        
    }
    
}