$( function () {
	$('.accordion').simpleAccordion();

	var $contentWrapper = $('.content-wrapper');
	var $leftSide = $('.left-side');

	if ( $contentWrapper.innerHeight() < window.innerHeight ) {
		$contentWrapper.height( window.innerHeight );
	}

	$leftSide.innerHeight( $contentWrapper.innerHeight() );

	$('.js-custom-select').customSelect();
	$('input, textarea').placeholder();


	var options = {
	controls: {
			panControl: true,
			zoomControl: true,
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			overviewMapControl: true
		},
		markers: [
			{
				latitude: 52.23526420307733,
				longitude: 20.996761322021484,
				html: 'e-Odczyt'
			}
		],

		latitude: 52.23526420307733,
		longitude: 20.996761322021484,
		zoom: 12
	};

	$(".js-google-map").gMap(options);

} );