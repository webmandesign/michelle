<?php
/**
 * Admin "Welcome" page content component.
 *
 * Quickstart guide.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WebManDesign\Michelle\Welcome\Component' ) ) {
	return;
}

?>

<div class="about__section has-3-columns">

	<h2 class="is-section-header"><?php esc_html_e( 'Quickstart Guide', 'michelle' ); ?></h2>

	<div class="column">
		<h3><?php esc_html_e( 'New to WordPress?', 'michelle' ); ?></h3>
		<p><?php esc_html_e( 'If you are new to WordPress, please check out the introduction section in theme documentation.', 'michelle' ); ?></p>
		<p><a class="button" href="https://webmandesign.github.io/docs/michelle/#wordpress"><?php esc_html_e( 'Get to know WordPress &raquo;', 'michelle' ); ?></a></p>
	</div>

	<div class="column">
		<h3><?php esc_html_e( 'WordPress settings', 'michelle' ); ?></h3>
		<p>
			<?php esc_html_e( 'Make sure you set up your site in "Settings" section of the dashboard.', 'michelle' ); ?>
			<?php esc_html_e( '(Pay special attention to image sizes setup under Settings &rarr; Media.)', 'michelle' ); ?>
		</p>
		<p><a class="button" href="<?php echo esc_url( admin_url( 'options-general.php' ) ); ?>"><?php esc_html_e( 'Set up WordPress &raquo;', 'michelle' ); ?></a></p>
	</div>

	<div class="column">
		<h3><?php esc_html_e( 'Customize your website', 'michelle' ); ?></h3>
		<p>
			<?php esc_html_e( 'You can customize your website using a live-preview editor.', 'michelle' ); ?>
			<?php esc_html_e( 'Customization changes will go live only after you publish them.', 'michelle' ); ?>
		</p>
		<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button"><?php esc_html_e( 'Customize your website &raquo;', 'michelle' ); ?></a></p>
	</div>

</div>
