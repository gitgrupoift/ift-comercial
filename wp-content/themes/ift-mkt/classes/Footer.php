<?php

namespace IFT\Child;
use IFT\Child\Footer\FooterLoader;

class Footer {
    
    private static $instance;
    
    const FOOTER_SUB = '/footer-classes/';
    public $footer_dir;

    public static function get_instance() {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self;
        }
            return self::$instance;
    }
    
    public function __construct() {

        $this->footer_dir = plugins_url() . FOOTER_SUB;
        
        self::footer_instance();

    }
    
    private function footer_instance() {
        
        new FooterLoader();
        
    }    
    
}