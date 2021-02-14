<?php
/**
 * Starter content: Contact page.
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

?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":50} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading -->
<h2>Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:jetpack/contact-info -->
<div class="wp-block-jetpack-contact-info"><!-- wp:jetpack/email {"email":"example@example.com"} -->
<div class="wp-block-jetpack-email"><a href="mailto:example@example.com">example@example.com</a></div>
<!-- /wp:jetpack/email -->

<!-- wp:jetpack/phone {"phone":"+123 900 123 456"} -->
<div class="wp-block-jetpack-phone"><a href="tel:+123900123456">+123 900 123 456</a></div>
<!-- /wp:jetpack/phone -->

<!-- wp:jetpack/address {"address":"My Street 123","city":"Supercity","postal":"500 10","country":"Ireland"} -->
<div class="wp-block-jetpack-address"><div class="jetpack-address__address jetpack-address__address1">My Street 123</div><div><span class="jetpack-address__city">Supercity</span>, <span class="jetpack-address__region"></span> <span class="jetpack-address__postal">500 10</span></div><div class="jetpack-address__country">Ireland</div></div>
<!-- /wp:jetpack/address --></div>
<!-- /wp:jetpack/contact-info --></div>
<!-- /wp:column -->

<!-- wp:column {"width":50} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading -->
<h2>Lorem ipsum dolor</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form>
<p style="width: 48%; float: left;"><label for="field1"><?php echo esc_html_x( 'Your name', 'Theme starter content', 'michelle' ); ?></label><input id="field1" style="width: 100%;" type="text"></p>
<p style="width: 48%; float: right;"><label for="field2"><?php echo esc_html_x( 'Your email', 'Theme starter content', 'michelle' ); ?></label><input id="field2" style="width: 100%;" type="email"></p>
<p style="clear: both;"><label for="field3"><?php echo esc_html_x( 'Your message', 'Theme starter content', 'michelle' ); ?></label><textarea id="field3" style="width: 100%;" rows="2"></textarea></p>
<p><small><strong><?php echo esc_html_x( 'This is only a dummy form placeholder. Use a plugin to add forms to your website.', 'Theme starter content', 'michelle' ); ?></strong></small></p>
<p><input type="submit" value="&emsp;&rarr;&emsp;"></p>
</form>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
