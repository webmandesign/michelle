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
	'title'      => _x( 'Call to action: Simple', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'button', 'michelle' ) ),
) );

// Block pattern content:

?>

<!-- wp:separator {"align":"wide"} -->
<hr class="wp-block-separator alignwide"/>
<!-- /wp:separator -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"38.2%"} -->
<div class="wp-block-column" style="flex-basis:38.2%"><!-- wp:heading -->
<h2>Lorem Ipsum</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"61.8%"} -->
<div class="wp-block-column" style="flex-basis:61.8%"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit commodo, facilisi a libero nunc curae habitasse aenean, parturient dictum dictumst lacinia gravida ac odio habitasse.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"is-style-large"} -->
<div class="wp-block-buttons is-style-large"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Lorem Ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
