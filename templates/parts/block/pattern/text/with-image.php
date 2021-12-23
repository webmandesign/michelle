<?php
/**
 * Block pattern setup file.
 *
 * Default pattern categories: buttons, columns, gallery, header, text.
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
	'title'      => _x( 'Text with image', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'image', 'michelle' ) ),
) );

// Block pattern content:

$image = Starter::get_image_url( '3to4' );

?>

<!-- wp:media-text {"mediaId":999999,"mediaLink":"#0","mediaType":"image","imageFill":false,"focalPoint":{"x":"0.96","y":"0.69"},"className":"is-style-no-margin-vertical"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-no-margin-vertical"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999999 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading -->
<h2>Lorem Ipsum Dolor</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"dropCap":true} -->
<p class="has-drop-cap">Lorem ipsum dolor sit amet consectetur adipiscing elit curabitur, inceptos ac commodo porttitor habitasse arcu malesuada suscipit, aenean non maecenas semper euismod massa natoque.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit id, ultrices montes dapibus dui ante primis porta magna, commodo facilisi fusce faucibus ac porttitor magnis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit id, ultrices montes dapibus dui ante primis porta magna, commodo facilisi fusce faucibus ac porttitor magnis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:media-text -->
