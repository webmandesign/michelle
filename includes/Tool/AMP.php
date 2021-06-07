<?php
/**
 * AMP integration component.
 *
 * Although this is technically a plugin integration, we are setting it up
 * as a theme tool for global access regardless the plugin activation.
 *
 * @link  https://wordpress.org/plugins/amp/
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.2.0
 */

namespace WebManDesign\Michelle\Tool;

use WebManDesign\Michelle\Component_Interface;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class AMP implements Component_Interface {

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			// Actions

				add_action( 'after_setup_theme', __CLASS__ . '::after_setup_theme' );

	} // /init

	/**
	 * After setup theme.
	 *
	 * @since    1.0.0
	 * @version  1.2.0
	 *
	 * @return  void
	 */
	public static function after_setup_theme() {

		// Processing

			add_theme_support( 'amp', array(

				// https://amp-wp.org/documentation/playbooks/toggling-hamburger-menus/
				'nav_menu_toggle' => array(
					'nav_container_id'           => 'site-navigation',
					'nav_container_toggle_class' => 'toggled',
					'menu_button_id'             => 'menu-toggle',
					'menu_button_toggle_class'   => 'toggled',
				),

				// https://amp-wp.org/documentation/playbooks/navigation-sub-menu-buttons/
				'nav_menu_dropdown' => array(
					'sub_menu_button_class'        => 'button-toggle-sub-menu',
					'sub_menu_button_toggle_class' => 'toggled',
					'expand_text'                  => esc_html__( 'Expand child menu', 'michelle' ),
					'collapse_text'                => esc_html__( 'Collapse child menu', 'michelle' ),
				),

			) );

	} // /after_setup_theme

	/**
	 * Determines whether this is an AMP response.
	 *
	 * Note that this must only be called after the `parse_query` action.
	 *
	 * @since  1.0.0
	 *
	 * @return  bool  Whether the AMP plugin is active and the current request is for an AMP endpoint.
	 */
	public static function is_amp(): bool {

		// Output

			return function_exists( 'is_amp_endpoint' ) && is_amp_endpoint();

	} // /is_amp

	/**
	 * Filter AMP attributes.
	 *
	 * @since  1.2.0
	 *
	 * @param  array  $atts
	 * @param  string $context
	 *
	 * @return  array
	 */
	public static function filter_atts( array $atts, string $context = '' ): array {

		// Output

			/**
			 * Filters AMP attributes.
			 *
			 * @since  1.2.0
			 *
			 * @param  array  $atts
			 * @param  string $context
			 */
			return (array) apply_filters( 'michelle/AMP/attributes', $atts, $context );

	} // /is_amp

	/**
	 * Get AMP attributes: search modal.
	 *
	 * @since  1.2.0
	 *
	 * @return  array
	 */
	public static function get_atts_search_modal(): array {

		// Variables

			$atts = array();


		// Processing

			if ( self::is_amp() ) {
				$atts = array(
					'button' =>
						' on="tap:AMP.setState( { searchMenu: ! searchMenu  } )"' .
						' [aria-expanded]="searchMenu ? \'true\' : \'false\'"',
					'container' =>
						' [class]="\'modal-search-container\' + ( searchMenu ? \' toggled\' : \'\' )"',
				);
			}


		// Output

			return (array) self::filter_atts( $atts, 'search-modal' );

	} // /get_atts_search_modal

}
