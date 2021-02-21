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
use WP_Customize_Cropped_Image_Control;
use WP_Customize_Manager;
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

			// Actions

				add_action( 'customize_register', __CLASS__ . '::customize_register', 100 );

				add_action( 'tha_header_before', __CLASS__ . '::set_custom_logo' );

			// Filters

				add_filter( 'theme_templates', __CLASS__ . '::post_templates', 5, 4 );

				add_filter( 'michelle/header/is_disabled', __CLASS__ . '::is_content_only' );
				add_filter( 'michelle/footer/is_disabled', __CLASS__ . '::is_content_only' );

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

	// Overlaid header templates.

		/**
		 * Add new custom logo options for overlaid header templates.
		 *
		 * @since  1.0.0
		 *
		 * @param  WP_Customize_Manager $wp_customize
		 *
		 * @return  void
		 */
		public static function customize_register( WP_Customize_Manager $wp_customize ) {

			// Variables

				$custom_logo_args = get_theme_support( 'custom-logo' );


			// Processing

				// Light logo.

					$wp_customize->add_setting(
						'custom_logo_light',
						array(
							'theme_supports'    => array( 'custom-logo' ),
							'transport'         => 'postMessage',
							'sanitize_callback' => 'absint',
						)
					);

					$wp_customize->add_control(
						new WP_Customize_Cropped_Image_Control(
							$wp_customize,
							'custom_logo_light',
							array(
								'active_callback' => function() {
									return stripos( implode( ' ', Body_Class::get_body_class() ), '-header-overlaid-light' );
								},
								'label'           => esc_html__( 'Logo variation: light', 'michelle' ),
								'description'     => esc_html__( 'This logo image will be displayed in overlaid header with light color.', 'michelle' ),
								'section'         => 'title_tagline',
								'priority'        => 8,
								'height'          => isset( $custom_logo_args[0]['height'] ) ? $custom_logo_args[0]['height'] : null,
								'width'           => isset( $custom_logo_args[0]['width'] ) ? $custom_logo_args[0]['width'] : null,
								'flex_height'     => isset( $custom_logo_args[0]['flex-height'] ) ? $custom_logo_args[0]['flex-height'] : null,
								'flex_width'      => isset( $custom_logo_args[0]['flex-width'] ) ? $custom_logo_args[0]['flex-width'] : null,
								'button_labels'   => array(
									'select'       => esc_html__( 'Select logo', 'michelle' ),
									'change'       => esc_html__( 'Change logo', 'michelle' ),
									'remove'       => esc_html__( 'Remove', 'michelle' ),
									'default'      => esc_html__( 'Default', 'michelle' ),
									'placeholder'  => esc_html__( 'No logo selected', 'michelle' ),
									'frame_title'  => esc_html__( 'Select logo', 'michelle' ),
									'frame_button' => esc_html__( 'Choose logo', 'michelle' ),
								),
							)
						)
					);

					$wp_customize->selective_refresh->add_partial(
						'custom_logo_light',
						array(
							'selector'            => 'body[class*="-header-overlaid-light"] .custom-logo-link',
							'render_callback'     => array( $wp_customize, '_render_custom_logo_partial' ),
							'container_inclusive' => true,
						)
					);

				// Dark logo.

					$wp_customize->add_setting(
						'custom_logo_dark',
						array(
							'theme_supports'    => array( 'custom-logo' ),
							'transport'         => 'postMessage',
							'sanitize_callback' => 'absint',
						)
					);

					$wp_customize->add_control(
						new WP_Customize_Cropped_Image_Control(
							$wp_customize,
							'custom_logo_dark',
							array(
								'active_callback' => function() {
									return stripos( implode( ' ', Body_Class::get_body_class() ), '-header-overlaid-dark' );
								},
								'label'           => esc_html__( 'Logo variation: dark', 'michelle' ),
								'description'     => esc_html__( 'This logo image will be displayed in overlaid header with dark color.', 'michelle' ),
								'section'         => 'title_tagline',
								'priority'        => 8,
								'height'          => isset( $custom_logo_args[0]['height'] ) ? $custom_logo_args[0]['height'] : null,
								'width'           => isset( $custom_logo_args[0]['width'] ) ? $custom_logo_args[0]['width'] : null,
								'flex_height'     => isset( $custom_logo_args[0]['flex-height'] ) ? $custom_logo_args[0]['flex-height'] : null,
								'flex_width'      => isset( $custom_logo_args[0]['flex-width'] ) ? $custom_logo_args[0]['flex-width'] : null,
								'button_labels'   => array(
									'select'       => esc_html__( 'Select logo', 'michelle' ),
									'change'       => esc_html__( 'Change logo', 'michelle' ),
									'remove'       => esc_html__( 'Remove', 'michelle' ),
									'default'      => esc_html__( 'Default', 'michelle' ),
									'placeholder'  => esc_html__( 'No logo selected', 'michelle' ),
									'frame_title'  => esc_html__( 'Select logo', 'michelle' ),
									'frame_button' => esc_html__( 'Choose logo', 'michelle' ),
								),
							)
						)
					);

					$wp_customize->selective_refresh->add_partial(
						'custom_logo_dark',
						array(
							'selector'            => 'body[class*="-header-overlaid-dark"] .custom-logo-link',
							'render_callback'     => array( $wp_customize, '_render_custom_logo_partial' ),
							'container_inclusive' => true,
						)
					);

		} // /customize_register

		/**
		 * Set custom logo variation in header only.
		 *
		 * @since  1.0.0
		 *
		 * @param  mixed $value
		 *
		 * @return  mixed
		 */
		public static function set_custom_logo() {

			// Requirements check

				if ( ! stripos( implode( ' ', Body_Class::get_body_class() ), '-header-overlaid-' ) ) {
					return;
				}


			// Processing

				if ( doing_action( 'tha_header_before' ) ) {
					add_filter( 'theme_mod_custom_logo', __CLASS__ . '::custom_logo' );
				} else {
					remove_filter( 'theme_mod_custom_logo', __CLASS__ . '::custom_logo' );
				}

		} // /set_custom_logo

		/**
		 * Display custom logo variation.
		 *
		 * @since  1.0.0
		 *
		 * @param  mixed $value
		 *
		 * @return  mixed
		 */
		public static function custom_logo( $value ) {

			// Variables

				$body_classes = implode( ' ', Body_Class::get_body_class() );


			// Processing

				if (
					stripos( $body_classes, '-header-overlaid-light' )
					&& $logo_light = get_theme_mod( 'custom_logo_light' )
				) {
					return $logo_light;
				} elseif (
					stripos( $body_classes, '-header-overlaid-dark' )
					&& $logo_dark = get_theme_mod( 'custom_logo_dark' )
				) {
					return $logo_dark;
				}


			// Output

				return $value;

		} // /custom_logo

}
