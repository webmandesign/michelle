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
	'title'      => _x( 'Features: With large image', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
	'keywords'   => array( esc_html__( 'services', 'michelle' ) ),
) );

// Block pattern content:

$image = Starter::get_image_url( '16to9' );
$icon  = Starter::get_image_url( 'icon' );

?>

<!-- wp:cover {"url":"<?php echo esc_url_raw( $image ); ?>","id":999999,"dimRatio":0,"minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom center","align":"full","className":"has-no-padding"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center has-no-padding" style="background-image:url(<?php echo esc_url_raw( $image ); ?>);min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","className":"has-no-padding","backgroundColor":"palette-1","textColor":"palette-2"} -->
<div class="wp-block-group alignwide has-no-padding has-palette-2-color has-palette-1-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:columns {"align":"wide","className":"is-style-has-padding"} -->
<div class="wp-block-columns alignwide is-style-has-padding"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter"><img src="<?php echo esc_url_raw( $icon ); ?>" alt="Image alt text"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"has-no-margin-top"} -->
<h3 class="has-text-align-center has-no-margin-top">Lorem Ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter"><img src="<?php echo esc_url_raw( $icon ); ?>" alt="Image alt text"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"has-no-margin-top"} -->
<h3 class="has-text-align-center has-no-margin-top">Lorem Ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter"><img src="<?php echo esc_url_raw( $icon ); ?>" alt="Image alt text"/></figure></div>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"has-no-margin-top"} -->
<h3 class="has-text-align-center has-no-margin-top">Lorem Ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
