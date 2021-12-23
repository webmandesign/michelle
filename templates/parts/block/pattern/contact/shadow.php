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
	'title'      => _x( 'Contact: With drop shadow', 'Block pattern title.', 'michelle' ),
) );

// Block pattern content:

?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"","className":"is-style-drop-shadow"} -->
<div class="wp-block-column is-style-drop-shadow"><!-- wp:heading {"textAlign":"center","className":"is-style-uppercase","fontSize":"normal"} -->
<h2 class="has-text-align-center is-style-uppercase has-normal-font-size"><strong>Lorem Ipsum</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="tel:+321900123456">+321 900 123 456</a><br><a href="mailto:lorem@ipsum.dolor">lorem@ipsum.dolor</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","className":"is-style-drop-shadow"} -->
<div class="wp-block-column is-style-drop-shadow"><!-- wp:heading {"textAlign":"center","className":"is-style-uppercase","fontSize":"normal"} -->
<h2 class="has-text-align-center is-style-uppercase has-normal-font-size"><strong>Lorem Ipsum</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum 1234<br>Dolor Sit, 900 00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","className":"is-style-drop-shadow"} -->
<div class="wp-block-column is-style-drop-shadow"><!-- wp:heading {"textAlign":"center","className":"is-style-uppercase","fontSize":"normal"} -->
<h2 class="has-text-align-center is-style-uppercase has-normal-font-size"><strong>Lorem Ipsum</strong></h2>
<!-- /wp:heading -->

<!-- wp:social-links {"size":"has-normal-icon-size","align":"center"} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size"><!-- wp:social-link {"url":"#0","service":"facebook"} /-->

<!-- wp:social-link {"url":"#0","service":"instagram"} /-->

<!-- wp:social-link {"url":"#0","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
