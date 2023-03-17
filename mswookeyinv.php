<?php

/**
 * Plugin Name: Plugin de integração Keyinvoice vs Woocommerce
 * Plugin URI: http://www.example.org/wordpress-tutorial/
 * Description: Plugin com ligação entre software gestão keyinvoice e o woocommwerce    
 * Version: 1.0.0
 * Author: Manuel Santiago
 * Author URI: http://www.msantiago.pt/
 * License: GPLv2
 */

defined( 'ABSPATH' ) or die( "Access denied !" );

## Definição de constantes
define( 'WKI_NAME', 'mswookeyinv' );
define( "WKI_VERSION", '1.0.0' );

define( "WKI_URL", trailingslashit( plugin_dir_url( __FILE__ ) ) );

// plugin path
define( "WKI_PATH", plugin_dir_path( __FILE__ ) );

//basename mswookeyinv/mswookeyinv.php
define( "WKI_PLUGIN_BASENAME", plugin_basename( __FILE__ ) );

// main file - mswookeyinv.php
define( "WKI_PLUGIN_FILE", __FILE__ );

