<?php
/**
 * Site footer area content.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle;

use WP_Query;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$site_footer = Customize\Mod::get( 'block_area_site_footer' );

if ( empty( $site_footer ) ) {
	return;
}

$site_footer_query = new WP_Query( array(
	'p'         => $site_footer,
	'post_type' => 'wp_block',
) );

if ( ! $site_footer_query->have_posts() ) {
	return;
}

?>

<div class="site-footer-section">
	<div class="site-footer-content">
		<?php

		while ( $site_footer_query->have_posts() ) {
			$site_footer_query->the_post();

			the_content();
		}

		wp_reset_postdata();

		?>
	</div>
</div>
