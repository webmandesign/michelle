<?php
/**
 * Page template component.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Entry;

use WebManDesign\Michelle\Component_Interface;
use WP_Theme;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Page_Template implements Component_Interface {

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			// Filters

				add_filter( 'theme_templates', __CLASS__ . '::post_templates', 5, 4 );

				add_filter( 'michelle/header/is_disabled',      __CLASS__ . '::is_content_only' );
				add_filter( 'michelle/footer/is_disabled',      __CLASS__ . '::is_content_only' );
				add_filter( 'michelle/breadcrumbs/is_disabled', __CLASS__ . '::is_content_only' );

				add_filter( 'michelle/content/show_primary_title', __CLASS__ . '::show_primary_title' );

	} // /init

	/**
	 * Enable post templates for public post types.
	 *
	 * @since  1.0.0
	 *
	 * @param array        $post_templates  Array of page templates. Keys are filenames, values are translated names.
	 * @param WP_Theme     $theme           The theme object.
	 * @param WP_Post|null $post            The post being edited, provided for context, or null.
	 * @param string       $post_type       Post type to get the templates for.
	 *
	 * @return  array
	 */
	public static function post_templates( array $post_templates, WP_Theme $theme, $post, string $post_type ): array {

		// Requirements check

			if ( ! get_post_type_object( $post_type )->public ) {
				return $post_templates;
			}


		// Variables

			$registered_post_templates = $theme->get_post_templates();

			if ( isset( $registered_post_templates['public-post-types'] ) ) {
				$registered_post_templates = $registered_post_templates['public-post-types'];
			} else {
				$registered_post_templates = array();
			}


		// Output

			return array_filter( array_merge( $post_templates, $registered_post_templates ) );

	} // /post_templates

	/**
	 * Show page title?
	 *
	 * @since  1.0.0
	 *
	 * @param  bool $show
	 *
	 * @return  bool
	 */
	public static function show_primary_title( bool $show ): bool {

		// Processing

			if (
				self::is_no_intro()
				|| self::is_content_only()
				|| self::is_header_overlaid()
			) {
				return false;
			}


		// Output

			return $show;

	} // /show_primary_title

	// [content-only.php] Content only.

		/**
		 * Is page template: Content only?
		 *
		 * @since  1.0.0
		 *
		 * @return  bool
		 */
		public static function is_content_only(): bool {

			// Output

				return is_page_template( 'templates/content-only.php' );

		} // /is_content_only

	// [header-overlaid-{{dark/light}}.php] Overlay Header (Dark/Light).

		/**
		 * Is page template: Overlay Header (Dark/Light)?
		 *
		 * @since  1.0.0
		 *
		 * @return  bool
		 */
		public static function is_header_overlaid(): bool {

			// Output

				return is_page_template( 'templates/header-overlaid-dark.php' ) || is_page_template( 'templates/header-overlaid-light.php' );

		} // /is_header_overlaid

	// [no-intro.php] No intro.

		/**
		 * Is page template: No intro?
		 *
		 * @since  1.0.0
		 *
		 * @return  bool
		 */
		public static function is_no_intro(): bool {

			// Output

				return is_page_template( 'templates/no-intro.php' );

		} // /is_no_intro

}
