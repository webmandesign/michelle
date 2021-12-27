<?php
/**
 * Block pattern setup file.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.3.0
 */

namespace WebManDesign\Michelle\Content;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Add block pattern setup args.
Block_Patterns::add_pattern_args( __FILE__, array(
	'title'      => _x( 'Intro: Centered with background', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'title', 'michelle' ), esc_html__( 'heading', 'michelle' ), 'h1' ),
) );

// Block pattern content:

$image = Starter::get_image_url( '16to9' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"dimRatio":90,"overlayColor":"palette-1","minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom center","align":"full","className":"is-style-no-padding"} -->
<div class="wp-block-cover alignfull has-background-dim-90 has-palette-1-background-color has-background-dim has-custom-content-position is-position-bottom-center is-style-no-padding" style="min-height:100vh"><img class="wp-block-cover__image-background wp-image-999999" alt="" src="<?php echo esc_url_raw( $image ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"className":"has-15vmax-min-height"} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer has-15vmax-min-height"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":1,"textColor":"palette-2"} -->
<h1 class="has-text-align-center has-palette-2-color has-text-color">Lorem ipsum</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"palette-2","fontSize":"large"} -->
<p class="has-text-align-center has-palette-2-color has-text-color has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing, elit tortor ut lacinia auctor, varius potenti ad vehicula interdum. Aenean nullam luctus natoque sagittis.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
