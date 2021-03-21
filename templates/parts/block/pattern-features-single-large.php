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
	'title'      => _x( 'Features: A large feature', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
	'keywords'   => array( esc_html__( 'services', 'michelle' ) ),
) );

// Block pattern content:

$image = Starter::get_image_url( '1to1' );

?>

<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":999999,"mediaLink":"#0","mediaType":"image","imageFill":true,"backgroundColor":"palette-2","textColor":"palette-3"} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill has-palette-3-color has-palette-2-background-color has-text-color has-background"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);background-position:50% 50%"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999999 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"palette-3"} -->
<h2 class="has-palette-3-color has-text-color">Lorem ipsum dolor<br>sit amet consectetur</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"className":"has-40vmin-min-height"} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer has-40vmin-min-height"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit vitae, conubia ligula faucibus fusce class nisi eu commodo, aliquam convallis nulla libero torquent gravida facilisi.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->
