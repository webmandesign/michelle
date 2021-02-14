<?php
/**
 * AMP integration component.
 *
 * Although this is technically a plugin integration, we are setting it up
 * as a theme tool for global access regardless the plugin activation.
 *
 * @link  https://wordpress.org/plugins/amp/
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

class AMP implements Component_Interface {

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

			add_theme_support( 'amp', array(
				'comments_live_list' => true,
			) );

	} // /after_setup_theme

	/**
	 * Determines whether this is an AMP response.
	 *
	 * Note that this must only be called after the `parse_query` action.
	 *
	 * @since  1.0.0
	 *
	 * @return  bool  Whether the AMP plugin is active and the current request is for an AMP endpoint.
	 */
	public static function is_amp(): bool {

		// Output

			return function_exists( 'is_amp_endpoint' ) && is_amp_endpoint();

	} // /is_amp

	/**
	 * Determines whether `amp-live-list` should be used for the comment list.
	 *
	 * @since  1.0.0
	 *
	 * @return  array
	 */
	public static function using_amp_live_list_comments(): bool {

		// Requirements check

			if ( ! self::is_amp() ) {
				return false;
			}


		// Variables

			$amp_theme_support = get_theme_support( 'amp' );


		// Output

			return ! empty( $amp_theme_support[0]['comments_live_list'] );

	} // /using_amp_live_list_comments

	/**
	 * Renders the wrapping `amp-live-list` element for the comments list.
	 *
	 * @since  1.0.0
	 *
	 * @param  string $context  Markup context, such as 'open' and 'close'.
	 *
	 * @return  void
	 */
	public static function the_amp_live_list_comments( string $context = 'open' ) {

		// Requirements check

			if ( ! self::using_amp_live_list_comments() ) {
				return;
			}


		// Processing

			if ( 'open' === $context ) {
				$comments_per_page = ( get_option( 'page_comments' ) ) ? ( (int) get_option( 'comments_per_page' ) ) : ( 10000 );

				?>
				<amp-live-list
					id="amp-live-comments-list-<?php the_ID(); ?>"
					<?php

					if ( 'asc' === get_option( 'comment_order' ) ) {
						echo ' sort="ascending" ';
					}

					?>
					data-poll-interval="<?php echo esc_attr( MINUTE_IN_SECONDS * 1000 ); ?>"
					data-max-items-per-page="<?php echo esc_attr( $comments_per_page ); ?>"
				>
				<?php

				add_filter( 'navigation_markup_template', __CLASS__ . '::add_amp_live_list_pagination_attribute' );
			} elseif ( 'close' === $context ) {
				remove_filter( 'navigation_markup_template', __CLASS__ . '::add_amp_live_list_pagination_attribute' );

				?>
					<div update>
						<button class="button" on="tap:amp-live-comments-list-<?php the_ID(); ?>.update"><?php esc_html_e( 'New comment(s)', 'michelle' ); ?></button>
					</div>
				</amp-live-list>
				<?php
			}

	} // /the_amp_live_list_comments

	/**
	 * Adds a pagination reference point attribute for `amp-live-list` when theme supports AMP.
	 *
	 * This is used by the `navigation_markup_template` filter in the comments template.
	 *
	 * @link https://www.ampproject.org/docs/reference/components/amp-live-list#pagination
	 *
	 * @since  1.0.0
	 *
	 * @param  string $markup  Navigation markup.
	 *
	 * @return  string  Filtered markup.
	 */
	public static function add_amp_live_list_pagination_attribute(  string $markup ): string {

		// Output

			return preg_replace(
				'/(\s*<[a-z0-9_-]+)/i',
				'$1 pagination ',
				$markup,
				1
			);

	} // /add_amp_live_list_pagination_attribute

}
