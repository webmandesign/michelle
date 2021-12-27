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
	'title'      => _x( 'Features: Parallax', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'services', 'michelle' ), esc_html__( 'image', 'michelle' ) ),
) );

// Block pattern content:

$image = Starter::get_image_url( '16to9' );

?>

<!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"hasParallax":true,"dimRatio":90,"overlayColor":"palette-2","minHeight":62,"minHeightUnit":"vh"} -->
<div class="wp-block-cover has-background-dim-90 has-palette-2-background-color has-background-dim has-parallax" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Lorem ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"hasParallax":true,"dimRatio":90,"overlayColor":"palette-2","minHeight":62,"minHeightUnit":"vh"} -->
<div class="wp-block-cover has-background-dim-90 has-palette-2-background-color has-background-dim has-parallax" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Lorem ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"hasParallax":true,"dimRatio":90,"overlayColor":"palette-2","minHeight":62,"minHeightUnit":"vh"} -->
<div class="wp-block-cover has-background-dim-90 has-palette-2-background-color has-background-dim has-parallax" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Lorem ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
