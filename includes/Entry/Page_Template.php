<?php
/**
 * Page template component.
 *
 * Not using `is_page_template()` but rather checking for a page template
 * filename portion in body classes to make the functionality much more
 * flexible (also for custom page templates, for example).
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Entry;

use WebManDesign\Michelle\Component_Interface;
use WebManDesign\Michelle\Header\Body_Class;
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

	// Page templates with content only.

		/**
		 * Is page template: Content only?
		 *
		 * @since  1.0.0
		 *
		 * @param  mixed $body_classes  Optional forced array of body classes when using the method within `body_class` hook.
		 *
		 * @return  bool
		 */
		public static function is_content_only( $body_classes = array() ): bool {

			// Variables

				$check_body_class = stripos( implode( ' ', Body_Class::get_body_class( $body_classes ) ), '-content-only' );


			// Output

				/**
				 * Filters whether we should display only page content.
				 *
				 * @since  1.0.0
				 *
				 * @param  bool $check_body_class  By default it checks for a specific body class name portion.
				 */
				return (bool) apply_filters( 'michelle/entry/page_template/is_content_only', (bool) $check_body_class );

		} // /is_content_only

}
