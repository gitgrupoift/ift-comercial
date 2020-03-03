<?php

namespace IFT\Child\Footer;

class FooterLoader {
    
    private static $instance;

    public static function get_instance() {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self;
        }
            return self::$instance;
    }
    
    public function __construct() {
        
        add_filter( 'astra_theme_defaults', array( $this, 'theme_defaults' ) );

    }
    
    function theme_defaults( $defaults ) {

        $defaults['footer-adv'] = 'disabled';
        
        $defaults['footer-adv-area-padding'] = array(
            'desktop' => array(
                'top'    => '70',
                'right'  => '',
                'bottom' => '70',
                'left'   => '',
				),
            'tablet'  => array(
                'top'    => '',
                'right'  => '',
                'bottom' => '',
                'left'   => '',
				),
            'mobile'  => array(
                'top'    => '',
                'right'  => '',
                'bottom' => '',
                'left'   => '',
				),
			);
        
        $defaults['footer-adv-layout-width']               = 'content';
        $defaults['footer-adv-text-color']                 = '';
        $defaults['footer-adv-link-color']                 = '';
        $defaults['footer-adv-link-h-color']               = '';
        $defaults['footer-adv-wgt-title-color']            = '';
        $defaults['footer-adv-wgt-title-font-family']      = 'inherit';
        $defaults['footer-adv-wgt-title-font-weight']      = 'inherit';
        $defaults['footer-adv-wgt-title-text-transform']   = '';
        $defaults['footer-adv-wgt-title-line-height']      = '';
        
        $defaults['footer-adv-wgt-title-font-size'] = array(
            'desktop'      => '',
            'tablet'       => '',
            'mobile'       => '',
            'desktop-unit' => 'px',
            'tablet-unit'  => 'px',
            'mobile-unit'  => 'px',
			);
			
        $defaults['footer-adv-wgt-content-font-family']    = 'inherit';
        $defaults['footer-adv-wgt-content-font-weight']    = 'inherit';
        $defaults['footer-adv-wgt-content-text-transform'] = '';
        $defaults['footer-adv-wgt-content-line-height']    = '';
			
        $defaults['footer-adv-wgt-content-font-size']      = array(
            'desktop'      => '',
            'tablet'       => '',
            'mobile'       => '',		'desktop-unit' => 'px',
            'tablet-unit'  => 'px',
            'mobile-unit'  => 'px',
			);

        return $defaults;
        
    }
}