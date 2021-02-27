<?php
/**
 * Block pattern setup file.
 *
 * Default pattern categories: buttons, columns, gallery, header, text.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Content;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Add block pattern setup args.
Block_Patterns::add_pattern_args( __FILE__, array(
	'title'      => _x( 'Contact: With image on side', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/2to3.jpg' );

?>

<!-- wp:media-text {"mediaPosition":"right","mediaId":999999,"mediaLink":"#0","mediaType":"image","mediaWidth":38} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile" style="grid-template-columns:auto 38%"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999999 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"className":"is-style-default","fontSize":"large"} -->
<h2 class="is-style-default has-large-font-size"><strong>Lorem</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum 1234<br>Dolor Sit, 900 00</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"is-style-default","fontSize":"large"} -->
<h2 class="is-style-default has-large-font-size"><strong>Ipsum</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Mon - Fri ... 09:00 - 16:00<br>Sat ... 10:00 - 12:00<br>Sun ... Closed</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"is-style-default","fontSize":"large"} -->
<h2 class="is-style-default has-large-font-size"><strong>Dolor</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="mailto:lorem@ipsum.dolor">lorem@ipsum.dolor</a><br><a href="tel:+321900123456">+321 900 123 456</a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->
