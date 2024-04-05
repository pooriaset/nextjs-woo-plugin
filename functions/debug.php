<?php
/**
 * shop_core_plugin
 *
 * @package   shop_core_plugin
 * @author    Pooria Setayesh <pooriaset@yahoo.com>
 * @copyright 2022 Shop
 * @license   GPL 2.0+
 * @link      
 */

$s_debug = new WPBP_Debug( __( 'shop-core-plugin', S_TEXTDOMAIN ) );

/**
 * Log text inside the debugging plugins.
 *
 * @param string $text The text.
 * @return void
 */
function s_log( string $text ) {
	global $s_debug;
	$s_debug->log( $text );
}
