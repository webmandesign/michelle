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
 * @version  1.0.10
 */

namespace WebManDesign\Michelle\Content;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Add block pattern setup args.
Block_Patterns::add_pattern_args( __FILE__, array(
	'title'      => _x( 'Gallery: Variable, with description', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'gallery' ),
	'keywords'   => array( esc_html__( 'image', 'michelle' ) ),
) );

// Block pattern content:

$image1 = Starter::get_image_url( '16to9' );
$image2 = Starter::get_image_url( '3to4' );
$image3 = Starter::get_image_url( '2to3' );
$image4 = Starter::get_image_url( '1to1' );

?>

<!-- wp:columns {"verticalAlignment":"bottom","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"61.8%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:61.8%"><!-- wp:gallery {"ids":[2136,2137,1966,1970],"columns":2,"linkTo":"none","className":"is-style-variable"} -->
<figure class="wp-block-gallery columns-2 is-cropped is-style-variable"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image1 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999991" data-full-url="<?php echo esc_url_raw( $image1 ); ?>" data-link="#0" class="wp-image-999991"/><figcaption class="blocks-gallery-item__caption">John Doe</figcaption></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image2 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999992" data-full-url="<?php echo esc_url_raw( $image2 ); ?>" data-link="#0" class="wp-image-999992"/><figcaption class="blocks-gallery-item__caption">Doe John</figcaption></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image3 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999993" data-full-url="<?php echo esc_url_raw( $image3 ); ?>" data-link="#0" class="wp-image-999993"/><figcaption class="blocks-gallery-item__caption">Jane Doe</figcaption></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image4 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999994" data-full-url="<?php echo esc_url_raw( $image4 ); ?>" data-link="#0" class="wp-image-999994"/><figcaption class="blocks-gallery-item__caption">Doe Jane</figcaption></figure></li></ul></figure>
<!-- /wp:gallery --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"38.2%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:38.2%"><!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading -->
<h2>Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing, elit felis nisi magna nisl nec, proin mi tempus turpis integer.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing, elit felis nisi magna nisl nec, proin mi tempus turpis integer. Rhoncus nunc condimentum venenatis, orci.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
