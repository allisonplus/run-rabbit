<?php
/**
 * Plugin Name: Run Rabbit Run Functionality Plugin
 * Description: This plugin stores custom functionality for Run Rabbit Run.
 * Version: 1.0.0
 * Author: Allison Tarr
 * Author URI: http://www.allisontarr.com
 * Text Domain: rrr
 *
 * @package Run Rabbit Run
 */

// Plugin Directory.
define( 'BE_DIR', dirname( __FILE__ ) );

require_once( BE_DIR . '/run-rabbit-functionality/inc/general.php' ); // General.
require_once( BE_DIR . '/run-rabbit-functionality/core-functionality.php' ); // General.
require_once( BE_DIR . '/run-rabbit-functionality/inc/cpt-portfolio.php' ); // CPT Portfolio.
require_once( BE_DIR . '/run-rabbit-functionality/advanced-custom-fields-pro/acf.php' ); // Advanced Custom Fields.
