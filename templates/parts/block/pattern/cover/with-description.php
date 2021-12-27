<?php
/**
 * Block pattern setup file.
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
	'title'      => _x( 'Intro: Simple, with description', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'title', 'michelle' ), esc_html__( 'heading', 'michelle' ), 'h1' ),
) );

// Block pattern content:

?>

<!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":1} -->
<h1>Lorem ipsum dolor</h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing, elit tortor ut lacinia auctor, varius potenti ad vehicula interdum. Aenean nullam luctus natoque sagittis, congue himenaeos.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
