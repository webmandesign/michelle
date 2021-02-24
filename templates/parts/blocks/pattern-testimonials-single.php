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
	'title'      => _x( 'Testimonial', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'text' ),
) );

// Block pattern content:

?>

<!-- wp:heading {"align":"wide","className":"is-style-uppercase","fontSize":"normal"} -->
<h2 class="alignwide is-style-uppercase has-normal-font-size"><strong>Lorem Ipsum</strong></h2>
<!-- /wp:heading -->

<!-- wp:pullquote {"align":"wide","className":"is-style-simple"} -->
<figure class="wp-block-pullquote alignwide is-style-simple"><blockquote><p>Lorem ipsum dolor sit amet consectetur adipiscing elit quisque, ac hac ullamcorper class rutrum condimentum molestie mi, et suspendisse ante pulvinar praesent rhoncus taciti. Lorem ipsum dolor sit amet consectetur adipiscing elit quisque, ac hac ullamcorper class rutrum condimentum molestie mi, et suspendisse ante pulvinar praesent rhoncus taciti.</p><cite>John Doe</cite></blockquote></figure>
<!-- /wp:pullquote -->
