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
	'title'         => _x( 'Heading: Accessibly hidden', 'Block pattern title.', 'michelle' ),
	'categories'    => array( 'header' ),
	'viewportWidth' => 400,
) );

// Block pattern content:

?>

<!-- wp:heading {"level":1,"className":"screen-reader-text"} -->
<h1 class="screen-reader-text">Lorem ipsum dolor</h1>
<!-- /wp:heading -->
