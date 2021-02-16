<?php
/**
 * Header component.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Header;

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

			// HTML body class.
			Body_Class::init();
			// HTML head.
			Head::init();
			// Containers.
			Container::init();

			// Actions

				add_action( 'wp', __CLASS__ . '::disable', 30 );

				add_action( 'tha_html_before', __CLASS__ . '::doctype' );

				add_action( 'tha_header_top', __CLASS__ . '::site_branding' );
				add_action( 'tha_header_top', __CLASS__ . '::search_form', 30 );

				add_action( 'michelle/search_form', 'get_search_form' );

			// Filters

				add_filter( 'pre/michelle/accessibility/link_skip_to', __CLASS__ . '::skip_links_no_header', 10, 2 );

				add_filter( 'get_search_form', __CLASS__ . '::get_search_form' );

	} // /init

	/**
	 * Disable theme header.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function disable() {

		// Requirements check

			if ( self::is_enabled() ) {
				return;
			}


		// Processing

			remove_all_actions( 'tha_header_before' );
			remove_all_actions( 'tha_header_top' );
			remove_all_actions( 'tha_header_bottom' );
			remove_all_actions( 'tha_header_after' );

	} // /disable

	/**
	 * Is header disabled?
	 *
	 * @since  1.0.0
	 *
	 * @return  bool
	 */
	public static function is_disabled(): bool {

		// Output

			/**
			 * Filters the header disabling.
			 *
			 * @since  1.0.0
			 *
			 * @param  bool $disabled  If true, header is not displayed. Default: false.
			 */
			return (bool) apply_filters( 'michelle/header/is_disabled', false );

	} // /is_disabled

	/**
	 * Is header enabled?
	 *
	 * @since  1.0.0
	 *
	 * @return  bool
	 */
	public static function is_enabled(): bool {

		// Output

			/**
			 * Filters the header enabling.
			 *
			 * Filtering the negated output of `Header::is_disabled()` here
			 * so we can decide to use either "disabled" or "enabled" filter depending
			 * on circumstances.
			 *
			 * @since  1.0.0
			 *
			 * @param  bool $enabled  If true, header is displayed. Default: ! Header::is_disabled().
			 */
			return (bool) apply_filters( 'michelle/header/is_enabled', ! self::is_disabled() );

	} // /is_enabled

	/**
	 * Skip links: Remove header related links.
	 *
	 * When we display no header, remove all related skip links.
	 *
	 * @since  1.0.0
	 *
	 * @param  mixed  $pre  Pre output.
	 * @param  string $id   Link target element ID.
	 *
	 * @return  mixed  Original pre value or empty string.
	 */
	public static function skip_links_no_header( $pre, string $id ) {

		// Processing

			if (
				/**
				 * Disable header related skip links?
				 *
				 * @since  1.0.0
				 *
				 * @param  bool $disable  Default: Header::is_disabled().
				 */
				(bool) apply_filters( 'michelle/skip_links_no_header', self::is_disabled() )
				&& in_array( $id, array( 'site-navigation' ) )
			) {
				$pre = '';
			}


		// Output

			return $pre;

	} // /skip_links_no_header

	/**
	 * HTML doctype.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function doctype() {

		// Output

			echo '<!DOCTYPE html>';

	} // /doctype

	/**
	 * Logo, site branding.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function site_branding() {

		// Output

			get_template_part( 'templates/parts/header/site', 'branding' );

	} // /site_branding

	/**
	 * Search form.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function search_form() {

		// Output

			/**
			 * Action to display search form.
			 *
			 * @since  1.0.0
			 *
			 * @param  array $args
			 */
			do_action( 'michelle/search_form', array( 'echo' => true ) );

	} // /search_form

		/**
		 * Search form wrapper: open.
		 *
		 * @since  1.0.0
		 *
		 * @return  void
		 */
		public static function search_form_container_open() {

			// Output

				echo '<div class="search-form-container">';

		} // /search_form_container_open

		/**
		 * Search form wrapper: close.
		 *
		 * @since  1.0.0
		 *
		 * @return  void
		 */
		public static function search_form_container_close() {

			// Output

				echo '</div>';

		} // /search_form_container_close

	/**
	 * Search form modification, only in header.
	 *
	 * @since  1.0.0
	 *
	 * @param  string $html
	 *
	 * @return  void
	 */
	public static function get_search_form( string $html ): string {

		// Variables

			$icon_search = '<svg class="svg-icon" width="1.5em" aria-hidden="true" role="img" focusable="false" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16 16"><path d="M14.7,13.3L11,9.6c0.6-0.9,1-2,1-3.1C12,3.5,9.5,1,6.5,1S1,3.5,1,6.5S3.5,12,6.5,12c1.2,0,2.2-0.4,3.1-1l3.7,3.7L14.7,13.3z
	 M2.5,6.5c0-2.2,1.8-4,4-4s4,1.8,4,4s-1.8,4-4,4S2.5,8.7,2.5,6.5z" /></svg>';


		// Processing

			$html = explode( PHP_EOL, $html );

			// Process only multiline HTML.
			if ( 1 < count( $html ) ) {
				$html[0] = str_replace(
					'search-form',
					'search-form has-submit-with-icon ',
					$html[0]
				);

				foreach ( $html as $key => $code ) {
					if ( stripos( $code, '"submit"' ) ) {
						$html[ $key ] = '<button type="submit" class="search-submit search-submit-with-icon">' . $icon_search . '<span class="screen-reader-text"> ' . esc_html_x( 'Search', 'Form submit button text.', 'michelle' ) . '</span></button>';
						break;
					}
				}
			}

			ksort( $html );


		// Output

			return implode( PHP_EOL, $html );

	} // /get_search_form

}
