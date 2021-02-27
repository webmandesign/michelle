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
	'title'      => _x( 'Gallery: Full-width with no gaps', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'gallery' ),
	'keywords'   => array( esc_html__( 'image', 'michelle' ) ),
) );

// Block pattern content:

$image1 = get_theme_file_uri( 'assets/images/starter/2to3.jpg' );
$image2 = get_theme_file_uri( 'assets/images/starter/1to1.jpg' );
$image3 = get_theme_file_uri( 'assets/images/starter/3to4.jpg' );

?>

<!-- wp:gallery {"ids":[999991,999992,999993],"linkTo":"none","align":"full","className":"is-style-no-gaps"} -->
<figure class="wp-block-gallery alignfull columns-3 is-cropped is-style-no-gaps"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image1 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999991" data-full-url="<?php echo esc_url_raw( $image1 ); ?>" data-link="#0" class="wp-image-999991"/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image2 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999992" data-full-url="<?php echo esc_url_raw( $image2 ); ?>" data-link="#0" class="wp-image-999992"/></figure></li><li class="blocks-gallery-item"><figure><img src="<?php echo esc_url_raw( $image3 ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" data-id="999993" data-full-url="<?php echo esc_url_raw( $image3 ); ?>" data-link="#0" class="wp-image-999993"/></figure></li></ul></figure>
<!-- /wp:gallery -->
