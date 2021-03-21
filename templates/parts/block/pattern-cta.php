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
	'title'      => _x( 'Call to action', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'buttons' ),
	'keywords'   => array( esc_html__( 'button', 'michelle' ) ),
) );

// Block pattern content:

?>

<!-- wp:group {"align":"full","backgroundColor":"palette-1","className":"is-style-no-padding"} -->
<div class="wp-block-group alignfull is-style-no-padding has-palette-1-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:heading {"className":"is-style-uppercase","fontSize":"extra-large"} -->
<h2 class="is-style-uppercase has-extra-large-font-size"><strong>Lorem ipsum dolor sit?</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"palette-2","fontSize":"large"} -->
<p class="has-palette-2-color has-text-color has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit ac, vitae aptent phasellus mauris tristique platea felis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:buttons {"contentJustification":"left","className":"is-style-large"} -->
<div class="wp-block-buttons is-content-justification-left is-style-large"><!-- wp:button {"backgroundColor":"palette-2","textColor":"palette-3","width":50} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-palette-3-color has-palette-2-background-color has-text-color has-background" href="#0">Lorem →</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"palette-2","width":50,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-palette-2-color has-text-color" href="#0">Ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
