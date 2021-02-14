<?php
/**
 * Admin "Welcome" page content component.
 *
 * Theme demo.
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

<hr>

<div class="about__section has-2-columns has-subtle-background-color">

	<h2 class="is-section-header"><?php esc_html_e( 'Theme demo content', 'michelle' ); ?></h2>

	<div class="column">
		<h3><?php esc_html_e( 'WordPress starter content', 'michelle' ); ?></h3>

		<p>
			<?php esc_html_e( 'This theme contains a predefined starter content.', 'michelle' ); ?>
			<?php esc_html_e( 'So, if your WordPress installation is fresh and you haven\'t created any content yet, just open website customizer to preview the starter content.', 'michelle' ); ?>
			<?php esc_html_e( 'Once you publish your customizer settings, the starter content will be ported into your website automatically.', 'michelle' ); ?>
		</p>

		<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button"><?php esc_html_e( 'Customize your website &raquo;', 'michelle' ); ?></a></p>

		<p><em><small><?php esc_html_e( '(Note that WordPress starter content works only with fresh install of WordPress!)', 'michelle' ); ?></small></em>		</p>
	</div>

	<div class="column">
		<h3><?php esc_html_e( 'Full theme demo content', 'michelle' ); ?></h3>

		<p>
			<?php esc_html_e( 'Alternatively you can install a full theme demo content to match the theme demo website.', 'michelle' ); ?>
			<?php esc_html_e( 'This provides a more complex data and a great fresh start to build your own website.', 'michelle' ); ?>
		</p>

		<?php if ( class_exists( 'OCDI_Plugin' ) ) : ?>
			<p><a href="<?php echo esc_url( 'themes.php?page=pt-one-click-demo-import' ); ?>" class="button"><?php esc_html_e( 'Install theme demo content &raquo;', 'michelle' ); ?></a></p>
			<p><em><?php esc_html_e( 'Or head over to Appearance &raquo; Import Demo Data to start the import process.', 'michelle' ); ?></em></p>
		<?php else : ?>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=tgmpa-install-plugins' ) ); ?>" class="button"><?php esc_html_e( 'Use "One Click Demo Import" plugin &raquo;', 'michelle' ); ?></a></p>
		<?php endif; ?>

		<p><a href="https://themedemos.webmandesign.eu/michelle/"><?php esc_html_e( 'Preview theme demo &raquo;', 'michelle' ); ?></a></p>
	</div>

</div>
