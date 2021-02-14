<?php
/**
 * Breadcrumbs section.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if (
	/**
	 * Whether to disable Breadcrumb NavXT plugin output.
	 *
	 * @since  1.0.0
	 *
	 * @param  bool $is_disabled  Default: false.
	 */
	(bool) apply_filters( 'michelle/breadcrumbs/is_disabled', false )
	|| ! function_exists( 'bcn_display' )
) {
	return;
}

/**
 * Fires before breadcrumbs container opening tag.
 *
 * @since  1.0.0
 */
do_action( 'michelle/breadcrumbs/before' );

?>

<div class="breadcrumbs-section">
	<div class="breadcrumbs-content">
		<nav class="breadcrumbs" aria-label="<?php esc_attr_e( 'Breadcrumbs navigation', 'michelle' ); ?>">
			<?php bcn_display(); ?>
		</nav>
	</div>
</div>

<?php

/**
 * Fires after breadcrumbs container closing tag.
 *
 * @since  1.0.0
 */
do_action( 'michelle/breadcrumbs/after' );
