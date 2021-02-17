<?php
/**
 * Block styles registration component.
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

class Block_Styles implements Component_Interface {

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Requirements check

			if ( ! function_exists( 'register_block_style' ) ) {
				return;
			}


		// Processing

			// Actions

				add_action( 'after_setup_theme', __CLASS__ . '::register' );

	} // /init

	/**
	 * Register block styles.
	 *
	 * @link  https://developer.wordpress.org/reference/functions/register_block_style/
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function register() {

		// Variables

			$styles = array(

				'drop-shadow' => array(
					'label'  => _x( 'Drop shadow', 'Block style label.', 'michelle' ),
					'blocks' => array(
						'core/column',
						'core/columns',
						'core/cover',
						'core/group',
						'core/image',
						'core/media-text',
						'core/video',
					),
				),

				'hide-caption' => array(
					'label'  => _x( 'Hide caption', 'Block style label.', 'michelle' ),
					'blocks' => array(
						'core/gallery',
					),
				),

				'inner-shadow' => array(
					'label'  => _x( 'Inner shadow', 'Block style label.', 'michelle' ),
					'blocks' => array(
						'core/column',
						'core/cover',
						'core/group',
					),
				),

				'media-on-top' => array(
					'label'  => _x( 'Media on top', 'Block style label.', 'michelle' ),
					'blocks' => array(
						'core/media-text',
					),
				),

				'outline-items' => array(
					'label'  => _x( 'Outline items', 'Block style label.', 'michelle' ),
					'blocks' => array(
						'core/list',
					),
				),

				'uppercase' => array(
					'label'  => _x( 'Uppercase', 'Block style label.', 'michelle' ),
					'blocks' => array(
						'core/heading',
						'core/paragraph',
					),
				),

			);

			/**
			 * Filters block styles setup array.
			 *
			 * @since  1.0.0
			 *
			 * @param  array $styles
			 */
			$styles = (array) apply_filters( 'michelle/content/block_styles/register', $styles );


		// Processing

			// Register patterns.
			foreach ( $styles as $class => $args ) {

				if (
					empty( $args['blocks'] )
					|| empty( $args['label'] )
				) {
					continue;
				}

				foreach ( (array) $args['blocks'] as $block ) {
					register_block_style(
						$block,
						array(
							'name'  => sanitize_html_class( $class ),
							'label' => $args['label'],
						)
					);
				}
			}

	} // /register

}
