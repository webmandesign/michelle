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
	'title'      => _x( 'Logos', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'gallery' ),
	'keywords'   => array( esc_html__( 'image', 'michelle' ) ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/icon.png' );

?>

<!-- wp:group {"align":"full","style":{"color":{"background":"#eeeeee"}}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#eeeeee"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":68} -->
<div style="height:68px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Lorem Ipsum Dolor</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit faucibus, dictumst aenean netus at pellentesque praesent.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:gallery {"ids":[999991,999992,999993,999994,999995],"columns":5,"linkTo":"none","align":"wide","className":"is-style-hide-caption"} -->
<figure class="wp-block-gallery alignwide columns-5 is-cropped is-style-hide-caption"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999991" data-full-url="<?php echo esc_url_raw( $image ); ?>" data-link="#0" class="wp-image-999991"/><figcaption class="blocks-gallery-item__caption">hoodie with zipper 2</figcaption></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999992" data-full-url="<?php echo esc_url_raw( $image ); ?>" data-link="#0" class="wp-image-999992"/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999993" data-full-url="<?php echo esc_url_raw( $image ); ?>" data-link="#0" class="wp-image-999993"/><figcaption class="blocks-gallery-item__caption">t shirt with logo 1</figcaption></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999994" data-full-url="<?php echo esc_url_raw( $image ); ?>" data-link="#0" class="wp-image-999994"/><figcaption class="blocks-gallery-item__caption">hoodie 2</figcaption></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999995" data-full-url="<?php echo esc_url_raw( $image ); ?>" data-link="#0" class="wp-image-999995"/><figcaption class="blocks-gallery-item__caption">long sleeve tee 2</figcaption></figure></li></ul></figure>
<!-- /wp:gallery -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
