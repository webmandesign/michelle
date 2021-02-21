<?php
/**
 * Admin "Welcome" page content component.
 *
 * Header.
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

<div class="about__section is-feature" style="text-align: center; border: 4px solid rgba(0,0,0,.1);">

	<h1 style="font-size: 2.5em; font-weight: 700;">
		<?php echo wp_get_theme( 'michelle' )->display( 'Name' ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>
		<small style="font-size: .5em; font-weight: 400;"><?php echo MICHELLE_THEME_VERSION; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?></small>
	</h1>

	<p>
		<?php

		printf(
			/* translators: 1: theme name, 2: theme developer link. */
			esc_html__( 'Thank you for using %1$s theme by %2$s!', 'michelle' ),
			'<strong>' . wp_get_theme( 'michelle' )->display( 'Name' ) . '</strong>', // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			'<a href="' . esc_url( wp_get_theme( 'michelle' )->get( 'AuthorURI' ) ) . '"><strong>WebMan Design</strong></a>'
		);

		?>
		<br>
		<?php esc_html_e( 'Please take time to read the steps below to set up your website.', 'michelle' ); ?>
		<br><br>
		<a href="https://webmandesign.github.io/docs/michelle/" class="button button-hero button-primary"><?php esc_html_e( 'Read documentation &raquo;', 'michelle' ); ?></a>
		<a href="https://support.webmandesign.eu/" class="button button-hero button-primary"><?php esc_html_e( 'Contact support &raquo;', 'michelle' ); ?></a>
	</p>

</div>

<div class="about__section is-feature" style="text-align: center; border: 4px solid rgba(0,0,0,.1);">
	<?php echo Welcome\Component::get_info_like(); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>
</div>

<hr>
