<?php

namespace IFT\Child\Footer;

class FooterMarkup {
    
    private static $instance;
    
    public $footer_tpl_url;

    public static function get_instance() {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self;
        }
            return self::$instance;
    }
    
    public function __construct() {
        
        $this->footer_tpl_url = get_stylesheet_directory() . '/templates/footer-templates/';
            
        add_filter( 'astra_meta_box_options', array( $this, 'add_options' ) );
        
        add_action( 'init', array( $this, 'register_advanced_footer_widget' ) );
        
        add_action( 'astra_footer_content', array( $this, 'html_markup_loader' ), 1 );
        
    }
    
    function add_options( $meta_option ) {

        if ( ! isset( $meta_option['footer-adv-display'] ) ) {
            $meta_option['footer-adv-display'] = array(
                'sanitize' => 'FILTER_DEFAULT',
            );
        }

        return $meta_option;
		
    }
    
    function register_advanced_footer_widget() {
        register_sidebar(
				apply_filters(
					'astra_advanced_footer_widget_1_args',
					array(
						'name'          => esc_html__( 'Footer Widget Area 1', 'astra-addon' ),
						'id'            => 'advanced-footer-widget-1',
						'before_widget' => '<div id="%1$s" class="widget %2$s">',
						'after_widget'  => '</div>',
						'before_title'  => '<h2 class="widget-title">',
						'after_title'   => '</h2>',
					)
				)
			);

        register_sidebar(
				apply_filters(
					'astra_advanced_footer_widget_2_args',
					array(
						'name'          => esc_html__( 'Footer Widget Area 2', 'astra-addon' ),
						'id'            => 'advanced-footer-widget-2',
						'before_widget' => '<div id="%1$s" class="widget %2$s">',
						'after_widget'  => '</div>',
						'before_title'  => '<h2 class="widget-title">',
						'after_title'   => '</h2>',
					)
				)
			);

        register_sidebar(
				apply_filters(
					'astra_advanced_footer_widget_3_args',
					array(
						'name'          => esc_html__( 'Footer Widget Area 3', 'astra-addon' ),
						'id'            => 'advanced-footer-widget-3',
						'before_widget' => '<div id="%1$s" class="widget %2$s">',
						'after_widget'  => '</div>',
						'before_title'  => '<h2 class="widget-title">',
						'after_title'   => '</h2>',
					)
				)
			);

        register_sidebar(
				apply_filters(
					'astra_advanced_footer_widget_4_args',
					array(
						'name'          => esc_html__( 'Footer Widget Area 4', 'astra-addon' ),
						'id'            => 'advanced-footer-widget-4',
						'before_widget' => '<div id="%1$s" class="widget %2$s">',
						'after_widget'  => '</div>',
						'before_title'  => '<h2 class="widget-title">',
						'after_title'   => '</h2>',
					)
				)
			);

        register_sidebar(
				apply_filters(
					'astra_advanced_footer_widget_5_args',
					array(
						'name'          => esc_html__( 'Footer Widget Area 5', 'astra-addon' ),
						'id'            => 'advanced-footer-widget-5',
						'before_widget' => '<div id="%1$s" class="widget %2$s">',
						'after_widget'  => '</div>',
						'before_title'  => '<h2 class="widget-title">',
						'after_title'   => '</h2>',
					)
				)
			);
		}

    function html_markup_loader() {

        $advanced_footer_layout = astra_get_option( 'footer-adv' );
        
        $advanced_footer_meta   = astra_get_option_meta( 'footer-adv-display' );
        
        if ( apply_filters( 'astra_advanced_footer_disable', false ) || 'disabled' == $advanced_footer_layout || 'disabled' == $advanced_footer_meta ) {
            return;
        }

        $advanced_footer_layout = str_replace( 'layout-', '', $advanced_footer_layout );
        
        astra_get_template( $this->footer_tpl_url - 'layout-' . esc_attr( $advanced_footer_layout ) . '.php' );
    }

    
}