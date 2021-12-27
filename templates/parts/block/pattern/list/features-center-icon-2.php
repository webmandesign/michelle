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
	'title'      => _x( 'Features: Center aligned with icon 2', 'Block pattern title.', 'michelle' ),
	'keywords'   => array( esc_html__( 'services', 'michelle' ) ),
) );

// Block pattern content:

$icon = Starter::get_image_url( 'icon' );

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"palette-2","textColor":"palette-3","className":"is-style-no-margin-vertical"} -->
<div class="wp-block-group alignfull is-style-no-margin-vertical has-palette-3-color has-palette-2-background-color has-text-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter"><img src="<?php echo esc_url_raw( $icon ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>"/></figure></div>
<!-- /wp:image -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"palette-3"} -->
<h3 class="has-text-align-center has-palette-3-color has-text-color">Lorem ipsum</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter"><img src="<?php echo esc_url_raw( $icon ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>"/></figure></div>
<!-- /wp:image -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"palette-3"} -->
<h3 class="has-text-align-center has-palette-3-color has-text-color">Dolor sit</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter"><img src="<?php echo esc_url_raw( $icon ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>"/></figure></div>
<!-- /wp:image -->

<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"palette-3"} -->
<h3 class="has-text-align-center has-palette-3-color has-text-color">Varius augue</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit purus, varius augue dapibus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
