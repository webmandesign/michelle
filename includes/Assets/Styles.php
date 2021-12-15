<?php
/**
 * Theme styles component.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.3.0
 */

namespace WebManDesign\Michelle\Assets;

use WebManDesign\Michelle\Component_Interface;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Styles implements Component_Interface {

	/**
	 * Associative array of CSS files, as `$handle => $data` pairs.
	 * Do not access this property directly, instead use the `get_css_files()` method.
	 *
	 * @since   1.0.0
	 * @access  private
	 * @var     array
	 */
	private static $css_files;

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

				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue', MICHELLE_ENQUEUE_PRIORITY );

				add_action( 'wp_enqueue_scripts', __CLASS__ . '::register_inline', 0 );
				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue_inline', MICHELLE_ENQUEUE_PRIORITY + 9 );

				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue_child_theme', MICHELLE_ENQUEUE_PRIORITY + 9 );

				add_action( 'wp_head', __CLASS__ . '::preload' );

				add_action( 'tha_content_top',     __CLASS__ . '::print', 0 );
				add_action( 'tha_comments_before', __CLASS__ . '::print', 0 );

	} // /init

	/**
	 * Gets all CSS files.
	 *
	 * @since  1.0.0
	 *
	 * @return  array  Associative array of `$handle => $data` pairs.
	 */
	public static function get_css_files(): array {

		// Requirements check

			if ( is_array( self::$css_files ) ) {
				return self::$css_files;
			}


		// Processing

			$css_files = array(

				'michelle-global' => array(
					'src'      => get_theme_file_uri( 'assets/css/global.css' ),
					'global'   => true,
					'add_data' => array(
						'rtl'      => 'replace',
						'precache' => true,
					),
				),

				'michelle-content' => array(
					'src'      => get_theme_file_uri( 'assets/css/content.css' ),
					'add_data' => array(
						'rtl'      => 'replace',
						'precache' => true,
					),
					'preload_callback' => '__return_true',
				),

				'michelle-blocks' => array(
					'src'      => get_theme_file_uri( 'assets/css/blocks.css' ),
					'add_data' => array(
						'rtl'      => 'replace',
						'precache' => true,
					),
					'preload_callback' => '__return_true',
				),

				'michelle-comments' => array(
					'src'      => get_theme_file_uri( 'assets/css/comments.css' ),
					'add_data' => array(
						'rtl'      => 'replace',
						'precache' => true,
					),
					'preload_callback' => function() {
						return
							! post_password_required()
							&& is_singular()
							&& comments_open();
					},
				),

			);

			/**
			 * Filters default theme CSS files.
			 *
			 * @since  1.0.0
			 *
			 * @param  array $css_files  Associative array of CSS files.
			 */
			$css_files = (array) apply_filters( 'michelle/assets/styles/get_css_files', $css_files );

			self::$css_files = array();
			foreach ( $css_files as $handle => $data ) {
				if ( is_string( $data ) ) {
					$data = array( 'src' => $data );
				}

				if ( empty( $data['src'] ) ) {
					continue;
				}

				self::$css_files[ $handle ] = wp_parse_args(
					$data,
					array(
						'handle'           => $handle,
						'global'           => false,
						'preload_callback' => null,
					)
				);
			}


		// Output

			return (array) self::$css_files;

	} // /get_css_files

	/**
	 * Registers or enqueues stylesheets.
	 *
	 * Stylesheets that are global are enqueued.
	 * All other stylesheets are only registered, to be enqueued later.
	 *
	 * @since    1.0.0
	 * @version  1.3.0
	 *
	 * @return  void
	 */
	public static function enqueue() {

		// Variables

			$css_files = self::get_css_files();


		// Processing

			foreach ( $css_files as $handle => $data ) {

				/**
				 * Enqueue global stylesheets immediately and register the other ones
				 * for later use (unless preloading stylesheets is disabled, in which
				 * case stylesheets should be immediately enqueued based on whether
				 * they are necessary for the page content).
				 */
				if (
					$data['global']
					|| Factory::is_preloading_styles_disabled()
					&& is_callable( $data['preload_callback'] )
					&& call_user_func( $data['preload_callback'] )
				) {
					Factory::style_enqueue( $data );
				} else {
					Factory::style_register( $data );
				}
			}

	} // /enqueue

	/**
	 * Print styles in page content.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function print() {

		// Processing

			// Content styles.
			if ( doing_action( 'tha_content_top' ) ) {
				Factory::print_styles( 'michelle-content', 'michelle-blocks' );
			}

			// Comments styles.
			if ( doing_action( 'tha_comments_before' ) ) {
				Factory::print_styles( 'michelle-comments' );
			}

	} // /print

	/**
	 * Enqueue child theme `style.css` file late, after parent theme stylesheets.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function enqueue_child_theme() {

		// Processing

			if ( is_child_theme() ) {
				wp_enqueue_style(
					'michelle-stylesheet',
					get_stylesheet_uri(),
					array(),
					wp_get_theme( get_stylesheet() )->get( 'Version' )
				);
			}

	} // /enqueue_child_theme

	/**
	 * Placeholder for adding inline styles: register.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function register_inline() {

		// Processing

			wp_register_style( 'michelle', '' );

	} // /register_inline

	/**
	 * Placeholder for adding inline styles: enqueue.
	 *
	 * This should be loaded after all of the theme stylesheets,
	 * and before the child theme stylesheet are enqueued.
	 * Use the `michelle` handle in `wp_add_inline_style`.
	 *
	 * Early registration is required!
	 * @see  self::register_inline()
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function enqueue_inline() {

		// Processing

			wp_enqueue_style( 'michelle' );

	} // /enqueue_inline

	/**
	 * Preloads in-body stylesheets depending on what templates are being used.
	 *
	 * Only stylesheets that have a 'preload_callback' provided will be considered.
	 * If that callback evaluates to true for the current request, the stylesheet
	 * will be preloaded.
	 *
	 * Preloading is disabled when AMP is active, as AMP injects the stylesheets inline.
	 *
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Preloading_content
	 *
	 * @since    1.0.0
	 * @version  1.3.0
	 *
	 * @return  void
	 */
	public static function preload() {

		// Requirements check

			// If preloading styles is disabled, return early.
			if ( Factory::is_preloading_styles_disabled() ) {
				return;
			}


		// Variables

			$wp_styles = wp_styles();
			$css_files = self::get_css_files();


		// Processing

			foreach ( $css_files as $handle => $data ) {

				// Skip if stylesheet not registered.
				if ( ! isset( $wp_styles->registered[ $handle ] ) ) {
					continue;
				}

				// Skip if no preload callback provided.
				if ( ! is_callable( $data['preload_callback'] ) ) {
					continue;
				}

				// Skip if preloading is not necessary for this request.
				if ( ! call_user_func( $data['preload_callback'] ) ) {
					continue;
				}

				$preload_uri = $wp_styles->registered[ $handle ]->src . '?ver=' . $wp_styles->registered[ $handle ]->ver;

				echo '<link rel="preload" id="' . esc_attr( $handle ) . '-preload" href="' . esc_url( $preload_uri ) . '" as="style">' . PHP_EOL;
			}

	} // /preload

}
