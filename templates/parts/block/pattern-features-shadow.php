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
	'title'      => _x( 'Features: With drop shadow', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
	'keywords'   => array( esc_html__( 'services', 'michelle' ) ),
) );

// Block pattern content:

$image = Starter::get_image_url( 'icon' );

?>

<!-- wp:columns {"align":"full","className":"is-style-no-gaps has-hidden-overflow"} -->
<div class="wp-block-columns alignfull is-style-no-gaps has-hidden-overflow"><!-- wp:column {"className":"is-style-drop-shadow has-huge-padding has-palette-1-background-color"} -->
<div class="wp-block-column is-style-drop-shadow has-huge-padding has-palette-1-background-color"><!-- wp:image {"linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textColor":"palette-2","className":"is-style-no-margin-vertical"} -->
<h2 class="is-style-no-margin-vertical has-palette-2-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"palette-2"} -->
<p class="has-palette-2-color has-text-color">Lorem ipsum dolor sit amet consectetur adipiscing elit litora, mus neque taciti porta class in cursus netus, semper urna faucibus per mollis habitasse aliquet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-drop-shadow has-huge-padding has-palette-1-background-color"} -->
<div class="wp-block-column is-style-drop-shadow has-huge-padding has-palette-1-background-color"><!-- wp:image {"linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textColor":"palette-2","className":"is-style-no-margin-vertical"} -->
<h2 class="is-style-no-margin-vertical has-palette-2-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"palette-2"} -->
<p class="has-palette-2-color has-text-color">Lorem ipsum dolor sit amet consectetur adipiscing elit litora, mus neque taciti porta class in cursus netus, semper urna faucibus per mollis habitasse aliquet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-drop-shadow has-huge-padding has-palette-1-background-color"} -->
<div class="wp-block-column is-style-drop-shadow has-huge-padding has-palette-1-background-color"><!-- wp:image {"linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url_raw( $image ); ?>" alt="<?php esc_attr_e( 'Image alt text', 'michelle' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textColor":"palette-2","className":"is-style-no-margin-vertical"} -->
<h2 class="is-style-no-margin-vertical has-palette-2-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":30} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"palette-2"} -->
<p class="has-palette-2-color has-text-color">Lorem ipsum dolor sit amet consectetur adipiscing elit litora, mus neque taciti porta class in cursus netus, semper urna faucibus per mollis habitasse aliquet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
