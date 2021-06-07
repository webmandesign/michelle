<?php
/**
 * Theme scripts component.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.2.0
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
	 * @since    1.0.0
	 * @version  1.0.12
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			// Actions

				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue_inline', 0 );
				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue_inline_no_js_class', MICHELLE_ENQUEUE_PRIORITY );
				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue_inline_nav_mobile', MICHELLE_ENQUEUE_PRIORITY + 9 );
				add_action( 'wp_enqueue_scripts', __CLASS__ . '::enqueue_inline_scroll', MICHELLE_ENQUEUE_PRIORITY + 9 );

				add_action( 'comment_form_before', __CLASS__ . '::enqueue_comment_reply' );

	} // /init

	/**
	 * Placeholders for adding inline scripts.
	 *
	 * @since    1.0.0
	 * @version  1.2.0
	 *
	 * @return  void
	 */
	public static function enqueue_inline() {

		// Requirements check

			if ( AMP::is_amp() ) {
				return;
			}


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
	 * @since    1.0.0
	 * @version  1.2.0
	 *
	 * @return  void
	 */
	public static function enqueue_inline_nav_mobile() {

		// Requirements check

			if (
				! Header::is_enabled()
				|| ! Mod::get( 'navigation_mobile' )
			) {
				return;
			}


		// Processing

			wp_add_inline_script(
				'michelle-scripts-footer',
				'"use strict";!function(){function c(){u.classList.toggle("toggled"),document.body.classList.toggle("has-navigation-toggled"),document.documentElement.classList.toggle("lock-scroll"),-1!==u.className.indexOf("toggled")?d.setAttribute("aria-expanded","true"):d.setAttribute("aria-expanded","false")}var d,u=document.getElementById("site-navigation");u&&void 0!==(d=document.getElementById("menu-toggle"))&&(void 0!==document.getElementById("menu-primary")?(d.onclick=function(){c()},document.addEventListener("keydown",function(e){if(u.classList.contains("toggled")){var t,n,o,l=document.activeElement,a=9===e.keyCode,i=27===e.keyCode,s=e.shiftKey;t=u.querySelectorAll("a, button, input"),n=(t=Array.prototype.slice.call(t))[0],o=t[t.length-1],i&&(e.preventDefault(),c(),d.focus()),!s&&a&&o===l&&(e.preventDefault(),n.focus()),s&&a&&n===l&&(e.preventDefault(),o.focus()),a&&n===o&&e.preventDefault()}})):d.style.display="none")}();'
			);

	} // /enqueue_inline_nav_mobile

	/**
	 * Remove "no-js" class from elements.
	 *
	 * @since    1.0.0
	 * @version  1.2.0
	 *
	 * @return  void
	 */
	public static function enqueue_inline_no_js_class() {

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
	 * Minified script is copied from `assets/js/scroll.min.js`
	 * and enqueued inline in the footer to prevent external file load.
	 *
	 * For unminified script:
	 * @see  assets/js/scroll.js
	 *
	 * @since    1.0.0
	 * @version  1.2.0
	 *
	 * @return  void
	 */
	public static function enqueue_inline_scroll() {

		// Processing

			wp_add_inline_script(
				'michelle-scripts-footer',
				'"use strict";!function(){function o(){var s=window.scrollY;s<d?document.body.classList.add("has-scrolled-up"):document.body.classList.remove("has-scrolled-up"),1<s?document.body.classList.add("has-scrolled"):(document.body.classList.remove("has-scrolled"),document.body.classList.remove("has-scrolled-up")),d=s}var d=window.scrollY,c=!1;o(),window.addEventListener("scroll",function(s){c||(window.requestAnimationFrame(function(){o(),c=!1}),c=!0)})}();'
			);

	} // /enqueue_inline_scroll

}
