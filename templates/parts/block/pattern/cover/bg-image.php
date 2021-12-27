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
	'title'      => _x( 'Intro: With image and background image', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'title', 'michelle' ), esc_html__( 'heading', 'michelle' ), 'h1' ),
) );

// Block pattern content:

$image1 = Starter::get_image_url( '16to9' );
$image2 = Starter::get_image_url( '1to1' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image1 ); ?>","id":999999,"dimRatio":90,"overlayColor":"palette-2","minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","align":"full","className":"is-style-no-padding"} -->
<div class="wp-block-cover alignfull has-background-dim-90 has-palette-2-background-color has-background-dim is-style-no-padding" style="background-image:url(<?php echo esc_url_raw( $image1 ); ?>);min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"className":"has-20vmax-min-height"} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer has-20vmax-min-height"></div>
<!-- /wp:spacer -->

<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":999999,"mediaLink":"#0","mediaType":"image","verticalAlignment":"top"} -->
<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url_raw( $image2 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999999 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":1} -->
<h1>Lorem ipsum dolor sit amet </h1>
<!-- /wp:heading --></div></div>
<!-- /wp:media-text --></div></div>
<!-- /wp:cover -->
