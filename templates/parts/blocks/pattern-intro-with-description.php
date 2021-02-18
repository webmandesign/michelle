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
	'title'      => _x( 'Page title with description', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'header' ),
) );

// Block pattern content:

?>

<!-- wp:columns {"verticalAlignment":null,"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":1,"className":"h1"} -->
<h1 class="h1">Lorem ipsum dolor</h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing, elit tortor ut lacinia auctor, varius potenti ad vehicula interdum. Aenean nullam luctus natoque sagittis, congue himenaeos.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
