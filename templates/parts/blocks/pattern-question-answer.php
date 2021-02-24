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
	'title'      => _x( 'Question and answer', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'text' ),
) );

// Block pattern content:

?>
<!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull"><div class="wp-block-group__inner-container">

<!-- wp:columns {"align":"wide","className":"has-no-margin-bottom"} -->
<div class="wp-block-columns alignwide has-no-margin-bottom"><!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:heading -->
<h2>1. Lorem ipsum dolor sit amet consectetur adipiscing elit ridiculus lacinia?</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit ridiculus, lacinia laoreet convallis taciti integer augue cum conubia, purus donec dui bibendum parturient varius et. Lorem ipsum dolor sit amet consectetur adipiscing elit ridiculus, lacinia laoreet convallis taciti integer augue cum conubia, purus donec dui bibendum parturient varius et.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

</div></div>
<!-- /wp:group -->
