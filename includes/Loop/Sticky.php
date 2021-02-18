<?php
/**
 * Sticky posts component.
 *
 * Treats sticky posts as featured posts above the posts list on blog page.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Loop;

use WebManDesign\Michelle\Component_Interface;
use WP_Query;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Sticky implements Component_Interface {

	/**
	 * Lists of sticky post IDs.
	 *
	 * @var array
	 */
	private static $stickies = array();

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Variables

			// Get just 3 of the sticky posts.
			self::$stickies = array_slice( array_filter( (array) get_option( 'sticky_posts' ) ), 0, 3 );


		// Requirements check

			if ( empty( self::$stickies ) ) {
				return;
			}


		// Processing

			// Actions

				add_action( 'pre_get_posts', __CLASS__ . '::pre_get_posts' );

	} // /init

	/**
	 * Modify blog posts query.
	 *
	 * @since  1.0.0
	 *
	 * @param  WP_Query $query
	 *
	 * @return  void
	 */
	public static function pre_get_posts( WP_Query $query ) {

		// Requirements check

			if (
				! $query->is_home()
				|| ! $query->is_main_query()
			) {
				return;
			}


		// Processing

			$query->set( 'ignore_sticky_posts', 1 );
			$query->set( 'post__not_in', self::$stickies );

	} // /pre_get_posts

}
