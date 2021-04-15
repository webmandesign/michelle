<?php
/**
 * Accessibility component.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.0.12
 */

namespace WebManDesign\Michelle\Accessibility;

use WebManDesign\Michelle\Component_Interface;
use WebManDesign\Michelle\Assets;
use WebManDesign\Michelle\Header;
use WebManDesign\Michelle\Entry;
use WebManDesign\Michelle\Tool\AMP;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Component implements Component_Interface {

	/**
	 * Initialization.
	 *
	 * @since    1.0.0
	 * @version  1.0.12
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			// Actions

				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue', MICHELLE_ENQUEUE_PRIORITY );
				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue_inline_skip_link_focus_fix', MICHELLE_ENQUEUE_PRIORITY );

				add_action( 'tha_body_top', __CLASS__ . '::anchor_top_of_page', -10 );

				add_action( 'tha_body_top',     __CLASS__ . '::skip_links_body', 20 );
				add_action( 'tha_entry_bottom', __CLASS__ . '::skip_links_entry', 999 );

	} // /init

	/**
	 * Enqueue assets.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function enqueue() {

		// Requirements check

			if ( AMP::is_amp() ) {
				return;
			}


		// Processing

			// Navigation scripts.
			if ( Header\Component::is_enabled() ) {
				Assets\Factory::script_enqueue( array(
					'handle'    => 'a11y-menu',
					'src'       => get_theme_file_uri( 'vendor/a11y-menu/a11y-menu.dist.min.js' ),
					'in_footer' => false,
					'add_data'  => array(
						'async'    => true,
						'precache' => true,
					),
					'localize'  => array(
						'a11yMenuConfig' => array(
							'mode'              => array( 'esc', 'button' ),
							'menu_selector'     => '.toggle-sub-menus',
							'button_attributes' => array(
								'class'      => 'button-toggle-sub-menu',
								'aria-label' => array(
									'collapse' => esc_html__( 'Collapse child menu', 'michelle' ),
									'expand'   => esc_html__( 'Expand child menu', 'michelle' ),
								),
							),
						),
					),
				) );
			}

	} // /enqueue

	/**
	 * Fixing skip link focus in IE11.
	 *
	 * Since this will never need to be changed, it is minified.
	 * @link https://git.io/vWdr2
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function enqueue_inline_skip_link_focus_fix() {

		// Requirements check

			if (
				AMP::is_amp()
				|| empty( $GLOBALS['is_IE'] )
			) {
				return;
			}


		// Processing

			wp_add_inline_script(
				'michelle-scripts-footer',
				'/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);'
			);

	} // /enqueue_inline_skip_link_focus_fix

	/**
	 * Anchor for top of the page.
	 *
	 * Should be the first element on the page, before the skip links.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function anchor_top_of_page() {

		// Output

			echo '<a name="top"></a>' . PHP_EOL.PHP_EOL;

	} // /anchor_top_of_page

	/**
	 * Skip link generator.
	 *
	 * @since  1.0.0
	 *
	 * @param  string $id     Link target element ID.
	 * @param  string $text   Link text.
	 * @param  string $class  Additional link CSS classes.
	 * @param  string $html   Output html, use "%s" for actual link output.
	 *
	 * @return  string
	 */
	public static function link_skip_to( string $id = 'content', string $text = '', string $class = '', string $html = '%s' ): string {

		// Pre

			/**
			 * Bypass filter for Content::link_skip_to().
			 *
			 * Returning a non-false value will short-circuit the method,
			 * returning the passed value instead.
			 *
			 * @since  1.0.0
			 *
			 * @param  mixed  $pre    Default: false. If not false, method returns this value.
			 * @param  string $id     Link target element ID.
			 * @param  string $text   Link text.
			 * @param  string $class  Additional link CSS classes.
			 * @param  string $html   Output html, use "%s" for actual link output.
			 */
			$pre = apply_filters( 'pre/michelle/accessibility/link_skip_to', false, $id, $text, $class, $html );

			if ( false !== $pre ) {
				return $pre;
			}


		// Processing

			if ( empty( $text ) ) {
				$text = __( 'Skip to main content', 'michelle' );
			}


		// Output

			return sprintf(
				(string) $html,
				'<a class="' . esc_attr( trim( 'skip-link screen-reader-text ' . $class ) ) . '" href="#' . esc_attr( trim( $id ) ) . '">' . esc_html( $text ) . '</a>'
			);

	} // /link_skip_to

	/**
	 * Skip links: Body top.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function skip_links_body() {

		// Output

			get_template_part( 'templates/parts/accessibility/menu', 'skip-links' );

	} // /skip_links_body

	/**
	 * Skip links: Entry bottom.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function skip_links_entry() {

		// Requirements check

			if ( ! Entry\Component::is_singular() ) {
				return;
			}


		// Output

			echo self::link_skip_to( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				'site-navigation',
				esc_html__( 'Skip back to main navigation', 'michelle' )
			);

	} // /skip_links_entry

}
