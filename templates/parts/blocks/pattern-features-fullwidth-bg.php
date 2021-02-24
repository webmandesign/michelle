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
	'title'      => _x( 'Features: With background image', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/16to9.jpg' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"dimRatio":80,"align":"full"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-background-dim" style="background-image:url(<?php echo esc_url_raw( $image ); ?>)"><div class="wp-block-cover__inner-container"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","className":"is-style-uppercase"} -->
<h2 class="has-text-align-center is-style-uppercase">Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing, elit montes rutrum feugiat dictumst, justo.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">Lorem Ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">Lorem Ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">Lorem Ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">Lorem Ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
