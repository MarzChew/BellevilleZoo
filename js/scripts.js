			var $container = $('.home #loop-wrapper');	


(function($, root, undefined) {
	$(function() {
		
		$container.imagesLoaded( function() {
				picturefill();

		 $container.masonry({
		
				// options
				itemSelector: '.post'
			});
});	
		$container.infinitescroll({
			navSelector: 'div.pagination',
			nextSelector: 'div.pagination a.next',
			itemSelector: 'article.post',
			loading: {
				finishedMsg: 'No more pages to load.'
			}
		}, function(newElements) {
					picturefill();

        var $newElems = $(newElements)
			$newElems.imagesLoaded(function() {

			$container.masonry( 'appended', $newElems, true ); 
			});
		});

	
	

  $.adaptiveBackground.run()
	
	
	
	});
})(jQuery, this);

$( window ).resize(function() {
	
		
		$container.imagesLoaded( function() {
		picturefill();

		 $container.masonry({
		
				// options
				itemSelector: '.post'
			});
});	
});


$( window ).load(function() {
  // Run code
  
  		$container.imagesLoaded( function() {
		picturefill();

		 $container.masonry({
		
				// options
				itemSelector: '.post'
			});
});	
});


//
// Google Maps functions 
//
// Google Maps vars
var myLatlng; // Add the coordinates
var mapOptions = {}
var geocoder;
var map;
var defaultZoom = 10;
var image;
var xmlUrl;
var infoWindow;
var markers;
var contactUrl;
var ctaLayer;


/*

https://api.foursquare.com/v2/multi?requests=/users/self/photos,/users/self/checkins&oauth_token=GHG3D4P31R3BSYOWC5C1MTQLJLSRKG0AAMDGC4VYSV0TTABN&v=20140804
*/


function LoadFoursquare() {
	$.get("https://api.foursquare.com/v2/users/self/checkins?oauth_token=GHG3D4P31R3BSYOWC5C1MTQLJLSRKG0AAMDGC4VYSV0TTABN&v=20140804", function(data) {
		data = data.response.checkins;
		$(data.items).each(function() {
			var name = this.venue.name;
			var address = this.venue.location.formattedAddress;
			var point = new google.maps.LatLng(
			parseFloat(this.venue.location.lat), parseFloat(this.venue.location.lng))
			var html = "<div class='infowindow'><b>" + name + "</b> <br/>" + address + '<br/></div>';
			var marker = new google.maps.Marker({
				map: map,
				position: point,
				title: name
			});
			bindInfoWindow(marker, map, infoWindow, html);
		});
	});
};

function bindInfoWindow(marker, map, infoWindow, html){
	google.maps.event.addListener(marker, 'click', function() {
		infoWindow.setContent(html);
		infoWindow.open(map, marker);
	});
}

function initialize() {
	var map_canvas = document.getElementById('map_canvas');
	var map_options = {
		center: new google.maps.LatLng(48.856614, 2.352222),
		zoom: 13,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	geocoder = new google.maps.Geocoder();
	infoWindow = new google.maps.InfoWindow;
	map = new google.maps.Map(map_canvas, map_options);
	LoadFoursquare();
}
google.maps.event.addDomListener(window, 'load', initialize);