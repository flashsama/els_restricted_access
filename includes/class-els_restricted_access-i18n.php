<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://elahoubi.ma
 * @since      1.0.0
 *
 * @package    Els_restricted_access
 * @subpackage Els_restricted_access/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Els_restricted_access
 * @subpackage Els_restricted_access/includes
 * @author     salaheddine El Ahoubi <elahoubi@gmail.com>
 */
class Els_restricted_access_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'els_restricted_access',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
