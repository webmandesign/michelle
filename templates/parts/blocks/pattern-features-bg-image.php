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
	'title'      => _x( 'Features: With background and image', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
	'keywords'   => array( esc_html__( 'services', 'michelle' ) ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/16to9.jpg' );

?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
<!-- wp:column {"className":"has-accent-background-color"} -->
<div class="wp-block-column has-accent-background-color"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none","className":"has-no-margin"} -->
<figure class="wp-block-image has-no-margin"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php echo esc_attr__( 'Image alt text', 'michelle' ); ?>" /></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"has-large-padding","textColor":"palette-3"} -->
<div class="wp-block-group has-large-padding has-palette-3-color has-text-color"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"has-no-margin-top","textColor":"palette-3"} -->
<h2 class="has-no-margin-top has-palette-3-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit integer, arcu vivamus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#0">Lorem ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"has-accent-background-color"} -->
<div class="wp-block-column has-accent-background-color"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none","className":"has-no-margin"} -->
<figure class="wp-block-image has-no-margin"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php echo esc_attr__( 'Image alt text', 'michelle' ); ?>" /></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"has-large-padding","textColor":"palette-3"} -->
<div class="wp-block-group has-large-padding has-palette-3-color has-text-color"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"has-no-margin-top","textColor":"palette-3"} -->
<h2 class="has-no-margin-top has-palette-3-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit integer, arcu vivamus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#0">Lorem ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"has-accent-background-color"} -->
<div class="wp-block-column has-accent-background-color"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none","className":"has-no-margin"} -->
<figure class="wp-block-image has-no-margin"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php echo esc_attr__( 'Image alt text', 'michelle' ); ?>" /></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"has-large-padding","textColor":"palette-3"} -->
<div class="wp-block-group has-large-padding has-palette-3-color has-text-color"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"has-no-margin-top","textColor":"palette-3"} -->
<h2 class="has-no-margin-top has-palette-3-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit integer, arcu vivamus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#0">Lorem ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
