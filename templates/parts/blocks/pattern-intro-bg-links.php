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
	'title'      => _x( 'Intro: With page links and background', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'header' ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/16to9.jpg' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"dimRatio":80,"overlayColor":"palette-2","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-palette-2-background-color has-background-dim" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":1} -->
<h1>Lorem ipsum dolor sit amet</h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:paragraph {"textColor":"palette-3","fontSize":"extra-large"} -->
<p class="has-palette-3-color has-text-color has-extra-large-font-size"><a href="#0">Lorem ipsum</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"palette-3","fontSize":"extra-large"} -->
<p class="has-palette-3-color has-text-color has-extra-large-font-size"><a href="#0">Dolor sit amet</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"palette-3","fontSize":"extra-large"} -->
<p class="has-palette-3-color has-text-color has-extra-large-font-size"><a href="#0">Consectetur</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"palette-3","fontSize":"extra-large"} -->
<p class="has-palette-3-color has-text-color has-extra-large-font-size"><a href="#0">Adipiscing</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
