<?php
/**
 * Block pattern setup file.
 *
 * Default pattern categories: buttons, columns, gallery, header, text.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.10
 */

namespace WebManDesign\Michelle\Content;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Add block pattern setup args.
Block_Patterns::add_pattern_args( __FILE__, array(
	'title'      => _x( 'Text with extra hierarchy', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns', 'text' ),
) );

// Block pattern content:

?>

<!-- wp:heading {"align":"wide","fontSize":"huge"} -->
<h2 class="alignwide has-huge-font-size">Lorem ipsum dolor sit amet consectetur adipiscing</h2>
<!-- /wp:heading -->

<!-- wp:separator {"align":"wide"} -->
<hr class="wp-block-separator alignwide"/>
<!-- /wp:separator -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"61.8%"} -->
<div class="wp-block-column" style="flex-basis:61.8%"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit commodo, sociosqu facilisi a libero nunc curae habitasse aenean, parturient dictum dictumst lacinia gravida ac odio. Lorem ipsum dolor sit amet consectetur adipiscing elit commodo, sociosqu facilisi a libero nunc curae habitasse aenean, parturient dictum dictumst.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"38.2%"} -->
<div class="wp-block-column" style="flex-basis:38.2%"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit commodo, sociosqu facilisi a libero nunc curae habitasse aenean, parturient dictum dictumst lacinia.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit commodo, sociosqu facilisi a libero nunc curae habitasse aenean, parturient dictum dictumst lacinia.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
