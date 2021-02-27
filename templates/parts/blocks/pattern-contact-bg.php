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
	'title'      => _x( 'Contact: With background image', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'text' ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/16to9.jpg' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"dimRatio":80,"overlayColor":"palette-2","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-palette-2-background-color has-background-dim" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:heading {"className":"is-style-uppercase","fontSize":"normal"} -->
<h2 class="is-style-uppercase has-normal-font-size"><strong>Lorem ipsum</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"palette-3","fontSize":"extra-large"} -->
<p class="has-palette-3-color has-text-color has-extra-large-font-size"><a href="mailto:lorem@ipsum.dolor">lorem@ipsum.dolor</a><br><a href="tel:+321900123456">+321 900 123 456</a></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"is-style-uppercase","fontSize":"normal"} -->
<h2 class="is-style-uppercase has-normal-font-size"><strong>Lorem ipsum</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"palette-3","fontSize":"extra-large"} -->
<p class="has-palette-3-color has-text-color has-extra-large-font-size"><a href="#0">Facebook</a><br><a href="#0">Instagram</a><br><a href="#0">YouTube</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":68} -->
<div style="height:68px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
