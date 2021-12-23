<?php
/**
 * Block pattern setup file.
 *
 * Default pattern categories: buttons, columns, gallery, header, text.
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
	'title'      => _x( 'Intro: Overlapped', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'title', 'michelle' ), esc_html__( 'heading', 'michelle' ), 'h1' ),
) );

// Block pattern content:

$image = Starter::get_image_url( '1to1' );

?>

<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":999999,"mediaLink":"#0","mediaType":"image","verticalAlignment":"bottom","imageFill":true,"className":"has-full-screen-min-height is-style-overlap-gradient","backgroundColor":"palette-2","textColor":"palette-3"} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom is-image-fill has-full-screen-min-height is-style-overlap-gradient has-palette-3-color has-palette-2-background-color has-text-color has-background"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);background-position:50% 50%"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999999 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":1,"backgroundColor":"palette-1","textColor":"palette-2"} -->
<h1 class="has-palette-2-color has-palette-1-background-color has-text-color has-background">Lorem ipsum dolor</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-narrow-max-width","fontSize":"large"} -->
<p class="has-narrow-max-width has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit nisi, velit aptent neque pharetra natoque convallis vestibulum eros, penatibus vitae augue himenaeos.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->
