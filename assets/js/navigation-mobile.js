/**
 * Mobile navigation toggling.
 *
 * This is actually being enqueued inline in `WebManDesign\Michelle\Assets\Scripts::enqueue_inline_nav_mobile()`.
 * Keeping this file (and its minified version) for reference.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since    1.0.0
 * @version  1.0.13
 */

( function() {
	'use strict';

	var
		button, menu,
		container = document.getElementById( 'site-navigation' );

	if ( ! container ) {
		return;
	}

	button = document.getElementById( 'menu-toggle' );
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = document.getElementById( 'menu-primary' );

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );

	function michelleToggleMenu() {
		container.classList.toggle( 'toggled' );
		document.body.classList.toggle( 'has-navigation-toggled' );
		document.documentElement.classList.toggle( 'lock-scroll' );

		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		} else {
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		}
	}

	button.onclick = function() {
		michelleToggleMenu();
	};

	/**
	 * Trap focus inside mobile menu modal.
	 * Code adapted from Twenty Twenty-One theme.
	 */
	document.addEventListener( 'keydown', function( event ) {
		if ( ! container.classList.contains( 'toggled' ) ) {
			return;
		}

		var
			elements, firstEl, lastEl,
			activeEl = document.activeElement,
			tabKey   = ( 9 === event.keyCode ),
			escKey   = ( 27 === event.keyCode ),
			shiftKey = event.shiftKey;

		elements = container.querySelectorAll( 'a, button, input' );
		elements = Array.prototype.slice.call( elements );
		firstEl  = elements[0];
		lastEl   = elements[ elements.length - 1 ];

		if ( escKey ) {
			event.preventDefault();
			michelleToggleMenu();
			button.focus();
		}

		if (
			! shiftKey
			&& tabKey
			&& lastEl === activeEl
		) {
			event.preventDefault();
			firstEl.focus();
		}

		if (
			shiftKey
			&& tabKey
			&& firstEl === activeEl
		) {
			event.preventDefault();
			lastEl.focus();
		}

		if (
			tabKey
			&& firstEl === lastEl
		) {
			event.preventDefault();
		}
	} );
} )();
