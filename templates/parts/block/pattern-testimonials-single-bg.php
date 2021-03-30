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
 * @version  1.0.8
 */

namespace WebManDesign\Michelle\Content;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Add block pattern setup args.
Block_Patterns::add_pattern_args( __FILE__, array(
	'title'      => _x( 'Testimonial: With background image', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'text' ),
	'keywords'   => array( esc_html__( 'quote', 'michelle' ), esc_html__( 'photo', 'michelle' ) ),
) );

// Block pattern content:

$image1 = Starter::get_image_url( '16to9' );
$image2 = Starter::get_image_url( '1to1' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image1 ); ?>","id":999991,"hasParallax":true,"dimRatio":90,"overlayColor":"palette-2","align":"full","className":"is-style-no-padding"} -->
<div class="wp-block-cover alignfull has-background-dim-90 has-palette-2-background-color has-background-dim has-parallax is-style-no-padding" style="background-image:url(<?php echo esc_url_raw( $image1 ); ?>)"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"className":"is-style-screen-reader-text"} -->
<h2 class="is-style-screen-reader-text">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:quote {"className":"is-style-large"} -->
<blockquote class="wp-block-quote is-style-large"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate, sociis per ultricies dictum tincidunt class tempus mi, tristique ligula nostra natoque pretium.</p></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:media-text {"align":"","mediaId":999992,"mediaType":"image","backgroundColor":"palette-2","textColor":"palette-3","className":"is-style-media-on-top"} -->
<div class="wp-block-media-text is-stacked-on-mobile is-style-media-on-top has-palette-3-color has-palette-2-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url_raw( $image2 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999992 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"className":"is-style-no-margin-vertical"} -->
<h3 class="is-style-no-margin-vertical">Jane Doe</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><em>Lorem ipsum dolor</em></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
