<?php
/**
 * Theme starter content.
 *
 * @link  https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Tool;

use WebManDesign\Michelle\Component_Interface;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Starter_Content implements Component_Interface {

	/**
	 * Starter content array.
	 *
	 * @since   1.0.0
	 * @access  private
	 * @var     array
	 */
	private static $content = array();

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			// Loading

				self::attachments();
				self::pages();
				self::options();
				self::nav_menus();

			// Setup

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

			/**
			 * Filters theme starter content setup array.
			 *
			 * @since  1.0.0
			 *
			 * @param  array $content  WordPress starter content setup array.
			 */
			self::$content = apply_filters( 'michelle/add_theme_support/starter-content', self::$content );

			if ( ! empty( self::$content ) ) {
				add_theme_support( 'starter-content', self::$content );
			}

	} // /after_setup_theme

	/**
	 * Get specific content.
	 *
	 * @since  1.0.0
	 *
	 * @param  string $context
	 *
	 * @return  string
	 */
	public static function get_content( string $context ): string {

		// Processing

			ob_start();
			get_template_part( 'templates/parts/admin/content-starter', $context );


		// Output

			return trim( ob_get_clean() );

	} // /get_content

	/**
	 * Pages.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function pages() {

		// Output

			self::$content['posts'] = array(

				'home' => array(
					'post_type'    => 'page',
					'post_title'   => esc_html_x( 'Welcome!', 'Theme starter content', 'michelle' ),
					'post_content' => self::get_content( 'home' ),
					'post_excerpt' => self::get_content( 'excerpt' ),
				),

				'blog' => array(
					'post_type'    => 'page',
					'post_excerpt' => self::get_content( 'excerpt' ),
				),

				'about' => array(
					'post_type'    => 'page',
					'post_title'   => esc_html_x( 'About us', 'Theme starter content', 'michelle' ),
					'post_content' => self::get_content( 'about' ),
					'post_excerpt' => self::get_content( 'excerpt' ),
				),

				'faq' => array(
					'post_type'    => 'page',
					'post_title'   => esc_html_x( 'Frequently Asked Questions', 'Theme starter content', 'michelle' ),
					'post_content' => self::get_content( 'faq' ),
					'post_excerpt' => self::get_content( 'excerpt' ),
				),

				'contact' => array(
					'post_type'    => 'page',
					'post_title'   => esc_html_x( 'Contact us', 'Theme starter content', 'michelle' ),
					'post_content' => self::get_content( 'contact' ),
					'post_excerpt' => self::get_content( 'excerpt' ),
				),

			);

	} // /pages

	/**
	 * Navigational menus.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function nav_menus() {

		// Output

			self::$content['nav_menus'] = array(

				'primary' => array(
					'name' => esc_html_x( 'Primary Menu', 'Theme starter content', 'michelle' ),
					'items' => array(
						'link_home',
						'link_about' => array(
							'title'     => esc_html_x( 'About', 'Theme starter content', 'michelle' ),
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{about}}',
						),
						'link_faq' => array(
							'title'     => esc_html_x( 'FAQ', 'Theme starter content', 'michelle' ),
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{faq}}',
						),
						'link_blog' => array(
							'title'     => esc_html_x( 'Blog', 'Theme starter content', 'michelle' ),
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{blog}}',
						),
						'link_contact' => array(
							'title'     => esc_html_x( 'Contact', 'Theme starter content', 'michelle' ),
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{contact}}',
						),
					),
				),

				'footer' => array(
					'name' => esc_html_x( 'Footer Links', 'Theme starter content', 'michelle' ),
					'items' => array(
						'link_about' => array(
							'title'     => esc_html_x( 'About', 'Theme starter content', 'michelle' ),
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{about}}',
						),
						'link_faq' => array(
							'title'     => esc_html_x( 'FAQ', 'Theme starter content', 'michelle' ),
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{faq}}',
						),
						'link_blog' => array(
							'title'     => esc_html_x( 'Blog', 'Theme starter content', 'michelle' ),
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{blog}}',
						),
						'link_contact' => array(
							'title'     => esc_html_x( 'Contact', 'Theme starter content', 'michelle' ),
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{contact}}',
						),
					),
				),

				'social' => array(
					'name' => esc_html_x( 'Social Links', 'Theme starter content', 'michelle' ),
					'items' => array(
						'link_facebook' => array(
							'title' => esc_html_x( 'Facebook', 'Theme starter content', 'michelle' ),
							'url'   => 'https://www.facebook.com/',
						),
						'link_twitter' => array(
							'title' => esc_html_x( 'Twitter', 'Theme starter content', 'michelle' ),
							'url'   => 'https://twitter.com/',
						),
						'link_email',
					),
				),

			);

	} // /nav_menus

	/**
	 * WordPress options.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function options() {

		// Output

			self::$content['options'] = array(
				'show_on_front'       => 'page',
				'page_on_front'       => '{{home}}',
				'page_for_posts'      => '{{blog}}',
				'posts_per_page'      => 6,
				'permalink_structure' => '/%postname%/',
			);

	} // /options

	/**
	 * Attachments.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function attachments() {

		// Output

			self::$content['attachments'] = array(
				'attachment-image-landscape' => array(
					'file' => 'assets/images/starter/landscape.jpg',
				),
			);

	} // /attachments

}
