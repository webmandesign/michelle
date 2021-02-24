<?php
/**
 * Block pattern setup file.
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
	'title'         => _x( 'Call to action', 'Block pattern title.', 'michelle' ),
	'categories'    => array( 'buttons' ),
) );

?>

<!-- wp:group {"align":"full","className":"is-style-default","backgroundColor":"palette-1"} -->
<div class="wp-block-group alignfull is-style-default has-palette-1-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"61.8%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:61.8%"><!-- wp:heading {"className":"is-style-uppercase","fontSize":"extra-large"} -->
<h2 class="is-style-uppercase has-extra-large-font-size"><strong>Lorem ipsum dolor sit?</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"palette-2","fontSize":"large"} -->
<p class="has-palette-2-color has-text-color has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit ac, vitae aptent phasellus mauris tristique platea felis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"38.2%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38.2%"><!-- wp:buttons {"className":"has-right-text-align"} -->
<div class="wp-block-buttons has-right-text-align"><!-- wp:button {"backgroundColor":"palette-2","textColor":"palette-3","className":"has-large-font-size"} -->
<div class="wp-block-button has-large-font-size"><a class="wp-block-button__link has-palette-3-color has-palette-2-background-color has-text-color has-background" href="#0">Lorem →</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"palette-2","className":"has-large-font-size is-style-outline"} -->
<div class="wp-block-button has-large-font-size is-style-outline"><a class="wp-block-button__link has-palette-2-color has-text-color" href="#0">Ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":68} -->
<div style="height:68px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
