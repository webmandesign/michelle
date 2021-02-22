<?php
/**
 * Admin "Welcome" page content component.
 *
 * Features.
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

<hr class="is-large">

<div class="about__section has-transparent-background-color">

	<h2 style="margin-bottom: .618em; text-align: center;"><?php esc_html_e( 'Theme Features', 'michelle' ); ?></h2>

	<div class="about__section has-3-columns has-gutters has-transparent-background-color">

		<div class="column">
			<h3><?php esc_html_e( 'Templates', 'michelle' ); ?></h3>
			<p><a href="<?php echo esc_url( get_theme_file_uri( 'assets/images/welcome/templates.jpg' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/welcome/templates.jpg' ) ); ?>" alt="" aria-hidden="true" /></a></p>
			<p><?php esc_html_e( 'Modify a page or post layout swiftly using templates.', 'michelle' ); ?></p>
		</div>

		<div class="column">
			<h3><?php esc_html_e( 'Block Patterns', 'michelle' ); ?></h3>
			<p><a href="<?php echo esc_url( get_theme_file_uri( 'assets/images/welcome/block-patterns.jpg' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/welcome/block-patterns.jpg' ) ); ?>" alt="" aria-hidden="true" /></a></p>
			<p><?php esc_html_e( 'Create your content faster with block patterns library.', 'michelle' ); ?></p>
		</div>

		<div class="column">
			<h3><?php esc_html_e( 'Block Styles', 'michelle' ); ?></h3>
			<p><a href="<?php echo esc_url( get_theme_file_uri( 'assets/images/welcome/block-styles.jpg' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/welcome/block-styles.jpg' ) ); ?>" alt="" aria-hidden="true" /></a></p>
			<p><?php esc_html_e( 'Style your blocks immediately and easily without coding.', 'michelle' ); ?></p>
		</div>

	</div>

</div>

<hr class="is-large">
