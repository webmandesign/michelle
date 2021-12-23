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
	'title'      => _x( 'Team: 2 large descriptions', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'staff', 'michelle' ), esc_html__( 'employees', 'michelle' ), esc_html__( 'people', 'michelle' ), esc_html__( 'image', 'michelle' ), esc_html__( 'photo', 'michelle' ), esc_html__( 'gallery', 'michelle' ) ),
) );

// Block pattern content:

$image = Starter::get_image_url( '1to1' );

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"palette-2","textColor":"palette-3","className":"is-style-no-margin-vertical"} -->
<div class="wp-block-group alignfull is-style-no-margin-vertical has-palette-3-color has-palette-2-background-color has-text-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"align":"wide","textColor":"palette-3","className":"is-style-uppercase","fontSize":"large"} -->
<h2 class="alignwide is-style-uppercase has-palette-3-color has-text-color has-large-font-size">Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:media-text {"align":"","mediaId":999999,"mediaLink":"#0","mediaType":"image","imageFill":false,"className":"is-style-media-on-top"} -->
<div class="wp-block-media-text is-stacked-on-mobile is-style-media-on-top"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999999 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"textColor":"palette-3","className":"is-style-no-margin-vertical"} -->
<h3 class="is-style-no-margin-vertical has-palette-3-color has-text-color"><strong>Lorem Ipsum</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">CEO</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"dropCap":true} -->
<p class="has-drop-cap">Lorem ipsum dolor sit amet consectetur adipiscing elit tellus, odio sem hendrerit pretium euismod vulputate vivamus primis, ante dictum praesent auctor etiam platea mauris. Lorem ipsum dolor sit amet consectetur adipiscing elit tellus, odio sem hendrerit pretium euismod vulputate vivamus primis.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:media-text {"align":"","mediaId":999999,"mediaLink":"#0","mediaType":"image","imageFill":false,"className":"is-style-media-on-top"} -->
<div class="wp-block-media-text is-stacked-on-mobile is-style-media-on-top"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999999 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"textColor":"palette-3","className":"is-style-no-margin-vertical"} -->
<h3 class="is-style-no-margin-vertical has-palette-3-color has-text-color"><strong>Lorem Ipsum</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">CTO</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"dropCap":true} -->
<p class="has-drop-cap">Dolor sit amet consectetur elit tellus, odio sem hendrerit pretium euismod vulputate vivamus primis, ante dictum praesent auctor etiam platea mauris. Lorem ipsum dolor sit amet consectetur adipiscing elit tellus, odio sem hendrerit pretium euismod vulputate vivamus primis.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
