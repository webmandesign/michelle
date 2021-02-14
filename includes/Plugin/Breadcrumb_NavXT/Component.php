<?php
/**
 * Breadcrumb NavXT integration component.
 *
 * @link  https://wordpress.org/plugins/breadcrumb-navxt/
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Plugin\Breadcrumb_NavXT;

use WebManDesign\Michelle\Component_Interface;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Component implements Component_Interface {

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

				add_action( 'michelle/page_header/top', __CLASS__ . '::display' );

	} // /init

	/**
	 * Breadcrumbs HTML.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function display() {

		// Output

			get_template_part( 'templates/parts/component/section', 'breadcrumbs' );

	} // /display

}
