var app = app || {};

app.main = (function(){

	var elements = {
		map : null,
		hoods : null,
		target : null
	};

	var renderMap = function(){
		console.log('renderMap() called');

		var config = {
			baselayer : new L.StamenTileLayer('toner'),
			initLatLng : new L.LatLng(40.7, -74),
			initZoom : 12,
			minZoom : 4,
			maxZoom : 16,
			zoomControl : true,
			attributionControl : true
		};
		
		elements.map = L.map('map', config);

		elements.map.addLayer(config.baselayer);
		elements.map.setView(config.initLatLng, config.initZoom);

		//elements.hoods = new L.geoJson().addTo(elements.map);

	};

	var style = {
		h : {
			color: "#0066cc",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.2,
			fillColor: "#0066cc"
		},
		d : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.2,
			fillColor: "#FF530D"			
		}
	};

	var styleFeature = function(f) {
		switch(f.name) {
			case elements.target : return style.h; break;
			default : return style.d;
		}
	};

	var onEachFeature = function(f,l){
		//console.log('feature: ', f, ' layer: ', l);
	}

	var fetchData = function(){
		$.getJSON('./data/nyc_zillow_hoods.geojson', function(d){
			console.log('hood data: ', d);
			elements.hoods = L.geoJson(d, {
				style: styleFeature,
				onEachFeature: onEachFeature,
			}).addTo(elements.map);
		});
	};

	var init = function() {
		console.log('app init called');
		renderMap();
		fetchData();
	};

	return {
		init : init,
		elements : elements
	};

})();

window.addEventListener('DOMContentLoaded', app.main.init);