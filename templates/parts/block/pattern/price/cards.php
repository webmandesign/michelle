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
	'title'      => _x( 'Cards', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'services', 'michelle' ), esc_html__( 'features', 'michelle' ), esc_html__( 'price', 'michelle' ), esc_html__( 'food menu', 'michelle' ) ),
) );

// Block pattern content:

?>

<!-- wp:separator {"align":"wide","className":"is-style-zigzag"} -->
<hr class="wp-block-separator alignwide is-style-zigzag"/>
<!-- /wp:separator -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"palette-2","textColor":"palette-3"} -->
<div class="wp-block-group has-palette-3-color has-palette-2-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading {"level":3,"textColor":"palette-3","fontSize":"large"} -->
<h3 class="has-palette-3-color has-text-color has-large-font-size"><strong>Lorem Ipsum ... $8</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"palette-2","textColor":"palette-3"} -->
<div class="wp-block-group has-palette-3-color has-palette-2-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading {"level":3,"textColor":"palette-3","fontSize":"large"} -->
<h3 class="has-palette-3-color has-text-color has-large-font-size"><strong>Lorem Ipsum ... $8</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#f3f5f7"}},"textColor":"palette-2"} -->
<div class="wp-block-group has-palette-2-color has-text-color has-background" style="background-color:#f3f5f7"><div class="wp-block-group__inner-container"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><strong>Lorem Ipsum ... $8</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"align":"wide","className":"is-style-zigzag"} -->
<hr class="wp-block-separator alignwide is-style-zigzag"/>
<!-- /wp:separator -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#f3f5f7"}},"textColor":"palette-2"} -->
<div class="wp-block-group has-palette-2-color has-text-color has-background" style="background-color:#f3f5f7"><div class="wp-block-group__inner-container"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><strong>Lorem Ipsum ... $8</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#f3f5f7"}},"textColor":"palette-2"} -->
<div class="wp-block-group has-palette-2-color has-text-color has-background" style="background-color:#f3f5f7"><div class="wp-block-group__inner-container"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><strong>Lorem Ipsum ... $8</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#f3f5f7"}},"textColor":"palette-2"} -->
<div class="wp-block-group has-palette-2-color has-text-color has-background" style="background-color:#f3f5f7"><div class="wp-block-group__inner-container"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><strong>Lorem Ipsum ... $8</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"align":"wide","className":"is-style-zigzag"} -->
<hr class="wp-block-separator alignwide is-style-zigzag"/>
<!-- /wp:separator -->
