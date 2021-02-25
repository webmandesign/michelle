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
	'title'      => _x( 'Call to action: With background', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'buttons' ),
	'keywords'   => array( esc_html__( 'button', 'michelle' ) ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/16to9.jpg' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"dimRatio":80,"overlayColor":"palette-2","minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom center","align":"full"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-palette-2-background-color has-background-dim has-custom-content-position is-position-bottom-center" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"className":"has-30-percent-screen-min-height"} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer has-30-percent-screen-min-height"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"className":"is-style-default","textColor":"palette-3","fontSize":"huge"} -->
<h2 class="is-style-default has-palette-3-color has-text-color has-huge-font-size">Lorem ipsum dolor sit amet fusce libero</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, accumsan sociosqu dapibus sollicitudin fusce libero. Fringilla maecenas etiam tristique massa cubilia, velit netus feugiat bibendum.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link" href="#0">Lorem →</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#0">Lorem →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":68} -->
<div style="height:68px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
