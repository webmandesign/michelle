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
	'title'      => _x( 'Features: Center aligned with icon 1', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
	'keywords'   => array( esc_html__( 'services', 'michelle' ), esc_html__( 'price', 'michelle' ) ),
) );

// Block pattern content:

$image = Starter::get_image_url( 'icon' );

?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"className":"has-palette-1-background-color has-palette-2-color has-center-text-align has-large-padding"} -->
<div class="wp-block-column has-palette-1-background-color has-palette-2-color has-center-text-align has-large-padding"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"textColor":"palette-2","className":"is-style-no-margin-vertical"} -->
<h2 class="is-style-no-margin-vertical has-palette-2-color has-text-color">Lorem Sit</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><em>Dolor amet elit</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"huge"} -->
<p class="has-huge-font-size" style="line-height:1"><strong>19</strong>$</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit integer, arcu vivamus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"contentJustification":"center"} -->
<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#0">Lorem ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"has-palette-1-background-color has-palette-2-color has-center-text-align has-large-padding"} -->
<div class="wp-block-column has-palette-1-background-color has-palette-2-color has-center-text-align has-large-padding"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"textColor":"palette-2","className":"is-style-no-margin-vertical"} -->
<h2 class="is-style-no-margin-vertical has-palette-2-color has-text-color">Lorem Sit</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><em>Dolor amet elit</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"huge"} -->
<p class="has-huge-font-size" style="line-height:1"><strong>29</strong>$</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit integer, arcu vivamus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"contentJustification":"center"} -->
<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#0">Lorem ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"has-palette-1-background-color has-palette-2-color has-center-text-align has-large-padding"} -->
<div class="wp-block-column has-palette-1-background-color has-palette-2-color has-center-text-align has-large-padding"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"textColor":"palette-2","className":"is-style-no-margin-vertical"} -->
<h2 class="is-style-no-margin-vertical has-palette-2-color has-text-color">Lorem Sit</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><em>Dolor amet elit</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"huge"} -->
<p class="has-huge-font-size" style="line-height:1"><strong>39</strong>$</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit integer, arcu vivamus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"contentJustification":"center"} -->
<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#0">Lorem ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
