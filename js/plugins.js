( function() {
	'use strict';
	
	// Avoid `console` errors in browsers that lack a console.	
	var method;
	var noop = function () {};
	var methods = [
		'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
		'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
		'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
		'timeStamp', 'trace', 'warn'
	];
	var length = methods.length;
	var console = (window.console = window.console || {});

	while (length--) {
		method = methods[length];

		// Only stub undefined methods.
		if (!console[method]) {
			console[method] = noop;
		}
	}
	
	// Fix lack of ":checked" pseudo-selector in IE < 9
	$( '.lt-ie9' ).on( 'change', ':checkbox',  function() {
		var $this = $( this );
		$this[ $this.is( ':checked' ) ? 'addClass' : 'removeClass' ]( 'checked' );
	} );
} () );
