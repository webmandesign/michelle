<?php
/**
 * Block pattern setup file.
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
	'title'      => _x( 'Site footer', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'columns' ),
) );

// Block pattern content:

$image = get_theme_file_uri( 'assets/images/starter/icon.png' );

?>

<!-- wp:group {"align":"full","className":"has-no-margin-bottom","backgroundColor":"palette-1","textColor":"palette-2"} -->
<div class="wp-block-group alignfull has-no-margin-bottom has-palette-2-color has-palette-1-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url_raw( $image ); ?>" alt="" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"fontSize":"small"} -->
<h2 class="has-small-font-size"><strong>LOREM IPSUM</strong></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Lorem ipsum dolor</li><li>Sit amet consectetur</li><li>Adipiscing elit nascetur</li><li>Srcu nam sed conubia</li><li>Justo est ligula sem</li></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"fontSize":"small"} -->
<h2 class="has-small-font-size"><strong>LOREM IPSUM</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit nascetur, arcu nam sed conubia justo est ligula sem, aliquet mi sollicitudin imperdiet etiam luctus dictumst.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"accent","textColor":"palette-3"} -->
<div class="wp-block-group alignfull has-palette-3-color has-accent-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"has-no-margin-bottom"} -->
<div class="wp-block-column is-vertically-aligned-center has-no-margin-bottom" style="flex-basis:33.33%"><!-- wp:heading {"textColor":"palette-3","fontSize":"small"} -->
<h2 class="has-palette-3-color has-text-color has-small-font-size"><strong>CONNECT WITH US</strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"has-no-margin-bottom"} -->
<div class="wp-block-column is-vertically-aligned-center has-no-margin-bottom"><!-- wp:list {"className":"has-right-text-align is-style-outline-items"} -->
<ul class="has-right-text-align is-style-outline-items"><li><a href="#0">Facebook</a></li><li><a href="#0">Twitter</a></li><li><a href="#0">Instagram</a></li><li><a href="#0">GitHub</a></li></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:group -->
