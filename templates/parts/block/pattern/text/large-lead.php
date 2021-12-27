<?php
/**
 * Block pattern setup file.
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
	'title'      => _x( 'Text with large subheading', 'Block pattern title.', 'michelle' ),
) );

// Block pattern content:

?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"className":"is-style-no-margin-vertical","fontSize":"normal"} -->
<h2 class="is-style-no-margin-vertical has-normal-font-size">LOREM IPSUM</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.25"}},"textColor":"palette-2","fontSize":"extra-large"} -->
<p class="has-palette-2-color has-text-color has-extra-large-font-size" style="line-height:1.25">Lorem ipsum dolor sit amet adipiscing elit commodo, sociosqu facilisi a libero nunc curae aenean.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate, metus odio mattis praesent posuere eros aenean proin, suscipit aliquet ultrices gravida taciti phasellus dapibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
