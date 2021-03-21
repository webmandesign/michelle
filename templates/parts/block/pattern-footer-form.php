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
	'title'      => _x( 'Site footer: With subscription form example', 'Block pattern title.', 'michelle' ),
	'categories' => array( 'text' ),
) );

// Block pattern content:

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"palette-1","textColor":"palette-2","className":"is-style-no-margin-vertical"} -->
<div class="wp-block-group alignfull is-style-no-margin-vertical has-palette-2-color has-palette-1-background-color has-text-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><div class="wp-block-group__inner-container"><!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Lorem Ipsum</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<!--

This is only a dummy form placeholder, it does not work!
Use a plugin to add newsletter form.

-->
<form class="has-flex-display">
  <label for="field1" class="screen-reader-text">Your email</label>
  <input id="field1" type="email" placeholder="Your email">
  <button class="is-style-outline" title="This is just a demo placeholder form" type="submit">Submit →</button>
</form>
<!-- /wp:html -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipiscing elit suspendisse, habitasse nam quis aenean malesuada magnis imperdiet senectus, torquent nibh inceptos.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":150} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:group -->
