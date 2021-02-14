<?php
/**
 * Theme scripts component.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.0
 */

namespace WebManDesign\Michelle\Assets;

use WebManDesign\Michelle\Component_Interface;
use WebManDesign\Michelle\Header\Component as Header;
use WebManDesign\Michelle\Customize\Mod;
use WebManDesign\Michelle\Tool\AMP;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Scripts implements Component_Interface {

	/**
	 * Initialization.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			// Actions

				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue_inline', 0 );
				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue_inline_nav_mobile', MICHELLE_ENQUEUE_PRIORITY + 9 );
				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue_inline_no_js_class', MICHELLE_ENQUEUE_PRIORITY + 9 );
				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue_inline_scroll', MICHELLE_ENQUEUE_PRIORITY + 9 );

				add_action( 'comment_form_before', __CLASS__ . '::enqueue_comment_reply' );

	} // /init

	/**
	 * Placeholders for adding inline scripts.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function enqueue_inline() {

		// Processing

			// Placeholder for adding localize scripts early.
			wp_register_script( 'michelle-scripts-before', '' );
			wp_enqueue_script( 'michelle-scripts-before' );

			// Placeholder for adding footer scripts.
			wp_register_script( 'michelle-scripts-footer', '', array(), false, true );
			wp_enqueue_script( 'michelle-scripts-footer' );

	} // /enqueue_inline

	/**
	 * Enqueue comment reply script the right way.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function enqueue_comment_reply() {

		// Requirements check

			if ( AMP::is_amp() ) {
				return;
			}


		// Processing

			if (
				is_singular()
				&& comments_open()
				&& get_option( 'thread_comments' )
			) {
				/**
				 * This script should be registered by now
				 * with `wp_default_scripts()`.
				 */
				wp_enqueue_script( 'comment-reply' );
			}

	} // /enqueue_comment_reply

	/**
	 * Mobile navigation toggling.
	 *
	 * Minified script is copied from `assets/js/navigation-mobile.min.js`
	 * and enqueued inline in the footer to prevent external file load.
	 *
	 * For unminified script:
	 * @see  assets/js/navigation-mobile.js
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function enqueue_inline_nav_mobile() {

		// Requirements check

			if (
				AMP::is_amp()
				|| ! Header::is_enabled()
				|| ! Mod::get( 'navigation_mobile' )
			) {
				return;
			}


		// Processing

			wp_add_inline_script(
				'michelle-scripts-footer',
				'"use strict";!function(){var e,t,a;(e=document.getElementById("site-navigation"))&&void 0!==(t=document.getElementById("menu-toggle"))&&(void 0!==(a=document.getElementById("menu-primary"))?(a.setAttribute("aria-expanded","false"),t.onclick=function(){-1!==e.className.indexOf("toggled")?(e.className=e.className.replace(" toggled",""),t.setAttribute("aria-expanded","false"),a.setAttribute("aria-expanded","false"),document.body.classList.remove("has-navigation-toggled")):(e.className+=" toggled",t.setAttribute("aria-expanded","true"),a.setAttribute("aria-expanded","true"),document.body.classList.add("has-navigation-toggled"))}):t.style.display="none")}();'
			);

	} // /enqueue_inline_nav_mobile

	/**
	 * Remove "no-js" class from elements.
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function enqueue_inline_no_js_class() {

		// Requirements check

			if ( AMP::is_amp() ) {
				return;
			}


		// Processing

			wp_add_inline_script(
				'michelle-scripts-footer',
				Factory::strip( "
					( function() {
						'use strict';

						var nojs = document.getElementsByClassName( 'no-js' );
						for ( var i = 0, max = nojs.length; i < max; i++ ) {
							nojs[ i ].classList.remove( 'no-js' );
						}
					} )();
				" )
			);

	} // /enqueue_inline_no_js_class

	/**
	 * Has user scrolled the page?
	 *
	 * @since  1.0.0
	 *
	 * @return  void
	 */
	public static function enqueue_inline_scroll() {

		// Requirements check

			if ( AMP::is_amp() ) {
				return;
			}


		// Processing

			wp_add_inline_script(
				'michelle-scripts-footer',
				Factory::strip( "
					( function() {
						'use strict';

						var
							lastScrollTop = window.scrollY,
							ticking       = false;

						function michelleScroll() {
							var scrolledY = window.scrollY;

							if ( scrolledY < lastScrollTop ) {
								document.body.classList.add( 'has-scrolled-up' );
							} else {
								document.body.classList.remove( 'has-scrolled-up' );
							}

							if ( scrolledY > 1 ) {
								document.body.classList.add( 'has-scrolled' );
							} else {
								document.body.classList.remove( 'has-scrolled' );
								document.body.classList.remove( 'has-scrolled-up' );
							}

							lastScrollTop = scrolledY;
						}

						michelleScroll();

						window.addEventListener( 'scroll', function( e ) {
							if ( ! ticking ) {
								window.requestAnimationFrame( function() {
									michelleScroll();
									ticking = false;
								} );
								ticking = true;
							}
						} );
					} )();
				" )
			);

	} // /enqueue_inline_scroll

}
