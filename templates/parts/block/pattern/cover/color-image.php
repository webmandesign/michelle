<?php
/**
 * Block pattern setup file.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.3.0
 */

namespace WebManDesign\Michelle\Content;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Add block pattern setup args.
Block_Patterns::add_pattern_args( __FILE__, array(
	'title'      => _x( 'Intro: Colored, with image', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'title', 'michelle' ), esc_html__( 'heading', 'michelle' ), 'h1' ),
) );

// Block pattern content:

$image = Starter::get_image_url( '3to4' );

?>

<!-- wp:group {"align":"full","backgroundColor":"palette-1","textColor":"palette-2","className":"is-style-no-padding"} -->
<div class="wp-block-group alignfull is-style-no-padding has-palette-2-color has-palette-1-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:media-text {"mediaPosition":"right","mediaId":999999,"mediaLink":"#0","mediaType":"image"} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999999 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"className":"is-style-no-margin-vertical"} -->
<p class="is-style-no-margin-vertical"><strong>DOLOR SIT AMET</strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1>Lorem ipsum</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
<p class="has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit duis, curae iaculis feugiat tincidunt nam velit integer ridiculus placerat.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
