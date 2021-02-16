<?php
/**
 * Page builder component.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Tool;

use WebManDesign\Michelle\Component_Interface;
use WebManDesign\Michelle\Customize\Mod;
use WebManDesign\Michelle\Entry;
use WebManDesign\Michelle\Header\Body_Class;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Page_Builder implements Component_Interface {

	/**
	 * Check if any commonly used page builder is active.
	 *
	 * @since   1.0.0
	 * @access  private
	 * @var     boolean
	 */
	private static $is_page_builder_plugin_active = false;

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Variables

			self::$is_page_builder_plugin_active = (

				/**
				 * Beaver Builder
				 * @link  https://wordpress.org/plugins/beaver-builder-lite-version/
				 */
				class_exists( 'FLBuilder' )

				/**
				 * Elementor
				 * @link  https://wordpress.org/plugins/elementor/
				 */
				|| class_exists( 'Elementor\Plugin' )

				/**
				 * Page Builder by SiteOrigin
				 * @link  https://wordpress.org/plugins/siteorigin-panels/
				 */
				|| class_exists( 'SiteOrigin_Panels' )

				/**
				 * Divi Builder
				 * @link  https://www.elegantthemes.com/documentation/developers/divi-module/advanced-field-types-for-module-settings/
				 */
				|| class_exists( 'ET_Builder_Module' )

				/**
				 * WPBakery Page Builder
				 * @link  https://wpbakery.com/
				 */
				|| class_exists( 'Vc_Manager' )

				/**
				 * Visual Composer Website Builder
				 * @link  https://wordpress.org/plugins/visualcomposer/
				 */
				|| class_exists( 'VcvEnv' )

			);


		// Processing

			// Filters

				add_filter( 'michelle/customize/options/get', __CLASS__ . '::options' );

				add_filter( 'body_class', __CLASS__ . '::body_class', 99 );

				add_filter( 'pre/michelle/entry/media/display', __CLASS__ . '::is_page_ready_maybe_return_empty_string', 100 );

				add_filter( 'michelle/content/show_primary_title', __CLASS__ . '::show_primary_title', 20 );

				add_filter( 'theme_templates', __CLASS__ . '::remove_page_template' );

	} // /init

	/**
	 * Theme options.
	 *
	 * @since  1.0.0
	 *
	 * @param  array $options
	 *
	 * @return  array
	 */
	public static function options( array $options ): array {

		// Processing

			$options[ 700 . 'page_builders' ] = array(
				'id'             => 'page_builders',
				'type'           => 'section',
				'create_section' => esc_html_x( 'Page builders', 'Customizer section title.', 'michelle' ),
				'in_panel'       => esc_html_x( 'Theme Options', 'Customizer panel title.', 'michelle' ),
			);

			$options[ 700 . 'page_builders' . 100 ] = array(
				'type'    => 'checkbox',
				'id'      => 'page_builder_template',
				'label'   => esc_html__( 'Use "Page builder" template', 'michelle' ),
				'default' => self::$is_page_builder_plugin_active,
			);

			$options[ 700 . 'page_builders' . 110 ] = array(
				'type'        => 'radio',
				'id'          => 'page_builder_content_layout',
				'label'       => esc_html__( 'Page builder layout', 'michelle' ),
				'description' => esc_html__( 'Content area layout when using "Page builder" template.', 'michelle' ) . ' ' . esc_html__( 'As every page builder plugin works differently, set this according to your needs.', 'michelle' ),
				'default'     => 'full-width',
				'choices'     => array(
					'full-width' => esc_html__( 'Full width content area, no padding', 'michelle' ),
					'no-padding' => esc_html__( 'Keep content area width, just remove padding', 'michelle' ),
				),
			);


		// Output

			return $options;

	} // /options

	/**
	 * HTML body classes.
	 *
	 * @since  1.0.0
	 *
	 * @param  array $classes
	 *
	 * @return  array
	 */
	public static function body_class( array $classes ): array {

		// Processing

			// Any page builder layout.
			if ( is_singular() ) {
				$content_layout = ( stripos( implode( ' ', $classes ), '-page-builder' ) ) ? ( Mod::get( 'page_builder_content_layout' ) ) : ( '' );

				if ( 'full-width' === $content_layout ) {
					$classes[] = 'has-content-layout-no-padding';
					$classes[] = 'has-content-layout-full-width';
				} elseif ( 'no-padding' === $content_layout ) {
					$classes[] = 'has-content-layout-no-padding';
				}
			}


		// Output

			return array_unique( $classes );

	} // /body_class

	/**
	 * Is page template: Page builder?
	 *
	 * Not using `is_page_template()` but rather checking for a page template
	 * filename portion in body classes to make the functionality much more
	 * flexible (also for custom page templates, for example).
	 *
	 * @since  1.0.0
	 *
	 * @return  bool
	 */
	public static function is_page_template(): bool {

		// Output

			return stripos( implode( ' ', Body_Class::get_body_class() ), '-page-builder' );

	} // /is_page_template

	/**
	 * Remove "Page builder" page/post template [builder.php].
	 *
	 * @since  1.0.0
	 *
	 * @param  array $post_templates  Array of page templates. Keys are filenames, values are translated names.
	 *
	 * @return  array
	 */
	public static function remove_page_template( array $post_templates ): array {

		// Processing

			if ( ! Mod::get( 'page_builder_template' ) ) {
				foreach ( $post_templates as $file => $name ) {
					if ( 0 === stripos( $file, 'templates/page-builder' ) ) {
						unset( $post_templates[ $file ] );
					}
				}
			}


		// Output

			return $post_templates;

	} // /remove_page_template

	/**
	 * Show primary page title (H1) if we use a page builder?
	 *
	 * This is to target any page builder plugin, including Beaver Builder.
	 *
	 * @since  1.0.0
	 *
	 * @param  bool $show
	 *
	 * @return  bool
	 */
	public static function show_primary_title( bool $show ): bool {

		// Processing

			if ( self::is_page_template() ) {
				$show = false;
			}


		// Output

			return $show;

	} // /show_primary_title

	/**
	 * Using a page builder?
	 *
	 * @since  1.0.0
	 *
	 * @return  bool
	 */
	public static function is_page_ready(): bool {

		// Pre

			/**
			 * Bypass filter for Page_Builder::is_page_ready().
			 *
			 * Returning a non-null value will short-circuit the method,
			 * returning the passed value instead.
			 *
			 * @since  1.0.0
			 *
			 * @param  mixed $pre  Default: null. If not null, method returns the value.
			 */
			$pre = apply_filters( 'pre/michelle/tool/page_builder/is_page_ready', null );

			if ( null !== $pre ) {
				return $pre;
			}


		// Requirements check

			if ( ! self::is_page_template() ) {
				return false;
			}


		// Output

			return in_array(
				(string) Mod::get( 'page_builder_content_layout' ),
				array( 'full-width', 'no-padding' )
			);

	} // /is_page_ready

	/**
	 * Using a page builder? Return empty string if we do.
	 *
	 * Useful for `pre` filter hooks.
	 *
	 * @since  1.0.0
	 *
	 * @param  mixed $pre
	 *
	 * @return  mixed  Original pre value or empty string.
	 */
	public static function is_page_ready_maybe_return_empty_string( $pre ) {

		// Processing

			if (
				Entry\Component::is_singular()
				&& self::is_page_ready()
			) {
				return '';
			}


		// Output

			return $pre;

	} // /is_page_ready_maybe_return_empty_string

}
