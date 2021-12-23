<?php
/**
 * Block pattern setup file.
 *
 * Default pattern categories: buttons, columns, gallery, header, text.
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
	'title'         => _x( 'Heading: Accessibly hidden', 'Block pattern title.', 'michelle' ),
	'keywords'      => array( esc_html__( 'title', 'michelle' ) ),
	'viewportWidth' => 400,
) );

// Block pattern content:

?>

<!-- wp:heading {"className":"is-style-screen-reader-text"} -->
<h2 class="is-style-screen-reader-text">Lorem ipsum</h2>
<!-- /wp:heading -->
