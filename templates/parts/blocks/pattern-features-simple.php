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
	'title'      => _x( 'Features', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
) );

// Block pattern content:

?>

<!-- wp:group {"align":"full","style":{"color":{"background":"#eeeeee"}}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#eeeeee"><div class="wp-block-group__inner-container"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","className":"is-style-uppercase"} -->
<h2 class="has-text-align-center is-style-uppercase">Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing, elit montes rutrum feugiat dictumst, justo.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">Lorem Ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Lorem ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">Lorem Ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Lorem ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">Lorem Ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Lorem ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
