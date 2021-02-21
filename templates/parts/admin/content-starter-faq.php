<?php
/**
 * Starter content: FAQ page.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_admin() ) {
	return;
}

$image = get_theme_file_uri( 'assets/images/starter/3to2.jpg' );

?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"className":"h4"} -->
<h2 class="h4"><strong>Lorem ipsum dolor sit amet adipiscing?</strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"dropCap":true} -->
<p class="has-drop-cap">Lorem ipsum dolor sit amet consectetur adipiscing elit vehicula ad morbi nunc viverra, aenean duis nascetur at lacus conubia tincidunt curae volutpat pellentesque orci.  Semper nullam pellentesque curae quisque massa aptent suspendisse. Auctor aliquet accumsan conubia, morbi dui. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"className":"h4"} -->
<h2 class="h4"><strong>Natoque euismod netus eu tincidunt?</strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"dropCap":true} -->
<p class="has-drop-cap">Dolor sit amet consectetur adipiscing elit vehicula ad morbi nunc viverra, aenean duis nascetur at lacus conubia tincidunt curae volutpat pellentesque orci.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit fames, placerat maecenas gravida natoque euismod netus eu tincidunt, faucibus ante massa potenti pretium iaculis tristique.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"className":"h4"} -->
<h2 class="h4"><strong>Dolor sit amet adipiscing?</strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"dropCap":true} -->
<p class="has-drop-cap">Sit amet consectetur adipiscing elit primis egestas, semper nullam pellentesque curae quisque massa aptent suspendisse. Auctor aliquet accumsan conubia, morbi dui ad morbi nunc viverra, aenean duis nascetur at lacus conubia tincidunt curae volutpat pellentesque orci.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","hasParallax":true,"dimRatio":80,"overlayColor":"accent","minHeight":62,"minHeightUnit":"vh","align":"full","className":"is-style-default"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-accent-background-color has-background-dim has-parallax is-style-default" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textColor":"palette-3"} -->
<h2 class="has-palette-3-color has-text-color">Lorem ipsum dolor?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"palette-3","fontSize":"normal"} -->
<p class="has-palette-3-color has-text-color has-normal-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit dis varius id per, gravida dictum condimentum vestibulum commodo facilisis felis ut sed.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link" href="#0">Lorem ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
