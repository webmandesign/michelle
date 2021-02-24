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
	'title'      => _x( 'Contact: With quote', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
) );

// Block pattern content:

?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:heading -->
<h2>Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum 1234<br>Dolor Sit, 900 00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="tel:+321900123456">+321 900 123 456</a><br><a href="mailto:lorem@ipsum.dolor">lorem@ipsum.dolor</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:quote {"className":"is-style-large"} -->
<blockquote class="wp-block-quote is-style-large"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit litora, massa natoque.</p><cite>John Doe</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit litora, massa natoque nunc urna class mus aenean interdum, sapien risus lacus accumsan habitasse ornare elementum.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
