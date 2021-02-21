<?php
/**
 * Admin "Welcome" page content component.
 *
 * Promo.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WebManDesign\Michelle\Welcome\Component' ) ) {
	return;
}

?>

<hr>

<div class="about__section is-feature" style="text-align: center; border: 4px solid rgba(0,0,0,.1);">
	<h2 style="font-size: 2.175em;">
		<?php esc_html_e( 'Fancy something more?', 'michelle' ); ?>
	</h2>
	<p>
		<?php esc_html_e( 'Get priority support, more customization options and editor palette colors, sidebars and widgets, true one click demo content import, and even more by purchasing one of my paid themes.', 'michelle' ); ?>
		<br>
		<small><em><?php esc_html_e( '(Note that the theme you are using now is fully functional and free without any paid upgrade.)', 'michelle' ); ?></em></small>
		<br><br>
		<a href="https://www.webmandesign.eu/?utm_source=michelle" class="button button-hero button-primary"><?php esc_html_e( 'Visit WebMan Design website now &rarr;', 'michelle' ); ?></a>
	</p>
</div>
