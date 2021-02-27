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
	'title'      => _x( 'Testimonial: With image', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'text' ),
	'keywords'   => array( esc_html__( 'quote', 'michelle' ) ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/1to1.jpg' );

?>

<!-- wp:media-text {"mediaId":999999,"mediaLink":"#0","mediaType":"image","mediaWidth":62,"imageFill":false,"className":"is-style-card"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-card" style="grid-template-columns:62% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999999 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:quote {"className":"is-style-large"} -->
<blockquote class="wp-block-quote is-style-large"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit cursus, taciti tortor sociosqu curabitur nascetur nullam iaculis ut, enim commodo curae leo pretium nam hendrerit.</p><cite>John Doe</cite></blockquote>
<!-- /wp:quote --></div></div>
<!-- /wp:media-text -->
