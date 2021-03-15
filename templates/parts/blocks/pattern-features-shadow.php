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

?>

<!-- wp:columns {"align":"full","className":"is-style-no-gaps has-hidden-overflow"} -->
<div class="wp-block-columns alignfull is-style-no-gaps has-hidden-overflow"><!-- wp:column {"className":"is-style-drop-shadow has-huge-padding has-palette-1-background-color"} -->
<div class="wp-block-column is-style-drop-shadow has-huge-padding has-palette-1-background-color"><!-- wp:html -->
<!-- Icon from https://iconify.design/icon-sets/ -->
<svg class="svg-icon" width="5em" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" viewBox="0 0 15 15"><g fill="none"><path d="M5.5 13.5l-.479.144a.5.5 0 0 0 .957.003L5.5 13.5zm4 0l-.479.144a.5.5 0 0 0 .943.042L9.5 13.5zm3.53-8.827l.465.186l-.464-.186zm-.54-1.931l-.3.4l.3-.4zm-.133-.1l.3-.4l-.3.4zm-2 2l.4-.3l-.4.3zm.286-2l-.3-.4l.3.4zM7.5 14A6.5 6.5 0 0 1 1 7.5H0A7.5 7.5 0 0 0 7.5 15v-1zM14 7.5A6.5 6.5 0 0 1 7.5 14v1A7.5 7.5 0 0 0 15 7.5h-1zM7.5 1A6.5 6.5 0 0 1 14 7.5h1A7.5 7.5 0 0 0 7.5 0v1zm0-1A7.5 7.5 0 0 0 0 7.5h1A6.5 6.5 0 0 1 7.5 1V0zM2.021 3.644l3 10l.958-.288l-3-10l-.958.288zm3.957 10.003l2-6.5l-.956-.294l-2 6.5l.956.294zM6.02 3.644l3 10l.958-.288l-3-10l-.958.288zm6.768-1.302l-.132-.1l-.6.8l.132.1l.6-.8zm-2.832 2.6l.643.858l.8-.6l-.643-.857l-.8.6zm.386-2.7a1.929 1.929 0 0 0-.386 2.7l.8-.6a.929.929 0 0 1 .186-1.3l-.6-.8zm2.314 0a1.928 1.928 0 0 0-2.314 0l.6.8a.928.928 0 0 1 1.114 0l.6-.8zm.838 2.617a2.149 2.149 0 0 0-.706-2.517l-.6.8c.416.312.57.863.377 1.345l.929.372zM2 4h2V3H2v1zm3 0h3V3H5v1zm4.964 9.686l3.531-8.827l-.928-.372l-3.531 8.827l.928.372z" fill="#030507"></path></g></svg>
<!-- /wp:html -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textColor":"palette-2","className":"has-no-margin-top"} -->
<h2 class="has-no-margin-top has-palette-2-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"palette-2"} -->
<p class="has-palette-2-color has-text-color">Lorem ipsum dolor sit amet consectetur adipiscing elit litora, mus neque taciti porta class in cursus netus, semper urna faucibus per mollis habitasse aliquet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-drop-shadow has-huge-padding has-palette-1-background-color"} -->
<div class="wp-block-column is-style-drop-shadow has-huge-padding has-palette-1-background-color"><!-- wp:html -->
<!-- Icon from https://iconify.design/icon-sets/ -->
<svg class="svg-icon" width="5em" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" viewBox="0 0 15 15"><g fill="none"><path d="M5.5 13.5l-.479.144a.5.5 0 0 0 .957.003L5.5 13.5zm4 0l-.479.144a.5.5 0 0 0 .943.042L9.5 13.5zm3.53-8.827l.465.186l-.464-.186zm-.54-1.931l-.3.4l.3-.4zm-.133-.1l.3-.4l-.3.4zm-2 2l.4-.3l-.4.3zm.286-2l-.3-.4l.3.4zM7.5 14A6.5 6.5 0 0 1 1 7.5H0A7.5 7.5 0 0 0 7.5 15v-1zM14 7.5A6.5 6.5 0 0 1 7.5 14v1A7.5 7.5 0 0 0 15 7.5h-1zM7.5 1A6.5 6.5 0 0 1 14 7.5h1A7.5 7.5 0 0 0 7.5 0v1zm0-1A7.5 7.5 0 0 0 0 7.5h1A6.5 6.5 0 0 1 7.5 1V0zM2.021 3.644l3 10l.958-.288l-3-10l-.958.288zm3.957 10.003l2-6.5l-.956-.294l-2 6.5l.956.294zM6.02 3.644l3 10l.958-.288l-3-10l-.958.288zm6.768-1.302l-.132-.1l-.6.8l.132.1l.6-.8zm-2.832 2.6l.643.858l.8-.6l-.643-.857l-.8.6zm.386-2.7a1.929 1.929 0 0 0-.386 2.7l.8-.6a.929.929 0 0 1 .186-1.3l-.6-.8zm2.314 0a1.928 1.928 0 0 0-2.314 0l.6.8a.928.928 0 0 1 1.114 0l.6-.8zm.838 2.617a2.149 2.149 0 0 0-.706-2.517l-.6.8c.416.312.57.863.377 1.345l.929.372zM2 4h2V3H2v1zm3 0h3V3H5v1zm4.964 9.686l3.531-8.827l-.928-.372l-3.531 8.827l.928.372z" fill="#030507"></path></g></svg>
<!-- /wp:html -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textColor":"palette-2","className":"has-no-margin-top"} -->
<h2 class="has-no-margin-top has-palette-2-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"palette-2"} -->
<p class="has-palette-2-color has-text-color">Lorem ipsum dolor sit amet consectetur adipiscing elit litora, mus neque taciti porta class in cursus netus, semper urna faucibus per mollis habitasse aliquet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-drop-shadow has-huge-padding has-palette-1-background-color"} -->
<div class="wp-block-column is-style-drop-shadow has-huge-padding has-palette-1-background-color"><!-- wp:html -->
<!-- Icon from https://iconify.design/icon-sets/ -->
<svg class="svg-icon" width="5em" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" viewBox="0 0 15 15"><g fill="none"><path d="M5.5 13.5l-.479.144a.5.5 0 0 0 .957.003L5.5 13.5zm4 0l-.479.144a.5.5 0 0 0 .943.042L9.5 13.5zm3.53-8.827l.465.186l-.464-.186zm-.54-1.931l-.3.4l.3-.4zm-.133-.1l.3-.4l-.3.4zm-2 2l.4-.3l-.4.3zm.286-2l-.3-.4l.3.4zM7.5 14A6.5 6.5 0 0 1 1 7.5H0A7.5 7.5 0 0 0 7.5 15v-1zM14 7.5A6.5 6.5 0 0 1 7.5 14v1A7.5 7.5 0 0 0 15 7.5h-1zM7.5 1A6.5 6.5 0 0 1 14 7.5h1A7.5 7.5 0 0 0 7.5 0v1zm0-1A7.5 7.5 0 0 0 0 7.5h1A6.5 6.5 0 0 1 7.5 1V0zM2.021 3.644l3 10l.958-.288l-3-10l-.958.288zm3.957 10.003l2-6.5l-.956-.294l-2 6.5l.956.294zM6.02 3.644l3 10l.958-.288l-3-10l-.958.288zm6.768-1.302l-.132-.1l-.6.8l.132.1l.6-.8zm-2.832 2.6l.643.858l.8-.6l-.643-.857l-.8.6zm.386-2.7a1.929 1.929 0 0 0-.386 2.7l.8-.6a.929.929 0 0 1 .186-1.3l-.6-.8zm2.314 0a1.928 1.928 0 0 0-2.314 0l.6.8a.928.928 0 0 1 1.114 0l.6-.8zm.838 2.617a2.149 2.149 0 0 0-.706-2.517l-.6.8c.416.312.57.863.377 1.345l.929.372zM2 4h2V3H2v1zm3 0h3V3H5v1zm4.964 9.686l3.531-8.827l-.928-.372l-3.531 8.827l.928.372z" fill="#030507"></path></g></svg>
<!-- /wp:html -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textColor":"palette-2","className":"has-no-margin-top"} -->
<h2 class="has-no-margin-top has-palette-2-color has-text-color">Lorem ipsum</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"palette-2"} -->
<p class="has-palette-2-color has-text-color">Lorem ipsum dolor sit amet consectetur adipiscing elit litora, mus neque taciti porta class in cursus netus, semper urna faucibus per mollis habitasse aliquet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
