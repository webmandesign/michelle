<?php
/**
 * Starter content: Excerpt.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_customize_preview() ) {
	return;
}

?>

<p>
	<a href="https://themedemos.webmandesign.eu/michelle/page-excerpt/"><?php echo esc_html_x( 'This is a page/post excerpt text.', 'Theme starter content', 'michelle' ); ?></a>
	Lorem ipsum dolor sit amet consectetur adipiscing elit gravida, enim curabitur sagittis magna molestie rutrum nostra viverra, libero posuere commodo class consequat iaculis.
</p>
