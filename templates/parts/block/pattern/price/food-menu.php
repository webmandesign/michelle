<?php
/**
 * Block pattern setup file.
 *
 * Default pattern categories: buttons, columns, gallery, header, text.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.10
 * @version  1.3.0
 */

namespace WebManDesign\Michelle\Content;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Add block pattern setup args.
Block_Patterns::add_pattern_args( __FILE__, array(
	'title'      => _x( 'Food menu', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'price', 'michelle' ) ),
) );

// Block pattern content:

?>

<!-- wp:heading {"textAlign":"center","className":"is-style-default"} -->
<h2 class="has-text-align-center is-style-default">Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><em>Lorem ipsum dolor sit amet consectetur.</em><br><em>Adipiscing elit habitasse.</em></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":80} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"className":"is-style-no-margin-vertical","fontSize":"large"} -->
<h2 class="is-style-no-margin-vertical has-large-font-size"><strong>Lorem ipsum dolor</strong></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":15} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"className":"is-style-no-margin-vertical"} -->
<p class="is-style-no-margin-vertical"><em>Lorem ipsum dolor sit amet elit placerat, vivamus tristique felis sollicitudin viverra.</em></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":15} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"palette-2"} -->
<p class="has-palette-2-color has-text-color"><strong>$19</strong></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"className":"is-style-no-margin-vertical","fontSize":"large"} -->
<h2 class="is-style-no-margin-vertical has-large-font-size"><strong>Lorem ipsum dolor</strong></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":15} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"className":"is-style-no-margin-vertical"} -->
<p class="is-style-no-margin-vertical"><em>Lorem ipsum dolor sit amet elit placerat, vivamus tristique felis sollicitudin viverra.</em></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":15} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"palette-2"} -->
<p class="has-palette-2-color has-text-color"><strong>$19</strong></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"className":"is-style-no-margin-vertical","fontSize":"large"} -->
<h2 class="is-style-no-margin-vertical has-large-font-size"><strong>Lorem ipsum dolor</strong></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":15} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"className":"is-style-no-margin-vertical"} -->
<p class="is-style-no-margin-vertical"><em>Lorem ipsum dolor sit amet elit placerat, vivamus tristique felis sollicitudin viverra.</em></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":15} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"palette-2"} -->
<p class="has-palette-2-color has-text-color"><strong>$19</strong></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"className":"is-style-no-margin-vertical","fontSize":"large"} -->
<h2 class="is-style-no-margin-vertical has-large-font-size"><strong>Lorem ipsum dolor</strong></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":15} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"className":"is-style-no-margin-vertical"} -->
<p class="is-style-no-margin-vertical"><em>Lorem ipsum dolor sit amet elit placerat, vivamus tristique felis sollicitudin viverra.</em></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":15} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"palette-2"} -->
<p class="has-palette-2-color has-text-color"><strong>$19</strong></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"className":"is-style-no-margin-vertical","fontSize":"large"} -->
<h2 class="is-style-no-margin-vertical has-large-font-size"><strong>Lorem ipsum dolor</strong></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":15} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"className":"is-style-no-margin-vertical"} -->
<p class="is-style-no-margin-vertical"><em>Lorem ipsum dolor sit amet elit placerat, vivamus tristique felis sollicitudin viverra.</em></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":15} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"palette-2"} -->
<p class="has-palette-2-color has-text-color"><strong>$19</strong></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group -->
<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"className":"is-style-no-margin-vertical","fontSize":"large"} -->
<h2 class="is-style-no-margin-vertical has-large-font-size"><strong>Lorem ipsum dolor</strong></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":15} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"className":"is-style-no-margin-vertical"} -->
<p class="is-style-no-margin-vertical"><em>Lorem ipsum dolor sit amet elit placerat, vivamus tristique felis sollicitudin viverra.</em></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":15} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"palette-2"} -->
<p class="has-palette-2-color has-text-color"><strong>$19</strong></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
