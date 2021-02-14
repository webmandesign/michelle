<?php
/**
 * Loop component.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Loop;

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

			// Pagination.
			Pagination::init();

			// Actions

				add_action( 'michelle/postslist/before', __CLASS__ . '::search_form' );

			// Filters

				add_filter( 'michelle/entry/media/get_image_size', __CLASS__ . '::image_size', 99 );

	} // /init

	/**
	 * Output search form on top of search results page.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function search_form() {

		// Requirements check

			if ( ! is_search() ) {
				return;
			}


		// Output

			get_search_form( true );

	} // /search_form

	/**
	 * Product image size.
	 *
	 * @since  1.0.0
	 *
	 * @param  string $image_size
	 *
	 * @return  string
	 */
	public static function image_size( string $image_size ): string {

		// Processing

			if ( is_search() ) {
				$image_size = 'michelle-square';
			}


		// Output

			return $image_size;

	} // /image_size

}
