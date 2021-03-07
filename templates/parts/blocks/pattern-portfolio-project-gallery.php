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
	'title'      => _x( 'Portfolio: Project with gallery', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'gallery' ),
) );

// Block pattern content:

$image1 = get_theme_file_uri( 'assets/images/starter/2to3.jpg' );
$image2 = get_theme_file_uri( 'assets/images/starter/1to1.jpg' );
$image3 = get_theme_file_uri( 'assets/images/starter/3to4.jpg' );

?>

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:gallery {"ids":[999991,999992,999993],"linkTo":"none","align":"wide","className":"is-style-no-gaps has-no-margin-bottom"} -->
<figure class="wp-block-gallery alignwide columns-3 is-cropped is-style-no-gaps has-no-margin-bottom"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image1 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999991" data-full-url="<?php echo esc_url_raw( $image1 ); ?>" data-link="#0" class="wp-image-999991"/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image2 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999992" data-full-url="<?php echo esc_url_raw( $image2 ); ?>" data-link="#0" class="wp-image-999992"/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image3 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999993" data-full-url="<?php echo esc_url_raw( $image3 ); ?>" data-link="#0" class="wp-image-999993"/></figure></li></ul></figure>
<!-- /wp:gallery -->

<!-- wp:columns {"align":"wide","style":{"color":{"background":"#eeeeee"}}} -->
<div class="wp-block-columns alignwide has-background" style="background-color:#eeeeee"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"className":"is-style-uppercase","fontSize":"extra-large"} -->
<h2 class="is-style-uppercase has-extra-large-font-size"><strong><a href="#0">Lorem Ipsum</a></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit euismod, nibh montes pretium fusce ridiculus feugiat torquent hac, aptent imperdiet rutrum arcu porttitor sem lectus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit euismod, nibh montes pretium fusce ridiculus feugiat torquent.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Lorem ipsum</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:group -->
