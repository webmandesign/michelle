<?php
/**
 * Block patterns registration component.
 *
 * Default pattern categories in WordPress:
 * - buttons
 * - columns
 * - gallery
 * - header
 * - text
 * @link  https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Content;

use WebManDesign\Michelle\Component_Interface;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Block_Patterns implements Component_Interface {

	/**
	 * Lists pattern setup arrays.
	 *
	 * @var array
	 */
	private static $pattern_args = array();

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
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function register() {

		// Variables

			global $content_width;

			$patterns = self::get_pattern_ids();


		// Processing

			foreach ( $patterns as $id ) {

				ob_start();
				get_template_part( 'templates/parts/blocks/pattern', $id );
				$content = ob_get_clean();

				// Why bother if we have no patter setup args?
				if ( empty( self::$pattern_args[ $id ] ) ) {
					continue;
				}

				$args = wp_parse_args(
					self::$pattern_args[ $id ],
					array(
						'title'         => '',
						'content'       => trim( $content ),
						'categories'    => array( 'text' ),
						'viewportWidth' => absint( $content_width * 1.1 ),
					)
				);

				// Why bother if we have no content or title?
				if (
					empty( $args['content'] )
					|| empty( $args['title'] )
				) {
					continue;
				}

				$args['title'] = esc_html( $args['title'] );

				register_block_pattern(
					'michelle/' . $id,
					$args
				);
			}

	} // /register

	/**
	 * Gets array of block pattern IDs/slugs to load.
	 *
	 * The theme will look for a `templates/parts/blocks/pattern-{{$id}}.php` file
	 * based on the array values (the `$id` in the filename).
	 *
	 * @since  1.0.0
	 *
	 * @return  array
	 */
	public static function get_pattern_ids(): array {

		// Variables

			$pattern_ids = array(
				'blog',
				'centered-background',
				'contact-image',
				'contact-quote',
				'contact-shadow',
				'contact-social',
				'cta-bg',
				'cta-centered',
				'cta-large',
				'cta-quote',
				'cta',
				'features-bg-icon',
				'features-bg-image',
				'features-fullwidth-bg',
				'features-large-image',
				'features-parallax',
				'features-simple',
				'features-single-large',
				'footer-form',
				'footer',
				'gallery-no-gap',
				'heading-hidden-accessibly',
				'image-padding-left',
				'image-padding-right',
				'image-parallax',
				'intro-bg-image',
				'intro-bg-links',
				'intro-bg-text-left',
				'intro-color-image-large',
				'intro-color-image',
				'intro-fullscreen-bottom-text',
				'intro-images',
				'intro-overlap',
				'intro-with-description',
				'logos',
				'question-answer',
				'team',
				'testimonials-single',
				'testimonials',
				'text-heading-columns',
			);


		// Output

			/**
			 * Filters array of block pattern IDs.
			 *
			 * @since  1.0.0
			 *
			 * @param  array $pattern_ids
			 */
			return (array) apply_filters( 'michelle/content/block_patterns/get_pattern_ids', $pattern_ids );

	} // /get_pattern_ids

	/**
	 * Adds a block pattern setup array to list.
	 *
	 * @since  1.0.0
	 *
	 * @param  string $file  Pattern setup file name/path.
	 * @param  array  $args  Pattern setup arguments.
	 *
	 * @return  void
	 */
	public static function add_pattern_args( string $file, array $args ) {

		// Variables

			$id = str_replace( 'pattern-', '', basename( $file, '.php' ) );


		// Processing

			self::$pattern_args[ $id ] = (array) $args;

	} // /add_pattern_args

}
