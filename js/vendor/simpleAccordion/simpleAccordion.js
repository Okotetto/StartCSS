/*!
 * jQuery simpleAccordion
 * Original author: @Okotetto
 * Licensed under the MIT license
 */

;(function ( $, window, document, undefined ) {

	'use strict';

	// Create the defaults once
	var pluginName = "simpleAccordion";
	var defaults = {};

	var DOM = {};
	var states = {
		active: {
			opacity: 1,
			// backgroundColor: 'rgb(37, 161, 222)',
			height: 'auto'
		},
		inactive: {
			opacity: 0.5,
			// backgroundColor: 'rgba(37, 161, 222, 0.5)',
			height: '66px'
		}
	};

	// The actual plugin constructor
	function Plugin( element, options ) {
		this.element = element;

		DOM = {
			$accordion: $( element ),
			$tabs: $( '.acc-header a', element ),
			$contents: $( '.acc-content', element )
		};


		this.options = $.extend( {}, defaults, options) ;
		
		this._defaults = defaults;
		this._name = pluginName;
		
		this.init();
	}

	function setActive ( element ) {
		var $element = $( element );
		var $content = $element.parent().next('.acc-content');

		DOM.$contents.css( states.inactive );
		DOM.$tabs.removeClass( 'active' );

		$element.addClass( 'active' );
		$content.css( states.active );
	}

	function bindEvents () {
		DOM.$tabs.on( 'click', function () {
			if ( !$( this ).hasClass( 'active' ) ) {
				setActive( this );
			}

			return false;
		} );
	}

	Plugin.prototype.init = function () {
		bindEvents();

		DOM.$tabs.first().trigger('click');
	};

	$.fn[pluginName] = function ( options ) {
		return this.each(function () {
			if ( !$.data(this, "plugin_" + pluginName )) {
				$.data( this, "plugin_" + pluginName,
				new Plugin( this, options ));
			}
		});
	};
})( jQuery, window, document );