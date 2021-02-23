<?php
/**
 * TGMPA plugin recommendations component.
 *
 * @link  http://tgmpluginactivation.com
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Plugin;

use WebManDesign\Michelle\Component_Interface;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class TGMPA implements Component_Interface {

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Requirements check

			/**
			 * Whether to enable TGMPA plugin recommendations.
			 *
			 * @link  http://tgmpluginactivation.com/
			 *
			 * @since  1.0.0
			 *
			 * @param  bool $enabled  Default: is_admin().
			 */
			if ( (bool) apply_filters( 'michelle/enable_plugin_suggestions', is_admin() ) ) {
				require MICHELLE_PATH_VENDOR . 'tgmpa/class-tgm-plugin-activation.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
			} else {
				return;
			}


		// Processing

			// Actions

				add_action( 'tgmpa_register', __CLASS__ . '::setup' );

				add_action( 'admin_notices', __CLASS__ . '::notice' );

			// Filters

				add_filter( 'tgmpa_notice_action_links', __CLASS__ . '::notification_links' );

				add_filter( 'tgmpa_table_columns', __CLASS__ . '::table_columns' );

				add_filter( 'tgmpa_table_data_item', __CLASS__ . '::table_data', 10, 2 );

	} // /init

	/**
	 * Setup recommend plugins.
	 *
	 * @link  https://github.com/thomasgriffin/TGM-Plugin-Activation/blob/master/example.php
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function setup() {

		// Processing

			$setup['plugins'] = array(

				'beaver-builder' => array(
					'name'        => 'Beaver Builder',
					'description' => __( 'Easy to use drag-and-drop page builder for creating complex page layouts.', 'michelle' ) . ' ' . __( 'Feel free to use whatever page builder you are familiar with, though.', 'michelle' ) . ' ' . __( 'The theme will handle any page builder.', 'michelle' ) . '<br><br><em>' . __( 'With full block editor compatibility you may not even need any page builder, actually :)', 'michelle' ) . '</em>',
					'slug'        => 'beaver-builder-lite-version',
					'required'    => false,
					'is_callable' => 'FLBuilder::init',
				),

				'one-click-demo-import' => array(
					'name'        => 'One Click Demo Import',
					'description' => __( 'For installing theme demo content easily.', 'michelle' ),
					'slug'        => 'one-click-demo-import',
					'required'    => false,
				),

				'woocommerce' => array(
					'name'        => 'WooCommerce',
					'description' => __( 'Adding e-commerce functionality.', 'michelle' ),
					'slug'        => 'woocommerce',
					'required'    => false,
				),

				'woocommerce-theme-integration' => array(
					'name'        => 'WooCommerce Theme Integration',
					'description' => esc_html__( 'When using WooCommerce plugin, this plugin helps integrate the e-shop into theme design.', 'michelle' ),
					'slug'        => 'woocommerce-theme-integration',
					'required'    => false,
					'source'      => 'https://github.com/webmandesign/woocommerce-theme-integration/raw/dist/woocommerce-theme-integration.zip',
				),

			);

			/**
			 * Filters TGMPA plugins setup array.
			 *
			 * Consist of plugins setup arrays where required keys are `name` and `slug`.
			 * If the source is NOT from the .org repository, then `source` is also required.
			 * And config setup array.
			 *
			 * @example
			 *   array(
			 *     'plugins' => array( ... ),
			 *     'config'  => array(),
			 *   )
			 *
			 * @link  https://github.com/TGMPA/TGM-Plugin-Activation/blob/master/example.php
			 *
			 * @since  1.0.0
			 *
			 * @param  array $plugins
			 */
			$setup = (array) apply_filters( 'michelle/tgmpa_plugins/setup', $setup );

			if ( isset( $setup['plugins'] ) ) {
				if ( isset( $setup['config'] ) ) {
					tgmpa( $setup['plugins'], $setup['config'] );
				} else {
					tgmpa( $setup['plugins'] );
				}
			}

	} // /setup

	/**
	 * Admin notification links.
	 *
	 * @since  1.0.0
	 *
	 * @param  array $action_links
	 *
	 * @return  array
	 */
	public static function notification_links( array $action_links = array() ): array {

		// Processing

			$action_links[] = '<a href="https://webmandesign.github.io/docs/michelle/#plugins">' . esc_html__( 'Other useful plugins &raquo;', 'michelle' ) . '</a>';


		// Output

			return $action_links;

	} // /notification_links

	/**
	 * TGMPA plugins table: Columns.
	 *
	 * @since  1.0.0
	 *
	 * @param  array $columns
	 *
	 * @return  array
	 */
	public static function table_columns( array $columns = array() ): array {

		// Processing

			$columns = array_merge(
				array_slice( $columns, 0, 2 ),
				array( 'description' => esc_html__( 'Why would you use this plugin?', 'michelle' ) ),
				array_slice( $columns, 2 )
			);


		// Output

			return $columns;

	} // /table_columns

	/**
	 * TGMPA plugins table: Plugin description.
	 *
	 * @since  1.0.0
	 *
	 * @param  array $table_data
	 * @param  array $plugin
	 *
	 * @return  array
	 */
	public static function table_data( array $table_data = array(), array $plugin = array() ): array {

		// Processing

			$table_data['description'] = '';

			if ( isset( $plugin['description'] ) ) {
				$table_data['description'] = wp_kses( $plugin['description'], 'option_description' );
			}


		// Output

			return $table_data;

	} // /table_data

	/**
	 * Display admin notice.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function notice() {

		// Variables

			$current_screen = get_current_screen();


		// Requirements check

			if (
				! is_admin()
				|| ! isset( $current_screen->id )
				|| 'appearance_page_tgmpa-install-plugins' !== $current_screen->id
				|| isset( $_GET['plugin'] )
				|| ( isset( $_GET['plugin_status'] ) && 'all' !== $_GET['plugin_status'] )
			) {
				return;
			}


		// Output

			?>

			<div class="notice-info notice is-dismissible" style="padding: 1em 2em;">
				<h2>
					<?php echo esc_html_x( 'Recommended, not required', 'Plugins.', 'michelle' ); ?>
				</h2>
				<p>
					<?php esc_html_e( 'Please note that these are just recommended plugins, not required ones.', 'michelle' ); ?>
					<?php esc_html_e( 'Install only those plugins you will use.', 'michelle' ); ?>
					<?php echo esc_html_x( 'Or install the ones you prefer.', 'Plugins.', 'michelle' ); ?> <br>
					<?php esc_html_e( 'For example, if you are not building an eCommerce website, there is no need to install WooCommerce plugin.', 'michelle' ); ?>
				</p>
			</div>

			<?php

	} // /notice

}
