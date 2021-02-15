<?php
/**
 * Post editor setup class.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Setup;

use WebManDesign\Michelle\Component_Interface;
use WebManDesign\Michelle\Customize;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Editor implements Component_Interface {

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

				add_action( 'after_setup_theme', __CLASS__ . '::after_setup_theme' );

	} // /init

	/**
	 * After setup theme.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function after_setup_theme() {

		// Processing

			// Colors.
			add_theme_support( 'editor-color-palette', self::get_color_palette() );

			// Typography.
			add_theme_support( 'editor-font-sizes', self::get_font_sizes() );
			add_theme_support( 'custom-line-height' );

			// Alignment.
			add_theme_support( 'align-wide' );

			// Others.
			add_theme_support( 'custom-units' );

			// Patterns.
			self::block_patterns();

	} // /after_setup_theme

	/**
	 * Get color palette setup array.
	 *
	 * Theme mod color classes:
	 * - .has-{$palette-slug}-color
	 * - .has-{$palette-slug}-background-color
	 *
	 * These should be styled in the theme stylesheet already,
	 * so no need to output any inline CSS code on front-end.
	 *
	 * @since  1.0.0
	 *
	 * @return  array
	 */
	public static function get_color_palette(): array {

		// Variables

			$palette = array();
			$colors  = $colors_unique = (array) Customize\Colors::get();


		// Processing

			$colors_unique = array_column( $colors_unique, 'color', 'id' );
			$colors_unique = array_unique( $colors_unique );
			asort( $colors_unique );

			foreach ( $colors_unique as $id => $color ) {
				$palette[] = array(
					'name'  => $colors[ $id ]['name'],
					// (Though block editor automatically changes "_" to "-", we play safe here.)
					'slug'  => str_replace( '_', '-', $colors[ $id ]['slug'] ),
					'color' => maybe_hash_hex_color( $color ),
				);
			}


		// Output

			/**
			 * Filters editor color palette setup array.
			 *
			 * @link  https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#block-color-palettes
			 *
			 * @since  1.0.0
			 *
			 * @param  array $palette
			 */
			return (array) apply_filters( 'michelle/setup/editor/get_color_palette', $palette );

	} // /get_color_palette

	/**
	 * Get font sizes setup array.
	 *
	 * These are set in `em` units within the theme stylesheet,
	 * so no need to output any inline CSS code on front-end.
	 *
	 * @since  1.0.0
	 *
	 * @return  array
	 */
	public static function get_font_sizes(): array {

		// Variables

			$base_font_size = Customize\Mod::get( 'typography_size_html' );

			$sizes = array(

				array(
					'name'      => _x( 'Extra Small', 'Font size.', 'michelle' ),
					'shortName' => _x( 'XS', 'Font size.', 'michelle' ),
					'size'      => round( $base_font_size * .64 ),
					'slug'      => 'extra-small',
				),

				array(
					'name'      => _x( 'Small', 'Font size.', 'michelle' ),
					'shortName' => _x( 'S', 'Font size.', 'michelle' ),
					'size'      => round( $base_font_size * .8 ),
					'slug'      => 'small',
				),

				array(
					'name'      => _x( 'Normal', 'Font size.', 'michelle' ),
					'shortName' => _x( 'M', 'Font size.', 'michelle' ),
					'size'      => $base_font_size,
					'slug'      => 'normal', // Can not use empty value here as that would cause inline styles being applied.
				),

				array(
					'name'      => _x( 'Large', 'Font size.', 'michelle' ),
					'shortName' => _x( 'L', 'Font size.', 'michelle' ),
					'size'      => round( $base_font_size * 1.333 ),
					'slug'      => 'large',
				),

				array(
					'name'      => _x( 'Extra Large', 'Font size.', 'michelle' ),
					'shortName' => _x( 'XL', 'Font size.', 'michelle' ),
					'size'      => round( $base_font_size * 1.777 ),
					'slug'      => 'extra-large',
				),

				array(
					'name'      => _x( 'Huge', 'Font size.', 'michelle' ),
					'shortName' => _x( 'XXL', 'Font size.', 'michelle' ),
					'size'      => round( $base_font_size * 5.063 ),
					'slug'      => 'huge',
				),

			);


		// Output

			/**
			 * Filters editor font sizes setup array.
			 *
			 * @link  https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#block-font-sizes
			 *
			 * @since  1.0.0
			 *
			 * @param  array $sizes
			 */
			return (array) apply_filters( 'michelle/setup/editor/get_font_sizes', $sizes );

	} // /get_font_sizes

	/**
	 * Register block patterns.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function block_patterns() {

		// Requirements check

			if ( ! function_exists( 'register_block_pattern' ) ) {
				return;
			}


		// Variables

			$content_width = Customize\Mod::get( 'layout_width_content' );

			$path_images = ( is_child_theme() ) ? ( get_stylesheet_directory_uri() ) : ( get_template_directory_uri() );
			$path_images = trailingslashit( $path_images ) . 'assets/images/starter';

			$pattern_cats = array(
				'intro'  => _x( 'Intro', 'Block pattern category.', 'michelle' ),
				'media'  => _x( 'Media', 'Block pattern category.', 'michelle' ),
				'footer' => _x( 'Footer', 'Block pattern category.', 'michelle' ),
			);

			$patterns = array(

				'feature' => array(
					'title'         => _x( 'Feature with image, text and button', 'Block pattern title.', 'michelle' ),
					'categories'    => array( 'media' ),
					'viewportWidth' => 400,
				),

				'features' => array(
					'title'      => _x( 'Features with icons, text and button', 'Block pattern title.', 'michelle' ),
					'categories' => array( 'columns' ),
				),

				'footer' => array(
					'title'      => _x( 'Site footer', 'Block pattern title.', 'michelle' ),
					'categories' => array( 'footer' ),
				),

				'image-parallax' => array(
					'title'      => _x( 'Parallax image background', 'Block pattern title.', 'michelle' ),
					'categories' => array( 'media' ),
				),

				'intro-with-description' => array(
					'title'      => _x( 'Page title with description text', 'Block pattern title.', 'michelle' ),
					'categories' => array( 'intro' ),
				),

				'intro-fullscreen' => array(
					'title'      => _x( 'Fullscreen page title', 'Block pattern title.', 'michelle' ),
					'categories' => array( 'intro' ),
				),

				'heading-hidden-accessibly' => array(
					'title'         => _x( 'Accessibly hidden heading', 'Block pattern title.', 'michelle' ),
					'categories'    => array( 'header' ),
					'viewportWidth' => 400,
				),

			);

			/**
			 * Filters block patterns setup array.
			 *
			 * @link  https://developer.wordpress.org/block-editor/developers/block-api/block-patterns/
			 *
			 * @since  1.0.0
			 *
			 * @param  array $patterns
			 */
			$patterns = (array) apply_filters( 'michelle/setup/editor/block_patterns', $patterns );


		// Processing

			// Register pattern categories.
			foreach ( $pattern_cats as $id => $label ) {
				register_block_pattern_category(
					$id,
					array( 'label' => $label )
				);
			}

			// Register patterns.
			foreach ( $patterns as $id => $args ) {

				// Get pattern content from file if not defined.
				if ( ! isset( $args['content'] ) ) {
					ob_start();
					get_template_part( 'templates/parts/blocks/pattern', $id );
					$args['content'] = str_replace(
						'PATH_IMAGES',
						$path_images,
						trim( ob_get_clean() )
					);
				}

				// Why bother if we have no content?
				if ( empty( $args['content'] ) ) {
					continue;
				}

				if ( empty( $args['viewportWidth'] ) ) {
					$args['viewportWidth'] = absint( $content_width * 1.1 );
				}

				register_block_pattern(
					'michelle/' . $id,
					$args
				);
			}

	} // /block_patterns

}
