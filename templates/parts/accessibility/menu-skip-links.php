<?php
/**
 * Skip links menu.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.0.12
 */

namespace WebManDesign\Michelle;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<nav class="menu-skip-links" role="navigation" aria-label="<?php esc_attr_e( 'Skip links', 'michelle' ); ?>">
	<ul>
		<?php

		$links = array(
			'site-navigation'         => __( 'Skip to main navigation', 'michelle' ),
			'content'                 => __( 'Skip to main content', 'michelle' ),
			'site-header-search-form' => __( 'Skip to search form', 'michelle' ),
			'colophon'                => __( 'Skip to footer', 'michelle' ),
		);

		foreach ( $links as $html_id => $text ) {
			echo Accessibility\Component::link_skip_to( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				$html_id,
				$text,
				'',
				'<li>%s</li>'
			);
		}

		?>
	</ul>
</nav>
