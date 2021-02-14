<?php
/**
 * Starter content: Home page.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_admin() ) {
	return;
}

?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":40} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading -->
<h2>Lorem ipsum dolor sit amet consectetur</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":10} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":50} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit viverra libero iaculis nibh, dis pharetra auctor pretium sociis ridiculus tortor faucibus ornare tristique, nulla curabitur dui hac porttitor ac facilisi praesent arcu lobortis.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":70} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"align":"full"} -->
<figure class="wp-block-image alignfull"><img src="<?php echo esc_url_raw( get_theme_file_uri( 'assets/images/starter/landscape.jpg' ) ); ?>" alt="Lorem ipsum" /></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":100} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"className":"has-no-margin-top"} -->
<h2 class="has-no-margin-top">Lorem ipsum dolor?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit nulla varius dignissim molestie potenti, eget suscipit posuere hac mattis feugiat ullamcorper praesent cum mus tempus.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote -->
<blockquote class="wp-block-quote"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit dis varius id per, gravida dictum condimentum vestibulum commodo facilisis felis ut sed. Turpis cum pharetra ultrices suspendisse penatibus duis, eros aliquet fermentum odio.</p><cite>Mark Twain</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote -->
<blockquote class="wp-block-quote"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit dis varius id per, gravida dictum condimentum vestibulum commodo facilisis felis ut sed. Turpis cum pharetra ultrices suspendisse penatibus duis, eros aliquet fermentum odio.</p><cite>Mark Twain</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url_raw( get_theme_file_uri( 'assets/images/starter/landscape.jpg' ) ); ?>","hasParallax":true,"minHeight":653,"align":"full"} -->
<div class="wp-block-cover alignfull has-background-dim has-parallax" style="background-image:url(<?php echo esc_url_raw( get_theme_file_uri( 'assets/images/starter/landscape.jpg' ) ); ?>);min-height:653px"><div class="wp-block-cover__inner-container"><!-- wp:media-text {"mediaType":"image","isStackedOnMobile":true} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url_raw( get_theme_file_uri( 'assets/images/starter/dots-white.png' ) ); ?>" alt="Lorem ipsum" /></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"palette-5"} -->
<h2 class="has-palette-5-color has-text-color">Lorem ipsum dolor</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size">Lorem ipsum dolor sit amet consectetur adipiscing elit dis varius id per, gravida dictum condimentum vestibulum commodo facilisis felis ut sed.</p>
<!-- /wp:paragraph -->

<!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link" href="#0">Lorem ipsum</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:media-text --></div></div>
<!-- /wp:cover -->
