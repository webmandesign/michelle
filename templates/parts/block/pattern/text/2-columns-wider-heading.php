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
	'title'         => _x( 'Text in 2 columns with wider heading', 'Block pattern title.', 'michelle' ),
	'viewportWidth' => 800,
) );

// Block pattern content:

?>

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"fontSize":"extra-large"} -->
<h2 class="has-extra-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit nisi, ad urna curabitur.</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet elit consectetur adipiscing nisi, ad urna curabitur ullamcorper purus cum est odio, phasellus diam fames volutpat orci.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet elit consectetur adipiscing nisi, ad urna curabitur ullamcorper purus cum est odio, phasellus diam fames volutpat orci.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
