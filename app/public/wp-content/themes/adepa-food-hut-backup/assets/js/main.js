/**
 * ADEPA Food Hut — front-end behaviour.
 *
 * Deliberately small: no framework, no dependency. Adds the scroll-reveal
 * class only when JavaScript is available and motion is welcome, and keeps
 * the mobile navigation tidy.
 *
 * @package ADEPA_Food_Hut
 */

( function () {
	'use strict';

	var root = document.documentElement;
	var reduceMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	root.classList.add( 'adepa-js' );

	/**
	 * Reveal sections as they enter the viewport, once.
	 */
	function initReveal() {
		var items = Array.prototype.slice.call( document.querySelectorAll( '.adepa-reveal' ) );

		if ( ! items.length ) {
			return;
		}

		if ( reduceMotion || ! ( 'IntersectionObserver' in window ) ) {
			items.forEach( function ( item ) {
				item.classList.add( 'is-visible' );
			} );
			return;
		}

		var observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						entry.target.classList.add( 'is-visible' );
						observer.unobserve( entry.target );
					}
				} );
			},
			{ rootMargin: '0px 0px -10% 0px', threshold: 0.12 }
		);

		items.forEach( function ( item ) {
				observer.observe( item );
			} );
	}

	/**
	 * Mark the current page in the navigation when WordPress has not.
	 */
	function initCurrentPage() {
		var path = window.location.pathname.replace( /\/+$/, '' ) || '/';
		var links = document.querySelectorAll( '.adepa-nav a[href]' );

		Array.prototype.forEach.call( links, function ( link ) {
			var url;

			try {
				url = new URL( link.getAttribute( 'href' ), window.location.origin );
			} catch ( error ) {
				return;
			}

			if ( url.origin !== window.location.origin ) {
				return;
			}

			var target = url.pathname.replace( /\/+$/, '' ) || '/';

			if ( target === path ) {
				link.setAttribute( 'aria-current', 'page' );
			}
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', function () {
			initReveal();
			initCurrentPage();
		} );
	} else {
		initReveal();
		initCurrentPage();
	}
}() );