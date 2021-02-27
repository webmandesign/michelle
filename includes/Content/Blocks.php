<?php
/**
 * Blocks component.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Content;

use WebManDesign\Michelle\Component_Interface;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Blocks implements Component_Interface {

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			// Filters

				add_filter( 'render_block', __CLASS__ . '::render_block', 5, 2 );

	} // /init

	/**
	 * Block editor output modifications.
	 *
	 * @since  1.0.0
	 *
	 * @param  string $block_content  The pre-rendered content. Default null.
	 * @param  array  $block          The block being rendered.
	 *
	 * @return  void
	 */
	public static function render_block( string $block_content, array $block ): string {

		// Variables

			$attrs = $block['attrs'];

			/**
			 * Filter array of forced default block attribute values.
			 *
			 * Default block attribute values does not seem to be passed to `render_block` filter.
			 * @link  https://github.com/WordPress/gutenberg/issues/16365
			 *
			 * @since  1.0.0
			 *
			 * @param  array  $defaults       Array of default values for blocks.
			 * @param  string $block_content
			 * @param  array  $block
			 */
			$defaults = apply_filters( 'michelle/content/blocks/render_block/defaults', array(
				// Blocks with `wide` default alignment.
				'align:wide' => array(
					'core/media-text',
					'coblocks/media-card',
				),
			), $block_content, $block );

			if (
				in_array( $block['blockName'], $defaults['align:wide'] )
				&& ! isset( $attrs['align'] )
			) {
				$attrs['align'] = 'wide';
			}

			// Make sure the alignment attribute is set.
			if ( ! isset( $attrs['align'] ) ) {
				$attrs['align'] = null;
			}

			/**
			 * Compatibility with 3rd party block plugins.
			 * @link  https://wordpress.org/support/topic/align-attribute-name
			 */
			if ( null === $attrs['align'] && isset( $attrs['blockAlignment'] ) ) {
				$attrs['align'] = $attrs['blockAlignment'];
			}

			// Make sure the className attribute is set.
			if ( ! isset( $attrs['className'] ) ) {
				$attrs['className'] = '';
			}


		// Processing

			// Wide align wrapper.
			if (
				'wide' == $attrs['align']
				|| false !== stripos( $attrs['className'], 'alignwide' )
			) {
				$atts = array(
					'class="alignwide-wrap"',
					'data-block="' . sanitize_title( str_replace( 'core/', '', $block['blockName'] ) ) . '"',
				);
				$block_content = '<div ' . implode( ' ', $atts ) . '>' . $block_content . '</div>';
			}

			// Image block left/right alignment.
			if (
				'core/image' === $block['blockName']
				&& in_array( $attrs['align'], array( 'left', 'right' ) )
			) {
				$block_content = str_replace(
					'wp-block-image',
					'wp-block-image align-horizontal-wrap',
					$block_content
				);
			}

			// Latest Posts block.
			if (
				'core/latest-posts' === $block['blockName']
				&& (
					! empty( $attrs['displayAuthor'] )
					|| ! empty( $attrs['displayPostDate'] )
				)
			) {
				$re = '/';

				if ( ! empty( $attrs['displayAuthor'] ) ) {
					$re .= '<div class="wp-block-latest-posts__post-author">';
				} else {
					$re .= '<time(.*?)>';
				}

				$re .= '(.*?)';

				if ( ! empty( $attrs['displayPostDate'] ) ) {
					$re .= '<\/time>';
				} else {
					$re .= '<\/div>';
				}

				$re .= '/s';

				$block_content = preg_replace( $re, '<div class="entry-meta">$0</div>', $block_content );
			}


		// Output

			return $block_content;

	} // /render_block

}
