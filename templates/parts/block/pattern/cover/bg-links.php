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
	'title'      => _x( 'Intro: With page links and background', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'title', 'michelle' ), esc_html__( 'heading', 'michelle' ), 'h1' ),
) );

// Block pattern content:

$image = Starter::get_image_url( '16to9' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"dimRatio":90,"overlayColor":"palette-2","minHeight":100,"minHeightUnit":"vh","align":"full","className":"is-style-no-padding"} -->
<div class="wp-block-cover alignfull has-background-dim-90 has-palette-2-background-color has-background-dim is-style-no-padding" style="min-height:100vh"><img class="wp-block-cover__image-background wp-image-999999" alt="" src="<?php echo esc_url_raw( $image ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"className":"has-15vmax-min-height"} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer has-15vmax-min-height"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":1} -->
<h1>Lorem ipsum dolor sit amet</h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:paragraph {"textColor":"palette-3","fontSize":"extra-large"} -->
<p class="has-palette-3-color has-text-color has-extra-large-font-size"><a href="#0">Lorem ipsum</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"palette-3","fontSize":"extra-large"} -->
<p class="has-palette-3-color has-text-color has-extra-large-font-size"><a href="#0">Dolor sit amet</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"palette-3","fontSize":"extra-large"} -->
<p class="has-palette-3-color has-text-color has-extra-large-font-size"><a href="#0">Consectetur</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"palette-3","fontSize":"extra-large"} -->
<p class="has-palette-3-color has-text-color has-extra-large-font-size"><a href="#0">Adipiscing</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
