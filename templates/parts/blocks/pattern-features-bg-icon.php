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
	'title'      => _x( 'Features: Center aligned with icon', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/icon.png' );

?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"className":"has-palette-1-background-color has-palette-2-color has-center-text-align has-large-padding"} -->
<div class="wp-block-column has-palette-1-background-color has-palette-2-color has-center-text-align has-large-padding"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php echo esc_attr__( 'Image alt text', 'michelle' ); ?>" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"className":"has-no-margin-top","textColor":"palette-2"} -->
<h2 class="has-no-margin-top has-palette-2-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit integer, arcu vivamus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#0">Lorem ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"has-palette-1-background-color has-palette-2-color has-center-text-align has-large-padding"} -->
<div class="wp-block-column has-palette-1-background-color has-palette-2-color has-center-text-align has-large-padding"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php echo esc_attr__( 'Image alt text', 'michelle' ); ?>" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"className":"has-no-margin-top","textColor":"palette-2"} -->
<h2 class="has-no-margin-top has-palette-2-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit integer, arcu vivamus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#0">Lorem ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"has-palette-1-background-color has-palette-2-color has-center-text-align has-large-padding"} -->
<div class="wp-block-column has-palette-1-background-color has-palette-2-color has-center-text-align has-large-padding"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php echo esc_attr__( 'Image alt text', 'michelle' ); ?>" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"className":"has-no-margin-top","textColor":"palette-2"} -->
<h2 class="has-no-margin-top has-palette-2-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit integer, arcu vivamus.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#0">Lorem ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
