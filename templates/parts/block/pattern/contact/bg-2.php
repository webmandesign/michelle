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
	'title'      => _x( 'Contact: Columns with background', 'Block pattern title.', 'michelle' ),
) );

// Block pattern content:

?>

<!-- wp:group {"align":"full","backgroundColor":"palette-2","textColor":"palette-3","className":"is-style-no-padding"} -->
<div class="wp-block-group alignfull is-style-no-padding has-palette-3-color has-palette-2-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","textColor":"palette-3"} -->
<h2 class="has-text-align-center has-palette-3-color has-text-color">Lorem?</h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-zigzag-wide"} -->
<hr class="wp-block-separator is-style-zigzag-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Lorem ipsum 1234<br>Dolor Sit, 900 00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","textColor":"palette-3"} -->
<h2 class="has-text-align-center has-palette-3-color has-text-color">Ipsum?</h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-zigzag-wide"} -->
<hr class="wp-block-separator is-style-zigzag-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Mon - Fri ... 10:00 - 22:00<br>Sat - Sun ... 12:00 - 02:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","textColor":"palette-3"} -->
<h2 class="has-text-align-center has-palette-3-color has-text-color">Dolor?</h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-zigzag-wide"} -->
<hr class="wp-block-separator is-style-zigzag-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","className":"is-style-no-margin-vertical"} -->
<p class="has-text-align-center is-style-no-margin-vertical">Phone:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1"}},"fontSize":"extra-large"} -->
<p class="has-text-align-center has-extra-large-font-size" style="line-height:1"><a href="tel:090123456">0900<strong> 123 456</strong></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
