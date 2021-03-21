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
	'title'      => _x( 'Call to action: Centered', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'buttons' ),
	'keywords'   => array( esc_html__( 'button', 'michelle' ) ),
) );

// Block pattern content:

?>

<!-- wp:group {"align":"full","backgroundColor":"palette-1","textColor":"palette-2"} -->
<div class="wp-block-group alignfull has-palette-2-color has-palette-1-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","className":"is-style-default","textColor":"palette-2"} -->
<h2 class="has-text-align-center is-style-default has-palette-2-color has-text-color"><strong>Lorem Ipsum Dolor</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit euismod tristique aliquet nisl torquent.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"backgroundColor":"palette-2","textColor":"palette-3","className":"has-large-font-size"} -->
<div class="wp-block-button has-large-font-size"><a class="wp-block-button__link has-palette-3-color has-palette-2-background-color has-text-color has-background" href="#0">Lorem Ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
