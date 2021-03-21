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
	'title'      => _x( 'Call to action: Large', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'buttons' ),
	'keywords'   => array( esc_html__( 'button', 'michelle' ) ),
) );

// Block pattern content:

$image = Starter::get_image_url( '1to1' );

?>

<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":999999,"mediaLink":"#0","mediaType":"image","imageFill":true,"className":"has-full-screen-min-height is-style-narrow-content","backgroundColor":"palette-2","textColor":"palette-3"} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill has-full-screen-min-height is-style-narrow-content has-palette-3-color has-palette-2-background-color has-text-color has-background"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);background-position:50% 50%"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999999 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"className":"is-style-uppercase","textColor":"palette-3"} -->
<h2 class="is-style-uppercase has-palette-3-color has-text-color"><strong>Lorem ipsum</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit euismod tristique aliquet nisl torquent, bibendum posuere.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"palette-1","textColor":"palette-2","className":"has-large-font-size"} -->
<div class="wp-block-button has-large-font-size"><a class="wp-block-button__link has-palette-2-color has-palette-1-background-color has-text-color has-background" href="#0">Lorem →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text -->
