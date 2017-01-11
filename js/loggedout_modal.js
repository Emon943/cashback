$(document).ready(function(){

	// Wes 2014-04-07 Remove modal trigger
	// Only enable for .grab_this and .shop_now_btn
	$('a.grab_this, .shop_now_btn').addClass('md-trigger').attr('data-modal', 'modal-10').click(function(){
		return false;
	});

	/*$('a').addClass('md-trigger');
	$( "a" ).attr( "data-modal", "modal-10" );
	$('.ignore-register-modal').removeClass('md-trigger');
	$( ".ignore-register-modal" ).attr( "data-modal", "" );
	$( ".share_lo_link" ).attr( "data-modal", "modal-8" );

	// Adds data-modal so that login link opens modal on shop page when not logged in.
	$( ".share_li_link" ).attr( "data-modal", "modal-11" );

	/*$("a").on( 'click', function (e) {
	    // e == our event data
	    if(!($(this).hasClass('ignore-register-modal'))){
	    	return false;
	    } else {
	    	return true;
	    }
	    if(!($(this).hasClass('share_lo_link'))){
	    	return false;
	    } else {
	    	return true;
	    }
	    if(!($(this).hasClass('share_lo_link'))){
	    	return false;
	    } else {
	    	return true;
	    }
	});*/

	/**
	 * modalEffects.js v1.0.0
	 * http://www.codrops.com
	 *
	 * Licensed under the MIT license.
	 * http://www.opensource.org/licenses/mit-license.php
	 * 
	 * Copyright 2013, Codrops
	 * http://www.codrops.com
	 */
	var ModalEffects = (function() {

		function init() {

			var overlay = document.querySelector( '.md-overlay' );

			[].slice.call( document.querySelectorAll( '.md-trigger' ) ).forEach( function( el, i ) {

				var modal = document.querySelector( '#' + el.getAttribute( 'data-modal' ) ),
					close = modal.querySelector( '.md-close' );

				function removeModal( hasPerspective ) {
					classie.remove( modal, 'md-show' );

					if( hasPerspective ) {
						classie.remove( document.documentElement, 'md-perspective' );
					}
				}

				function removeModalHandler() {
					removeModal( classie.has( el, 'md-setperspective' ) ); 
				}

				el.addEventListener( 'click', function( ev ) {
					classie.add( modal, 'md-show' );
					overlay.removeEventListener( 'click', removeModalHandler );
					overlay.addEventListener( 'click', removeModalHandler );

					if( classie.has( el, 'md-setperspective' ) ) {
						setTimeout( function() {
							classie.add( document.documentElement, 'md-perspective' );
						}, 25 );
					}
				});

				close.addEventListener( 'click', function( ev ) {
					ev.stopPropagation();
					removeModalHandler();
				});

			} );

		}

		init();

	})();

});