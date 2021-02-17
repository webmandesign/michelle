<?php
/**
 * Block patterns registration component.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Content;

use WebManDesign\Michelle\Component_Interface;
use WebManDesign\Michelle\Customize;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Block_Patterns implements Component_Interface {

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Requirements check

			if ( ! function_exists( 'register_block_pattern' ) ) {
				return;
			}


		// Processing

			// Actions

				add_action( 'after_setup_theme', __CLASS__ . '::register' );

	} // /init

	/**
	 * Register block patterns.
	 *
	 * When registering a new block pattern category, a prefix is needed.
	 * @link  https://make.wordpress.org/themes/handbook/review/required/#code
	 *
	 * Default pattern categories in WordPress:
	 * - buttons
	 * - columns
	 * - gallery
	 * - header
	 * - text
	 * @link  https://developer.wordpress.org/reference/functions/register_block_pattern_category/
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function register() {

		// Variables

			$content_width = Customize\Mod::get( 'layout_width_content' );

			$path_images = ( is_child_theme() ) ? ( get_stylesheet_directory_uri() ) : ( get_template_directory_uri() );
			$path_images = trailingslashit( $path_images ) . 'assets/images/starter';

			$patterns = array(

				'features-bg-image' => array(
					'title'         => _x( 'Features with background, image, text and button', 'Block pattern title.', 'michelle' ),
					'categories'    => array( 'columns' ),
				),

				'features-bg-icon' => array(
					'title'      => _x( 'Center aligned features with background, icon, text and button', 'Block pattern title.', 'michelle' ),
					'categories' => array( 'columns' ),
				),

				'footer' => array(
					'title'      => _x( 'Site footer', 'Block pattern title.', 'michelle' ),
					'categories' => array( 'columns' ),
				),

				'image-parallax' => array(
					'title'      => _x( 'Parallax image background', 'Block pattern title.', 'michelle' ),
					'categories' => array( 'gallery' ),
				),

				'intro-with-description' => array(
					'title'      => _x( 'Page title with description text', 'Block pattern title.', 'michelle' ),
					'categories' => array( 'header' ),
				),

				'intro-fullscreen' => array(
					'title'      => _x( 'Fullscreen page title', 'Block pattern title.', 'michelle' ),
					'categories' => array( 'header' ),
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
			$patterns = (array) apply_filters( 'michelle/content/block_patterns/register', $patterns );


		// Processing

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

	} // /register

}
