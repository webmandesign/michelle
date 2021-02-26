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
	'title'      => _x( 'Features: Parallax', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
	'keywords'   => array( esc_html__( 'services', 'michelle' ) ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/16to9.jpg' );

?>

<!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"hasParallax":true,"dimRatio":80,"overlayColor":"palette-2","minHeight":62,"minHeightUnit":"vh","className":"has-inner-shadow"} -->
<div class="wp-block-cover has-background-dim-80 has-palette-2-background-color has-background-dim has-parallax has-inner-shadow" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
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
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"hasParallax":true,"dimRatio":80,"overlayColor":"palette-2","minHeight":62,"minHeightUnit":"vh","className":"has-inner-shadow"} -->
<div class="wp-block-cover has-background-dim-80 has-palette-2-background-color has-background-dim has-parallax has-inner-shadow" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
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
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"hasParallax":true,"dimRatio":80,"overlayColor":"palette-2","minHeight":62,"minHeightUnit":"vh","className":"has-inner-shadow"} -->
<div class="wp-block-cover has-background-dim-80 has-palette-2-background-color has-background-dim has-parallax has-inner-shadow" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
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