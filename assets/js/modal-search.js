/**
 * Search form modal toggling.
 *
 * This is actually being enqueued inline in `WebManDesign\Michelle\Header\Component::get_search_form()`.
 * Keeping this file (and its minified version) for reference.
 *
 * @package    Michelle
 * @copyright  WebMan Design, Oliver Juhas
 *
 * @since  1.0.12
 */

( function() {
	'use strict';

	var
		container = document.getElementById( 'search-form-modal' ),
		button    = document.getElementById( 'modal-search-toggle' ),
		modal     = document.getElementById( 'modal-search' );

	/**
	 * No need to check for `container` and `button` as those exist for sure.
	 * Otherwise this script is not even being enqueued.
	 */
	if ( 'undefined' === typeof modal ) {
		container.style.display = 'none';
		return;
	}

	modal.setAttribute( 'aria-expanded', 'false' );

	function michelleToggleSearch() {
		container.classList.toggle( 'toggled' );
		document.body.classList.toggle( 'has-modal-search-toggled' );
		document.documentElement.classList.toggle( 'lock-scroll' );

		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			button.setAttribute( 'aria-expanded', 'false' );
			modal.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
			modal.setAttribute( 'aria-expanded', 'true' );
		}
	}

	button.onclick = function() {
		michelleToggleSearch();
	};

	/**
	 * Trap focus inside search modal.
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

		elements = container.querySelectorAll( 'a, button, input, select' );
		elements = Array.prototype.slice.call( elements );
		firstEl  = elements[0];
		lastEl   = elements[ elements.length - 1 ];

		if ( escKey ) {
			event.preventDefault();
			michelleToggleSearch();
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
