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
	'title'      => _x( 'Testimonial: With background image', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'text' ),
	'keywords'   => array( esc_html__( 'quote', 'michelle' ), esc_html__( 'photo', 'michelle' ) ),
) );

// Block pattern content:

$image1 = get_theme_file_uri( 'assets/images/starter/16to9.jpg' );
$image2 = get_theme_file_uri( 'assets/images/starter/1to1.jpg' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image1 ); ?>","id":999991,"hasParallax":true,"dimRatio":80,"overlayColor":"palette-2","align":"full"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-palette-2-background-color has-background-dim has-parallax" style="background-image:url(<?php echo esc_url_raw( $image1 ); ?>)"><div class="wp-block-cover__inner-container"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"className":"screen-reader-text"} -->
<h2 class="screen-reader-text">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:quote {"className":"is-style-large has-palette-3-color"} -->
<blockquote class="wp-block-quote is-style-large has-palette-3-color"><p><em>Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate, sociis per ultricies dictum tincidunt class tempus mi, tristique ligula nostra natoque pretium consequat pellentesque.</em></p></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"id":999992,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url_raw( $image2 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999992"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"has-no-margin"} -->
<h3 class="has-no-margin">Jane Doe</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><em>Lorem ipsum dolor</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":68} -->
<div style="height:68px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
