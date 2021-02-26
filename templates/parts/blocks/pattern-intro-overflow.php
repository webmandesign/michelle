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
	'title'      => _x( 'Intro: Overflown heading', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'header' ),
	'keywords'   => array( esc_html__( 'title', 'michelle' ), esc_html__( 'heading', 'michelle' ), 'h1' ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/3to4.jpg' );

?>

<!-- wp:group {"align":"full","className":"has-no-padding","backgroundColor":"accent","textColor":"palette-3"} -->
<div class="wp-block-group alignfull has-no-padding has-palette-3-color has-accent-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:spacer {"className":"has-20vmax-min-height"} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer has-20vmax-min-height"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"dimRatio":40,"overlayColor":"accent","minHeight":70,"minHeightUnit":"vh","contentPosition":"bottom center","align":"wide","className":"is-style-scale-image"} -->
<div class="wp-block-cover alignwide has-background-dim-40 has-accent-background-color has-background-dim has-custom-content-position is-position-bottom-center is-style-scale-image" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:70vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","className":"has-dark-text-shadow"} -->
<h1 class="alignwide has-text-align-center has-dark-text-shadow"><strong>Lorem ipsum dolor sit amet consectetur adipiscing elit rutrum lorem ipsum</strong></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"align":"center","className":"has-large-font-size"} -->
<div class="wp-block-buttons aligncenter has-large-font-size"><!-- wp:button {"backgroundColor":"palette-1","textColor":"palette-2"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-palette-2-color has-palette-1-background-color has-text-color has-background" href="#0">Lorem ipsum →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div></div>
<!-- /wp:group -->
