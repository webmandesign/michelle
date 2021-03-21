<?php
/**
 * Starter content: Contact page.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Content;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_admin() ) {
	return;
}

$image = Starter::get_image_url( '16to9' );

?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading -->
<h2>Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="mailto:example@example.com">example@example.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="tel:+123900123456">+123 900 123 456</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>My Street 123<br>Supercity, 500 10<br>Awesomeland</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading -->
<h2>Lorem ipsum dolor</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form>
<p style="width: 48%; float: left;"><label for="field1"><!--?php echo esc_html_x( 'Your name', 'Theme starter content', 'michelle' ); ?--></label><input id="field1" style="width: 100%;" type="text"></p>
<p style="width: 48%; float: right;"><label for="field2"><!--?php echo esc_html_x( 'Your email', 'Theme starter content', 'michelle' ); ?--></label><input id="field2" style="width: 100%;" type="email"></p>
<p style="clear: both;"><label for="field3"><!--?php echo esc_html_x( 'Your message', 'Theme starter content', 'michelle' ); ?--></label><textarea id="field3" style="width: 100%;" rows="2"></textarea></p>
<p><small><strong><!--?php echo esc_html_x( 'This is only a dummy form placeholder. Use a plugin to add forms to your website.', 'Theme starter content', 'michelle' ); ?--></strong></small></p>
<p><input type="submit" value=" → "></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","hasParallax":true,"dimRatio":0,"minHeight":62,"minHeightUnit":"vh","className":"has-inner-shadow"} -->
<div class="wp-block-cover has-parallax has-inner-shadow" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","hasParallax":true,"dimRatio":0,"minHeight":62,"minHeightUnit":"vh","className":"has-inner-shadow"} -->
<div class="wp-block-cover has-parallax has-inner-shadow" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","hasParallax":true,"dimRatio":0,"minHeight":62,"minHeightUnit":"vh","className":"has-inner-shadow"} -->
<div class="wp-block-cover has-parallax has-inner-shadow" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
