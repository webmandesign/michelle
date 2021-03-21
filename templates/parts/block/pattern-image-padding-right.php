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
	'title'      => _x( 'Image: Fullwidth with right padding', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'gallery' ),
) );

// Block pattern content:

$image = Starter::get_image_url( '21to9' );

?>

<!-- wp:image {"align":"full","id":999999,"sizeSlug":"large","linkDestination":"none","className":"is-style-padding-right"} -->
<figure class="wp-block-image alignfull size-large is-style-padding-right"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>" class="wp-image-999999"/></figure>
<!-- /wp:image -->
