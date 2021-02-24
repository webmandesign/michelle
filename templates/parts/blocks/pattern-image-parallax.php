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
	'title'      => _x( 'Image: Parallax background', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'gallery' ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/16to9.jpg' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","hasParallax":true,"dimRatio":70,"overlayColor":"palette-1","minHeight":62,"minHeightUnit":"vh","align":"full","className":"is-style-inner-shadow"} -->
<div class="wp-block-cover alignfull has-background-dim-70 has-palette-1-background-color has-background-dim has-parallax is-style-inner-shadow" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:62vh"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
