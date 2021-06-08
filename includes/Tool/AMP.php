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
	 * AMP attributes.
	 *
	 * @since  1.0.0
	 *
	 * @var array
	 */
	private static $atts = array(
		'html'             => '[class]="( searchMenu || navMenuToggledOn ? \'lock-scroll\' : \'\' )"',
		'search/container' => '[class]="\'modal-search-container\' + ( searchMenu ? \' toggled\' : \'\' )"',
		'search/button'    => 'on="tap:AMP.setState( { searchMenu: ! searchMenu  } )" [aria-expanded]="searchMenu ? \'true\' : \'false\'"',
	);

	/**
	 * Initialization.
	 *
	 * @since    1.0.0
	 * @version  1.2.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			// Actions

				add_action( 'after_setup_theme', __CLASS__ . '::after_setup_theme' );

			// Filters

				add_action( 'amp_dev_mode_element_xpaths', __CLASS__ . '::dev_mode_xpaths' );

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
	 * Get AMP attributes.
	 *
	 * @since  1.2.0
	 *
	 * @param  string $context
	 * @param  bool   $echo
	 *
	 * @return  void  Either return or echo the string value.
	 */
	public static function get_atts( string $context = '', bool $echo = false ) {

		// Processing

			if (
				self::is_amp()
				&& isset( self::$atts[ $context ] )
			) {
				$atts = ' ' . trim( self::$atts[ $context ] );
			} else {
				$atts = '';
			}

			/**
			 * Filters AMP attributes.
			 *
			 * @since  1.2.0
			 *
			 * @param  string $atts
			 * @param  string $context
			 */
			$atts = (string) apply_filters( 'michelle/amp/get_atts', $atts, $context );


		// Output

			if ( $echo ) {
				echo $atts;
			} else {
				return $atts;
			}

	} // /get_atts

	/**
	 * XPath queries for elements that should be enabled for AMP dev mode.
	 *
	 * @since  1.2.0
	 *
	 * @param  array $xpaths
	 *
	 * @return  array
	 */
	public static function dev_mode_xpaths( array $xpaths ): array {

		// Processing

			if ( is_customize_preview() ) {
				/**
				 * @see  WebManDesign\Michelle\Customize\Preview::assets()
				 */
				$xpaths[] = '//style[ @id = "michelle-customize-preview-inline-css" ]';
			}


		// Output

			return $xpaths;

	} // /dev_mode_xpaths

}
