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
	'title'      => _x( 'Features: A large feature', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'services', 'michelle' ), esc_html__( 'price', 'michelle' ) ),
) );

// Block pattern content:

$image = Starter::get_image_url( '2to3' );

?>

<!-- wp:group {"align":"full","backgroundColor":"palette-1","textColor":"palette-2","className":"is-style-no-padding"} -->
<div class="wp-block-group alignfull is-style-no-padding has-palette-2-color has-palette-1-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:media-text {"mediaPosition":"right","mediaId":999999,"mediaLink":"#0","mediaType":"image"} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999999 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"palette-2","className":"is-style-no-margin-vertical","fontSize":"normal"} -->
<h2 class="is-style-no-margin-vertical has-palette-2-color has-text-color has-normal-font-size">Dolor sit amet!</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"textColor":"palette-2","className":"is-style-no-margin-vertical","fontSize":"extra-large"} -->
<h3 class="is-style-no-margin-vertical has-palette-2-color has-text-color has-extra-large-font-size"><strong>Lorem Ipsum</strong> ... $<strong>12</strong></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"className":"is-style-zigzag-wide"} -->
<hr class="wp-block-separator is-style-zigzag-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit cubilia, integer curae mollis lacinia suspendisse aliquet sodales interdum, eget.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-zigzag-wide"} -->
<hr class="wp-block-separator is-style-zigzag-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"is-style-no-margin-vertical"} -->
<p class="is-style-no-margin-vertical">Phone:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":50,"lineHeight":"1"}}} -->
<p style="font-size:50px;line-height:1"><a href="tel:090123456">0900<strong> 123 456</strong></a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text --></div></div>
<!-- /wp:group -->
