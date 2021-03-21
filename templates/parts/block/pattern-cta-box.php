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
	'title'      => _x( 'Call to action: Boxed', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'buttons' ),
	'keywords'   => array( esc_html__( 'button', 'michelle' ) ),
) );

// Block pattern content:

?>

<!-- wp:columns {"verticalAlignment":"center","align":"wide","backgroundColor":"accent","textColor":"palette-3","className":"is-style-default"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center is-style-default has-palette-3-color has-accent-background-color has-text-color has-background"><!-- wp:column {"verticalAlignment":"center","width":"61.8%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:61.8%"><!-- wp:heading {"textColor":"palette-3","className":"screen-reader-text"} -->
<h2 class="screen-reader-text has-palette-3-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit ac, vitae aptent phasellus mauris tristique platea felis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"4%"} -->
<div class="wp-block-column" style="flex-basis:4%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"34.2%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:34.2%"><!-- wp:buttons {"className":"has-right-text-align"} -->
<div class="wp-block-buttons has-right-text-align"><!-- wp:button {"backgroundColor":"palette-1","textColor":"palette-2","width":100,"className":"has-large-font-size"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-large-font-size"><a class="wp-block-button__link has-palette-2-color has-palette-1-background-color has-text-color has-background" href="#0">Lorem →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
