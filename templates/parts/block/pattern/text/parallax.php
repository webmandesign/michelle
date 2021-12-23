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
	'title'      => _x( 'Text with parallax background', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'image', 'michelle' ) ),
) );

// Block pattern content:

$image = Starter::get_image_url( '16to9' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"hasParallax":true,"dimRatio":0,"overlayColor":"palette-2","contentPosition":"center center","align":"full","className":"is-style-no-margin-vertical","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-cover alignfull has-palette-2-background-color has-parallax is-style-no-margin-vertical" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;background-image:url(<?php echo esc_url_raw( $image ); ?>)"><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide","className":"is-style-no-gaps"} -->
<div class="wp-block-columns alignwide is-style-no-gaps"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"overlayColor":"palette-2","minHeight":100,"minHeightUnit":"vh","contentPosition":"center center"} -->
<div class="wp-block-cover has-palette-2-background-color has-background-dim" style="min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textColor":"palette-3"} -->
<h2 class="has-palette-3-color has-text-color">Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit eleifend, cum nibh molestie non dis auctor.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"fontSize":"large"} -->
<ul class="has-large-font-size"><li>Lorem ipsum dolor</li><li>Sit amet consectetur</li><li>Adipiscing, elit tortor</li><li>Ut lacinia auctor, varius</li></ul>
<!-- /wp:list --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
