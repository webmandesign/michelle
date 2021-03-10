<?php
/**
 * Admin "Welcome" page content component.
 *
 * Accessibility tips.
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

<div class="about__section has-2-columns welcome--accessibility">

	<h2 class="is-section-header"><?php esc_html_e( 'Create an Accessible Website', 'michelle' ); ?></h2>

	<div class="column">
		<h3><?php esc_html_e( 'Hierarchy', 'michelle' ); ?></h3>
		<p><?php esc_html_e( 'Keep proper headings hierarchy, do not skip heading levels: H2 should be followed by H3 and so on.', 'michelle' ); ?></p>

		<h3><?php esc_html_e( 'Simplicity', 'michelle' ); ?></h3>
		<p><?php esc_html_e( 'Keep your text simple. Paragraphs with more than four lines are more difficult to read. Use lists and spacing in your content.', 'michelle' ); ?></p>
	</div>

	<div class="column">
		<h3><?php esc_html_e( 'Images', 'michelle' ); ?></h3>
		<p><?php esc_html_e( 'Adding images to posts and pages makes your content easier to remember.', 'michelle' ); ?></p>

		<h3><?php esc_html_e( 'Alternatives', 'michelle' ); ?></h3>
		<p>
			<?php esc_html_e( 'Add alt texts to images (you can do this in the media library or directly in post editor).', 'michelle' ); ?>
			<?php esc_html_e( 'Add text alternatives for videos and sound.', 'michelle' ); ?>
		</p>
	</div>

</div>
