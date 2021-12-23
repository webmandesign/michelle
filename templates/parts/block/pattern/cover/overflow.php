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
	'title'      => _x( 'Intro: Overflown heading', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'title', 'michelle' ), esc_html__( 'heading', 'michelle' ), 'h1' ),
) );

// Block pattern content:

$image = Starter::get_image_url( '3to4' );

?>

<!-- wp:group {"align":"full","backgroundColor":"accent","textColor":"palette-3","className":"is-style-no-padding"} -->
<div class="wp-block-group alignfull is-style-no-padding has-palette-3-color has-accent-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:spacer {"className":"has-20vmax-min-height"} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer has-20vmax-min-height"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"dimRatio":40,"overlayColor":"accent","minHeight":70,"minHeightUnit":"vh","contentPosition":"bottom center","align":"wide","className":"is-style-scale-image","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-cover alignwide has-background-dim-40 has-accent-background-color has-background-dim has-custom-content-position is-position-bottom-center is-style-scale-image" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:70vh"><img class="wp-block-cover__image-background wp-image-999999" alt="" src="<?php echo esc_url_raw( $image ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","className":"is-style-text-shadow-dark"} -->
<h1 class="alignwide has-text-align-center is-style-text-shadow-dark"><strong>Lorem ipsum dolor sit amet consectetur adipiscing elit rutrum lorem ipsum</strong></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"contentJustification":"center","className":"is-style-large"} -->
<div class="wp-block-buttons is-content-justification-center is-style-large"><!-- wp:button {"backgroundColor":"palette-1","textColor":"palette-2"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-palette-2-color has-palette-1-background-color has-text-color has-background" href="#0">Lorem ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div></div>
<!-- /wp:group -->
