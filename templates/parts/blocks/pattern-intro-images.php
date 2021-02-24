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
	'title'      => _x( 'Intro: With 3 images', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'header' ),
) );

// Block pattern content:

$image1 = get_theme_file_uri( 'assets/images/starter/2to3.jpg' );
$image2 = get_theme_file_uri( 'assets/images/starter/1to1.jpg' );
$image3 = get_theme_file_uri( 'assets/images/starter/3to4.jpg' );

?>

<!-- wp:group {"align":"full","backgroundColor":"palette-1","textColor":"palette-2"} -->
<div class="wp-block-group alignfull has-palette-2-color has-palette-1-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:spacer {"className":"has-30-percent-screen-min-height"} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer has-30-percent-screen-min-height"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="has-text-align-center"><strong>Lorem ipsum dolor sit</strong></h1>
<!-- /wp:heading -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:gallery {"ids":[999991,999992,999993],"linkTo":"none","align":"wide"} -->
<figure class="wp-block-gallery alignwide columns-3 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image1 ); ?>" alt="<?php echo esc_attr__( 'Image alt text', 'michelle' ); ?>" data-id="999991" data-full-url="<?php echo esc_url_raw( $image1 ); ?>" data-link="#0" class="wp-image-999991"/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image2 ); ?>" alt="<?php echo esc_attr__( 'Image alt text', 'michelle' ); ?>" data-id="999992" data-full-url="<?php echo esc_url_raw( $image2 ); ?>" data-link="#0" class="wp-image-999992"/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image3 ); ?>" alt="<?php echo esc_attr__( 'Image alt text', 'michelle' ); ?>" data-id="999993" data-full-url="<?php echo esc_url_raw( $image3 ); ?>" data-link="#0" class="wp-image-999993"/></figure></li></ul></figure>
<!-- /wp:gallery -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
