// to do:
// randomly style hood fills so that they stand out from one another?
// make a functionality that asks user for input and checks against geojson data
// make a functionality that keeps track of user's score in localstorage

var app = app || {};

app.map = (function(){

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
			color: "#ffffff",
			weight: 3,
			opacity: .7,
			fillOpacity: 0.5,
			fillColor: "#0066cc"
		},
		d : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.5,
			fillColor: "#FF530D"			
		}
	};

	var highlightFeature = function(e) {
		    var layer = e.target;

		    layer.setStyle(style.h);

		    if (!L.Browser.ie && !L.Browser.opera) {
		        layer.bringToFront();
		    }
	};

	var resetHighlight = function(e) {
		    elements.hoods.resetStyle(e.target);
	};

	var styleFeature = function(f) {
		switch(f.name) {
			case elements.target : return style.h; break;
			default : return style.d;
		}
	};

	var zoomToFeature =	function(e) {
			console.log(e.target.feature.properties.NTAName);
		    elements.map.fitBounds(e.target.getBounds());
	};

	var onEachFeature = function(f,l){
		//console.log('feature: ', f, ' layer: ', l);
		if (f.properties.NTAName) {
			l.bindPopup("<p>Your Guess???</p></br>" + app.game.attributes.popup_content);
		}

		l.on({
			mouseover : highlightFeature,
			mouseout : resetHighlight,
			click : zoomToFeature
		});
	};

	var fetchData = function(){
		$.getJSON('./data/nyc_planning_hoods.geojson', function(d){
			console.log('hood data: ', d);

			elements.hoods = L.geoJson(d, {
				style: style.d,
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
	};

})();
