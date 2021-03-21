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
	'title'      => _x( 'Team', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'gallery' ),
	'keywords'   => array( esc_html__( 'staff', 'michelle' ), esc_html__( 'employees', 'michelle' ), esc_html__( 'people', 'michelle' ), esc_html__( 'image', 'michelle' ), esc_html__( 'photo', 'michelle' ), esc_html__( 'gallery', 'michelle' ) ),
) );

// Block pattern content:

$image1 = Starter::get_image_url( '2to3' );
$image2 = Starter::get_image_url( '1to1' );
$image3 = Starter::get_image_url( '3to4' );
$image4 = Starter::get_image_url( '16to9' );

?>

<!-- wp:group {"align":"full","backgroundColor":"palette-1","textColor":"palette-2","className":"is-style-no-padding"} -->
<div class="wp-block-group alignfull is-style-no-padding has-palette-2-color has-palette-1-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit faucibus, dictumst aenean netus at praesent.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:gallery {"ids":[999991,999992,999993,999994],"columns":4,"linkTo":"none","align":"wide"} -->
<figure class="wp-block-gallery alignwide columns-4 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image1 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999991" data-full-url="<?php echo esc_url_raw( $image1 ); ?>" data-link="#0" class="wp-image-999991"/><figcaption class="blocks-gallery-item__caption">John Doe</figcaption></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image2 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999992" data-full-url="<?php echo esc_url_raw( $image2 ); ?>" data-link="#0" class="wp-image-999992"/><figcaption class="blocks-gallery-item__caption">Doe John</figcaption></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image3 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999993" data-full-url="<?php echo esc_url_raw( $image3 ); ?>" data-link="#0" class="wp-image-999993"/><figcaption class="blocks-gallery-item__caption">Jane Doe</figcaption></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image4 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999994" data-full-url="<?php echo esc_url_raw( $image4 ); ?>" data-link="#0" class="wp-image-999994"/><figcaption class="blocks-gallery-item__caption">Doe Jane</figcaption></figure></li></ul></figure>
<!-- /wp:gallery -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit faucibus, dictumst aenean netus at pellentesque praesent.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"contentJustification":"center"} -->
<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"backgroundColor":"palette-2","textColor":"palette-3"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-palette-3-color has-palette-2-background-color has-text-color has-background">Lorem Ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
