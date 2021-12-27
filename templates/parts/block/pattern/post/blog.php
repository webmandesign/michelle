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
	'title'      => _x( 'Blog', 'Block pattern title.', 'michelle' ),
) );

// Block pattern content:

?>

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Lorem ipsum dolor sit amet consectetur, adipiscing elit quam est, volutpat maecenas lacus.</p>
<!-- /wp:paragraph -->

<!-- wp:latest-posts {"postsToShow":3,"displayPostContent":true,"excerptLength":20,"displayPostDate":true,"postLayout":"grid","displayFeaturedImage":true,"align":"wide"} /-->
