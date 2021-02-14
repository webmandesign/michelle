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

<hr>

<div class="about__section has-1-column">

	<div class="column">
		<h2><?php esc_html_e( 'Accessibility Tips', 'michelle' ); ?></h2>

		<p><?php esc_html_e( 'Tips for creating an accessible website:', 'michelle' ); ?></p>

		<ul>
			<li><?php esc_html_e( 'Keep proper headings hierarchy, do not skip heading levels: H2 should be followed by H3 and so on.', 'michelle' ); ?></li>
			<li><?php esc_html_e( 'Keep your text simple. Paragraphs with more than four lines are more difficult to read. Use lists and spacing in your content.', 'michelle' ); ?></li>
			<li><?php esc_html_e( 'Adding images to posts and pages makes your content easier to remember.', 'michelle' ); ?></li>
			<li><?php esc_html_e( 'Add alt texts to images (you can do this in the media library or directly in post editor).', 'michelle' ); ?></li>
			<li><?php esc_html_e( 'Add text alternatives for videos and sound.', 'michelle' ); ?></li>
		</ul>

	</div>

</div>
