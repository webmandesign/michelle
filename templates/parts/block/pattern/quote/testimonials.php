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
	'title'      => _x( 'Testimonials', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'quote', 'michelle' ) ),
) );

// Block pattern content:

?>

<!-- wp:group {"align":"full","backgroundColor":"palette-1","className":"is-style-no-padding"} -->
<div class="wp-block-group alignfull is-style-no-padding has-palette-1-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"align":"wide"} -->
<h2 class="alignwide">Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote -->
<blockquote class="wp-block-quote"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit mattis, vitae hendrerit aliquam senectus erat cubilia viverra.</p><cite>Lorem Ipsum</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote -->
<blockquote class="wp-block-quote"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit mattis, vitae hendrerit aliquam senectus erat cubilia viverra.</p><cite>Lorem Ipsum</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
