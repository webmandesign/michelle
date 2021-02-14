<?php
/**
 * Theme colors component.
 *
 * Theme colors data are being cached in transient as they are global for the website.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Customize;

use WebManDesign\Michelle\Component_Interface;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Colors implements Component_Interface {

	/**
	 * Name of cached data transient.
	 *
	 * @since   1.0.0
	 * @access  public
	 * @var     string
	 */
	public static $transient_cache_colors = 'michelle_cache_theme_colors';

	/**
	 * Editor palette colors.
	 *
	 * @since   1.0.0
	 * @access  public
	 * @var     array
	 */
	public static $editor_palette = array(
		'#0a0a00',
		'#2a2a20',
		'#d3a978',
		'#f5f0ea', // Default shaded color from content text color.
		'#ffffff',
	);

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

				add_action( 'customize_save_after', __CLASS__ . '::transient_cache_flush', 100 );

			// Filters

				add_filter( 'michelle/customize/options/get', __CLASS__ . '::options', 15 );

	} // /init

	/**
	 * Get all theme colors in array and cache them in transient.
	 *
	 * Each option with `palette` attribute is added to editor colors.
	 *
	 * @since  1.0.0
	 *
	 * @return  array
	 */
	public static function get(): array {

		// Requirements check

			// Get the data cached in transient first.
			$colors = array_filter( (array) get_transient( self::$transient_cache_colors ) );

			if ( ! empty( $colors ) ) {
				return $colors;
			}


		// Variables

			$mods          = (array) get_theme_mods();
			$theme_options = Options::get();


		// Processing

			foreach ( $theme_options as $option ) {
				if (
					isset( $option['palette'] )
					&& isset( $option['default'] )
				) {
					$color = ( isset( $mods[ $option['id'] ] ) ) ? ( $mods[ $option['id'] ] ) : ( $option['default'] );
					$colors[ $option['id'] ] = array(
						'id'    => $option['id'],
						'color' => sanitize_hex_color_no_hash( $color ),
						'name'  => ( isset( $option['palette']['name'] ) ) ? ( $option['palette']['name'] ) : ( $option['label'] ),
						'slug'  => ( isset( $option['palette']['slug'] ) ) ? ( $option['palette']['slug'] ) : ( $option['id'] ),
					);
				}
			}

			// Cache the data in transient.
			set_transient( self::$transient_cache_colors, array_filter( $colors ) );


		// Output

			return $colors;

	} // /get

	/**
	 * Flush theme colors array transient cache.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function transient_cache_flush() {

		// Processing

			delete_transient( self::$transient_cache_colors );

	} // /transient_cache_flush

	/**
	 * Add editor colors palette to theme options.
	 *
	 * @since  1.0.0
	 *
	 * @param  array $options
	 *
	 * @return  array
	 */
	public static function options( array $options ): array {

		// Variables

			/**
			 * Filters predefined theme editor palette colors.
			 *
			 * @since  1.0.0
			 *
			 * @param  array $editor_palette  Array of hex color codes.
			 */
			$editor_palette = array_values( (array) apply_filters( 'michelle/customize/colors/editor_palette', self::$editor_palette ) );


		// Processing

			$options[ 100 . 'colors' . 100 ]['palette'] = array(
				'name' => esc_html__( 'Accent color', 'michelle' ),
				'slug' => 'accent',
			);

			$options[ 190 . 'colors' ] = array(
				'id'             => 'colors_editor',
				'type'           => 'section',
				'create_section' => sprintf(
					/* translators: Customizer section title. %s = section name. */
					esc_html__( 'Colors: %s', 'michelle' ),
					esc_html_x( 'Editor palette', 'Customizer color section title', 'michelle' )
				),
				'in_panel'       => esc_html_x( 'Theme Options', 'Customizer panel title.', 'michelle' ),
			);

			$options[ 190 . 'colors' . 100 ] = array(
				'type'    => 'html',
				'content' => '<p>' . esc_html__( 'Accent color is also being conveniently added into editor color palette for you, so you don\'t need to duplicate it here.', 'michelle' ) . '</p>',
			);

			foreach ( $editor_palette as $key => $color ) {
				$key = absint( $key + 1 );
				$options[ 190 . 'colors' . ( 100 + $key * 10 ) ] = array(
					'type'       => 'color',
					'id'         => 'color_palette_' . $key,
					'label'      => sprintf(
						/* translators: Editor palette color label. %d: color number. */
						esc_html__( 'Palette color %d', 'michelle' ),
						$key
					),
					'default'    => maybe_hash_hex_color( $color ),
					'css_var'    => 'maybe_hash_hex_color',
					'preview_js' => array(
						'css' => array(
							':root' => array(
								'--[[id]]',
							),
						),
					),
					'palette' => array(
						'slug' => 'palette-' . $key,
					),
				);
			}


		// Output

			return $options;

	} // /options

}
