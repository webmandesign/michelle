<?php
/**
 * Skip links menu.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<nav aria-label="<?php esc_attr_e( 'Skip links', 'michelle' ); ?>" class="menu-skip-links">
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
