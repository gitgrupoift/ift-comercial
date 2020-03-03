<?php
/*
Plugin Name: Grupo IFT - UFCD Rest API Plugin
Plugin URI: https://grupoift.pt
Description: Conjunto de ferramentas e funções desenvolvidas e aplicáveis apenas ao desenvolvimento da API de UFCDs e qualificações.
Version: 1.0.0
Author: Grupo IFT | Carlos Matos
Author URI: https://grupoift.pt
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

namespace UFCD;

use UFCD\Classes\Rest;
use UFCD\Classes\Optimize;
use UFCD\Classes\CustomType;
use UFCD\Classes\Templates;
use UFCD\Classes\Head;
use UFCD\Classes\Admin;


/**
 * Se acionado diretamente interrompe a execução.
 */
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class UFCD {
    
    private static $instance;
    
    private function __construct() {
        
        require __DIR__ . '/vendor/autoload.php';
        
        define( 'UFCD_VERSION', '1.0.0' );
        
        register_activation_hook(
			__FILE__,
			array( $this, 'activate_ufcd' )
		);
        
        register_deactivation_hook(
			__FILE__,
			array( $this, 'deactivate_ufcd' )
		);
        
        register_uninstall_hook(
			__FILE__,
			array( 'UFCD', 'uninstall_ufcd' )
		);
        
        $this->run_classes();
        $this->create_cpts();
                
    }
    
    public static function instance() {
		if ( is_null( ( self::$instance ) ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}
    
    public function run_classes() {
        
        $adds = new Rest();
        new Optimize();
        new Templates();
        new Head();
        $admin = new Admin();
        
    }
    
    public function create_cpts() {      
        
        $ufcds = new CustomType( array(
            'post_type_name' => 'ufcd',
            'singular' => 'UFCD',
            'plural' => 'UFCDs',
            'slug' => 'ufcd-cnq',
            'show_in_rest' => true
        ));
        
        $cartazes = new CustomType( array(
            'post_type_name' => 'cartaz',
            'singular' => 'Cartaz',
            'plural' => 'Cartazes',
            'slug' => 'cartaz',
            'show_in_rest' => true
        ));
        
        $perfis = new CustomType( array(
            'post_type_name' => 'qualifica',
            'singular' => 'Qualificação',
            'plural' => 'Qualificações',
            'slug' => 'ufcd-perfil'
        ));
        
        $ufcds->register_taxonomy(array(
            'taxonomy_name' => 'area-ufcd',
            'singular' => 'Área',
            'plural' => 'Áreas',
            'slug' => 'area_ufcd'
        ));
        
        $ufcds->register_taxonomy(array(
            'taxonomy_name' => 'comp-ufcd',
            'singular' => 'Componente',
            'plural' => 'Componentes',
            'slug' => 'comp_ufcd'
        ));
        
        $cartazes->register_taxonomy(array(
            'taxonomy_name' => 'escola',
            'singular' => 'Escola ou Empresa',
            'plural' => 'Escolas ou Empresas',
            'slug' => 'escola'
        ));
        
        $ufcds->menu_icon("dashicons-editor-ol-rtl");
        $perfis->menu_icon("dashicons-id-alt");
        $cartazes->menu_icon("dashicons-text-page");
        
        add_post_type_support( 'qualifica', 'thumbnail' );
        add_post_type_support( 'ufcd', 'thumbnail' );
        add_post_type_support( 'cartaz', 'thumbnail' );
        
    }
    
    public function activate_ufcd() {
	   
	}
    
    public function deactivate_ufcd() {
		
	}
    
    public static function uninstall_ufcd() {
		
	}
    
}

UFCD::instance();