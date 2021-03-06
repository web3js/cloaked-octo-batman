// map stuff here

var app = app || {};

app.map = (function(){

	// globals for app.map to reference
	var elements = {
		map : null,
		hoods : null,
		target : null,
		cleared : false,
		popup_content : document.querySelector('.leaflet-popup-content'),
		popup_wrapper : document.querySelector('.leaflet-popup-content-wrapper'),
		popup_submit : document.querySelector('.submit-answer')
	};

	// set up Leaflet map
	var renderMap = function(){
		console.log('renderMap() called');

		var config = {
			baselayer : new L.StamenTileLayer('toner-lite'),
			initLatLng : new L.LatLng(40.7, -74),
			initZoom : 11,
			minZoom : 4,
			maxZoom : 16,
			zoomControl : true,
			attributionControl : true
		};
		
		elements.map = L.map('map', config);

		elements.map.addLayer(config.baselayer);
		elements.map.setView(config.initLatLng, config.initZoom);
	};

	// info to display in polygon pop up when clicked on
	var createPopupContent = function(){
		var formBox = document.createElement('div'),
			formTitle = document.createElement('h3'),
			form = document.createElement('FORM');

		//'<form class=\"write-answer-form\"> <input type=\"text\" class=\"write-answer\"> <input type=\"submit\" class=\"submit-answer\" value=\"add\"> </form>',
		formBox.className = 'form-container'
		formTitle.className = 'form-title';
		formTitle.innerHTML = "What neighborhood is this?";
		form.className ='write-answer-form';
		form.action = "";
		var input = document.createElement('input');
		input.type = "text";
		input.className = "write-answer";
		var input2 = document.createElement('input');
		input2.type = "submit";
		input2.className = "submit-answer";
		input2.value = "Guess";
		form.appendChild(input);
		form.appendChild(input2);
		formBox.appendChild(formTitle);
		formBox.appendChild(form);

		return formBox;
	};

	// styles for coloring polygons' stroke and fill
	var style = {
		h : {
			color: "#ffffff",
			weight: 5,
			opacity: .8,
			fillOpacity: 0.6,
			fillColor: "#ffff00"
		},
		d : {
			color: "#FF530D",
			weight: 0,
			opacity: 0,
			fillOpacity: 0.6,
			fillColor: "#bfbfbf"			
		},
		one : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.6,
			fillColor: "#66c2a5"			
		},
		two : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.6,
			fillColor: "#fc8d62"			
		},
		three : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.6,
			fillColor: "#8da0cb"			
		},
		four : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.6,
			fillColor: "#e78ac3"			
		},
		five : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.6,
			fillColor: "#a6d854"			
		}																		
	};

	// function to style polygon features from geojson data
	var styleData = function(feature) {
		//console.log('feature color_id: ', feature.properties.color_id);
		switch(feature.properties.borough) {
			case "Manhattan" : return style.one; break;
			case "Bronx" : return style.two; break;
			case "Brooklyn" : return style.three; break;
			case "Queens" : return style.four; break;
			case "Staten Island" : return style.five; break;
			default : return style.d;
		}
		
	}

	// highlight feature on mouse-over
	var highlightFeature = function(e) {
	    var layer = e.target;

	    layer.setStyle(style.h);

	    if (!L.Browser.ie && !L.Browser.opera) {
	        layer.bringToFront();
	    }
	};

	// reset style to default on mouse out
	var resetHighlight = function(e) {
		    elements.hoods.resetStyle(e.target);
	};

	// pan and zoom to the polygon when clicked
	var zoomToFeature =	function(e) {
			console.log(e.target.feature.properties.neighborho);
			elements.target = e.target.feature.properties.neighborho;
		    elements.map.fitBounds(e.target.getBounds());
	};

	// add user interaction and pop-ups to geojson data
	var onEachFeature = function(f,l){
		//console.log('feature: ', f, ' layer: ', l);
		if (f.properties.neighborho) {
			//l.bindPopup("<p>Your Guess???</p></br>" + '<form class=\"write-answer-form\"> <input type=\"text\" class=\"write-answer\"> <input type=\"submit\" class=\"submit-answer\" value=\"add\"> </form>');			
			l.bindPopup(createPopupContent());
		}	

		l.on({
			mouseover : highlightFeature,
			mouseout : resetHighlight,
			click : zoomToFeature
		});
	};

	// load the geojson using ajax
	var fetchData = function(){
		$.getJSON('./data/nyc-hoods-pediacities.geojson', function(d){
			//console.log('hood data: ', d);

			elements.hoods = L.geoJson(d, {
				style: styleData,
				onEachFeature: onEachFeature,
			}).addTo(elements.map);
		})
		.done(function(){
			elements.hoods.on('click', app.game.attachEvents);
		})
	};

	// initialize the map
	var init = function() {
		console.log('app.map init called');
		renderMap();
		fetchData();
	};

	return {
		init : init,
		elements : elements,
		style : style
	};

})();
