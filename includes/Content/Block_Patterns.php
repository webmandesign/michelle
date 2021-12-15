<?php
/**
 * Block patterns component.
 *
 * For reference:
 *   Default pattern categories in WordPress:
 *   - buttons
 *   - columns
 *   - gallery
 *   - header
 *   - text
 *   Additional WordPress.com pattern categories:
 *   - featured
 *   - about
 *   - blog
 *   - call-to-action
 *   - coming-soon
 *   - contact
 *   - images
 *   - link-in-bio
 *   - list
 *   - media
 *   - podcast
 *   - portfolio
 *   - quotes
 *   - subscribe
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.3.0
 */

namespace WebManDesign\Michelle\Content;

use WebManDesign\Michelle\Component_Interface;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Block_Patterns implements Component_Interface {

	/**
	 * Theme prefix for categories and patterns registration.
	 *
	 * @since   1.3.0
	 * @access  private
	 * @var     string
	 */
	private static $prefix = 'michelle/';

	/**
	 * Lists pattern setup arrays.
	 *
	 * @since   1.0.0
	 * @access  private
	 * @var     array
	 */
	private static $pattern_args = array();

	/**
	 * List of predefined pattern categories in WordPress.
	 *
	 * @since   1.3.0
	 * @access  private
	 * @var     array
	 */
	private static $default_cats = array( 'buttons', 'columns', 'gallery', 'header', 'text' );

	/**
	 * Fallback theme pattern category..
	 *
	 * @since   1.3.0
	 * @access  private
	 * @var     string
	 */
	private static $fallback_cat = 'michelle';

	/**
	 * Initialization.
	 *
	 * @since    1.0.0
	 * @version  1.3.0
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

				add_action( 'after_setup_theme', __CLASS__ . '::remove_core_patterns' );
				add_action( 'after_setup_theme', __CLASS__ . '::register_categories' );
				add_action( 'after_setup_theme', __CLASS__ . '::register' );

	} // /init

	/**
	 * Remove core block patterns.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function remove_core_patterns() {

		// Processing

			remove_theme_support( 'core-block-patterns' );

	} // /remove_core_patterns

	/**
	 * Register block patterns.
	 *
	 * @since    1.0.0
	 * @version  1.3.0
	 *
	 * @return  void
	 */
	public static function register() {

		// Variables

			global $content_width;

			$patterns_hierarchy = self::get_pattern_ids();


		// Processing

			foreach ( $patterns_hierarchy as $category => $patterns ) {
				foreach ( $patterns as $id ) {

					// Fallback category files are not in a subfolder.
					if ( self::$fallback_cat !== $category ) {
						$id = $category . '/' . $id;
					}

					ob_start();
					get_template_part( 'templates/parts/block/pattern/' . $id );
					$content = ob_get_clean();

					// Why bother if we have no pattern setup args?
					if ( empty( self::$pattern_args[ $id ] ) ) {
						continue;
					}

					$args = wp_parse_args(
						self::$pattern_args[ $id ],
						array(
							'title'         => '',
							'content'       => trim( $content ),
							'categories'    => null,
							'blockTypes'    => array(),
							'viewportWidth' => ( stripos( $content, 'alignfull' ) ) ? ( 1920 ) : ( absint( $content_width * 1.25 ) ),
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

					// Automatic categories.
					if ( empty( $args['categories'] ) ) {
						if ( $category ) {
							$args['categories'] = array( $category );
						} else {
							$args['categories'] = array( self::$fallback_cat ); // Fallback category.
						}
					}
					$args['categories'] = array_map( function( $category ) {
						if (
							self::$fallback_cat === $category
							|| in_array( $category, self::$default_cats )
						) {
							return $category;
						} else {
							return self::$prefix . $category;
						}
					}, $args['categories'] );

					register_block_pattern( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern
						self::$prefix . $id,
						/**
						 * Filters array of block pattern registration arguments.
						 *
						 * @since  1.3.0
						 *
						 * @param  array  $args  Block pattern registration arguments.
						 * @param  string $id    Block pattern registration ID.
						 */
						(array) apply_filters( 'michelle/content/block_patterns/register/args', $args, $id )
					);
				}
			}

	} // /register

	/**
	 * Register custom block pattern categories.
	 *
	 * @since  1.3.0
	 *
	 * @return  void
	 */
	public static function register_categories() {

		// Requirements check

			if ( ! function_exists( 'register_block_pattern_category' ) ) {
				return;
			}


		// Variables

			$categories = array(
				'cta'        => _x( 'Call to Action', 'Block pattern category label.', 'michelle' ),
				'contact'    => _x( 'Contact', 'Block pattern category label.', 'michelle' ),
				'cover'      => _x( 'Cover', 'Block pattern category label.', 'michelle' ),
				'list'       => _x( 'Lists', 'Block pattern category label.', 'michelle' ),
				'media-text' => _x( 'Media and Text', 'Block pattern category label.', 'michelle' ),
				'number'     => _x( 'Numbers', 'Block pattern category label.', 'michelle' ),
				'post'       => _x( 'Posts', 'Block pattern category label.', 'michelle' ),
				'price'      => _x( 'Prices', 'Block pattern category label.', 'michelle' ),
				'faq'        => _x( 'Question and Answer', 'Block pattern category label.', 'michelle' ),
				'quote'      => _x( 'Quotes', 'Block pattern category label.', 'michelle' ),
				'site'       => _x( 'Site', 'Website. Block pattern category label.', 'michelle' ),
				'team'       => _x( 'Team', 'Block pattern category label.', 'michelle' ),
			);


		// Processing

			// Add new categories with appropriate prefix.
			foreach ( $categories as $id => $label ) {
				register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
					self::$prefix . $id,
					array( 'label' => esc_html( $label ) )
				);
			}

			// Fallback category. Without prefix.
			register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
				self::$fallback_cat,
				array( 'label' => esc_html_x( 'Michelle theme', 'Block pattern category label.', 'michelle' ) )
			);

	} // /register_categories

	/**
	 * Gets array of block pattern IDs/slugs within categories to load.
	 *
	 * @since    1.0.0
	 * @version  1.3.0
	 *
	 * @return  array
	 */
	public static function get_pattern_ids(): array {

		// Variables

			$pattern_ids = array(

				'contact' => array(
				),

				'cover' => array(
				),

				'cta' => array(
				),

				'faq' => array(
				),

				'gallery' => array(
				),

				'header' => array(
				),

				'list' => array(
				),

				'media-text' => array(
				),

				'number' => array(
				),

				'post' => array(
				),

				'price' => array(
				),

				'quote' => array(
				),

				'site' => array(
				),

				'team' => array(
				),

				'text' => array(
				),

			);

			$___pattern_ids = array(
				'blog',
				'cards',
				'contact-bg-1',
				'contact-bg-2',
				'contact-description',
				'contact-image-middle',
				'contact-image-side',
				'contact-quote',
				'contact-shadow',
				'contact-social',
				'cta',
				'cta-bg',
				'cta-box',
				'cta-centered',
				'cta-large',
				'cta-quote',
				'cta-simple',
				'features-bg-image',
				'features-bg-shadow',
				'features-center-icon-1',
				'features-center-icon-2',
				'features-fullwidth-bg',
				'features-large-image',
				'features-parallax',
				'features-shadow',
				'features-simple',
				'features-single',
				'features-single-large',
				'features-steps',
				'food-menu',
				'footer',
				'footer-form',
				'gallery-captions',
				'gallery-no-gap',
				'gallery-variable-with-description',
				'heading-hidden-accessibly',
				'image-padding-left',
				'image-padding-right',
				'image-parallax',
				'intro-2-columns-text',
				'intro-2-images',
				'intro-bg-image',
				'intro-bg-links',
				'intro-bg-text-left',
				'intro-centered-background',
				'intro-color-image',
				'intro-color-image-large',
				'intro-fullscreen-bottom-text',
				'intro-images',
				'intro-overflow',
				'intro-overlap',
				'intro-with-description',
				'logos',
				'portfolio-project-gallery',
				'portfolio-project-image',
				'question-answer',
				'team',
				'team-2',
				'testimonials',
				'testimonials-single',
				'testimonials-single-bg',
				'text-2-columns-wider-heading',
				'text-extra-hierarchy',
				'text-heading-columns',
				'text-large-lead',
				'text-parallax',
				'text-with-image',
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
	 * @since    1.0.0
	 * @version  1.3.0
	 *
	 * @param  string $file  Pattern setup file name/path.
	 * @param  array  $args  Pattern setup arguments.
	 *
	 * @return  void
	 */
	public static function add_pattern_args( string $file, array $args ) {

		// Variables

			$dir = basename( dirname( $file ) ) . '/';
			$id  = str_replace( 'pattern/', '', $dir . basename( $file, '.php' ) );


		// Processing

			self::$pattern_args[ $id ] = (array) $args;

	} // /add_pattern_args

}
