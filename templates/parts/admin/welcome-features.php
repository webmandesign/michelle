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

<div class="about__section has-transparent-background-color welcome--features">

	<h2><?php esc_html_e( 'Theme Features', 'michelle' ); ?></h2>

	<div class="about__section has-3-columns has-gutters has-transparent-background-color">

		<div class="column">
			<h3><?php esc_html_e( 'Block Patterns', 'michelle' ); ?></h3>
			<p><?php esc_html_e( 'Create your content faster with block patterns library.', 'michelle' ); ?></p>
			<p><a href="https://vimeo.com/webmandesigneu/block-patterns" target="_blank"  rel="noopener noreferrer"><small><em><?php esc_html_e( 'Watch instructions in new window &rarr;', 'michelle' ); ?></em></small></a></p>
		</div>

		<div class="column">
			<h3><?php esc_html_e( 'Block Styles', 'michelle' ); ?></h3>
			<p><?php esc_html_e( 'Style your blocks immediately and easily without coding.', 'michelle' ); ?></p>
			<p><a href="https://vimeo.com/webmandesigneu/block-styles" target="_blank"  rel="noopener noreferrer"><small><em><?php esc_html_e( 'Watch instructions in new window &rarr;', 'michelle' ); ?></em></small></a></p>
		</div>

		<div class="column">
			<h3><?php esc_html_e( 'Templates', 'michelle' ); ?></h3>
			<p><?php esc_html_e( 'Modify a page or post layout swiftly using templates.', 'michelle' ); ?></p>
			<p><a href="https://vimeo.com/webmandesigneu/templates" target="_blank"  rel="noopener noreferrer"><small><em><?php esc_html_e( 'Watch instructions in new window &rarr;', 'michelle' ); ?></em></small></a></p>
		</div>

	</div>

</div>

<hr class="is-large">
