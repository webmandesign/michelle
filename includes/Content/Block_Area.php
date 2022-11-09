<?php
/**
 * Block area component.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.6
 * @version  1.5.0
 */

namespace WebManDesign\Michelle\Content;

use WebManDesign\Michelle\Component_Interface;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Block_Area implements Component_Interface {

	/**
	 * Initialization.
	 *
	 * @since    1.0.6
	 * @version  1.5.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			// Actions

				add_action( 'after_setup_theme', __CLASS__ . '::after_setup_theme' );

				add_action( 'michelle/content/404', __CLASS__ . '::error_404' );

				add_action( 'tha_footer_top', __CLASS__ . '::footer' );

	} // /init

	/**
	 * After setup theme.
	 *
	 * @since  1.5.0
	 *
	 * @return  void
	 */
	public static function after_setup_theme() {

		// Processing

			add_theme_support( 'block-template-parts' );

	} // /after_setup_theme

	/**
	 * Gets WordPress 6.1+ block template part content.
	 *
	 * This is basically WordPress' `block_template_part()` function adapted
	 * for our purpose - to return content instead of echoing it.
	 *
	 * @since  1.5.0
	 *
	 * @param  string $part  Name of block template part found in `parts` folder.
	 *
	 * @return  string
	 */
	public static function get_template_part_content( string $part = '' ): string {

		// Requirements check

			if (
				empty( $part )
				|| ! function_exists( 'block_template_part' )
			) {
				return '';
			}


		// Variables

			$template_part = get_block_template( get_stylesheet() . '//' . $part, 'wp_template_part' );

			if (
				! $template_part
				|| empty( $template_part->content )
			) {
				return '';
			}


		// Output

			return trim( (string) do_blocks( $template_part->content ) );

	} // /get_template_part_content

	/**
	 * Get block area post type key.
	 *
	 * @since  1.3.0
	 *
	 * @return  string
	 */
	public static function get_post_type(): string {

		// Output

			/**
			 * Filters block area post type key.
			 *
			 * @since  1.3.0
			 *
			 * @param  string $post_type
			 */
			return (string) apply_filters( 'michelle/content/block_area/get_post_type', 'wp_block' );

	} // /get_post_type

	/**
	 * Site footer content.
	 *
	 * @since    1.0.0
	 * @version  1.5.0
	 *
	 * @return  void
	 */
	public static function footer() {

		// Output

			if ( ! empty( self::get_template_part_content( 'footer' ) ) ) {
				remove_action( 'tha_footer_bottom', 'WebManDesign\Michelle\Footer\Component::site_info', 100 );
				block_template_part( 'footer' );
			} else {
				get_template_part( 'templates/parts/block/area/footer' );
			}

	} // /footer

	/**
	 * Error 404 page content.
	 *
	 * @since    1.0.6
	 * @version  1.5.0
	 *
	 * @return  void
	 */
	public static function error_404() {

		// Output

			if ( ! empty( self::get_template_part_content( 'error-404' ) ) ) {
				block_template_part( 'error-404' );
			} else {
				get_template_part( 'templates/parts/block/area/404' );
			}

	} // /error_404

}
