<?php
/**
 * Block pattern setup file.
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
	'title'      => _x( 'Full-screen page title', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'header' ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/3to2.jpg' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","hasParallax":true,"dimRatio":80,"overlayColor":"accent","minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom center","align":"full"} -->
<div class="wp-block-cover alignfull has-background-dim-80 has-accent-background-color has-background-dim has-parallax has-custom-content-position is-position-bottom-center" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":1,"className":"h1","textColor":"palette-3"} -->
<h1 class="h1 has-palette-3-color has-text-color">Lorem ipsum dolor</h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing, elit tortor ut lacinia auctor, varius potenti ad vehicula interdum. Aenean nullam luctus natoque sagittis, congue himenaeos.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
