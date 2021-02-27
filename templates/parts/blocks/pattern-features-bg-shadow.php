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
	'title'      => _x( 'Features: With background image and drop shadow', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
	'keywords'   => array( esc_html__( 'services', 'michelle' ) ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/3to4.jpg' );

?>

<!-- wp:columns {"align":"full","className":"is-style-no-gaps"} -->
<div class="wp-block-columns alignfull is-style-no-gaps"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"dimRatio":90,"overlayColor":"accent","minHeight":62,"minHeightUnit":"vh","contentPosition":"top left","className":"is-style-drop-shadow has-extra-large-padding"} -->
<div class="wp-block-cover has-background-dim-90 has-accent-background-color has-background-dim has-custom-content-position is-position-top-left is-style-drop-shadow has-extra-large-padding" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:heading -->
<h2>Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Write title…"} -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit litora, mus neque taciti porta class in cursus netus, semper urna faucibus per mollis habitasse aliquet.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Lorem Ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"dimRatio":90,"overlayColor":"accent","minHeight":62,"minHeightUnit":"vh","contentPosition":"top left","className":"is-style-drop-shadow has-extra-large-padding"} -->
<div class="wp-block-cover has-background-dim-90 has-accent-background-color has-background-dim has-custom-content-position is-position-top-left is-style-drop-shadow has-extra-large-padding" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:heading -->
<h2>Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Write title…"} -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit litora, mus neque taciti porta class in cursus netus, semper urna faucibus per mollis habitasse aliquet.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Lorem Ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"dimRatio":90,"overlayColor":"accent","minHeight":62,"minHeightUnit":"vh","contentPosition":"top left","className":"is-style-drop-shadow has-extra-large-padding"} -->
<div class="wp-block-cover has-background-dim-90 has-accent-background-color has-background-dim has-custom-content-position is-position-top-left is-style-drop-shadow has-extra-large-padding" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:heading -->
<h2>Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Write title…"} -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit litora, mus neque taciti porta class in cursus netus, semper urna faucibus per mollis habitasse aliquet.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Lorem Ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
