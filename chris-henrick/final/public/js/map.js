// map stuff here

var app = app || {};

app.map = ( function (w, d, $, _) {

	// globals for app.map to reference
	var elements = {
		map : null,
		hoods : null,
		target : null,
		cleared : false,
		guessedHoods: [],
		popup_content : $('.leaflet-popup-content'),
		popup_wrapper : document.querySelector('.leaflet-popup-content-wrapper'),
		popup_submit : document.querySelector('.submit-answer')
	};

	var popupTemplate = $('.leaflet-popup-form').text();
	var compiledTemplate = _.template(popupTemplate);

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
	var createPopupContent = function(feature){
		popupForm = compiledTemplate({ target: feature });		
		return popupForm;
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
			fillOpacity: 0,
			fillColor: "#bfbfbf",
			clickable: false		
		},
		g : {
			color: "#FF530D",
			weight: 1.5,
			opacity: 7,
			fillOpacity: 0.6,
			fillColor: "#000",				
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

		for (var i=0; i<elements.guessedHoods.length; i+=1) {
			var guessedHood = elements.guessedHoods[i];

			if (feature.properties.neighborho === guessedHood.hood && guessedHood.correct ===true ) {
				return style.d;
			} 
		}

		if (feature.properties.guessed === true) {
			console.log('styleData guessed = true');
			return style.d;					
		} else {
			switch(feature.properties.borough) {
			case "Manhattan" : return style.one; break;
			case "Bronx" : return style.two; break;
			case "Brooklyn" : return style.three; break;
			case "Queens" : return style.four; break;
			case "Staten Island" : return style.five; break;
			default : return style.d;
			}
		}				
	}

	// highlight feature on mouse-over
	var highlightFeature = function(e) {
		//console.log(e.target);
		if (e.target.feature.properties.guessed !== true) {
		    var layer = e.target;
		    layer.setStyle(style.h);

		    if (!L.Browser.ie && !L.Browser.opera) {
		        layer.bringToFront();
		    }
		}
	};

	// reset style to default on mouse out
	var resetHighlight = function(e) {
		if (e.target.feature.properties.guessed !== true ) {
			elements.hoods.resetStyle(e.target);
		}		    
	};

	// pan and zoom to the polygon when clicked
	var zoomToFeature =	function(e) {
		console.log(e.target.feature.properties.neighborho);
		console.log(e.target);
		elements.target = e.target;		
		elements.map.fitBounds(e.target.getBounds());
	};

	// add user interaction and pop-ups to geojson data
	var onEachFeature = function(f,l){
		//console.log('feature: ', f, ' layer: ', l);
		if (f.properties.neighborho) {
			l.bindPopup(createPopupContent(f));
		}

		f.properties.guessed = false;

		l.on({
			mouseover : highlightFeature,
			mouseout : resetHighlight,
			click : zoomToFeature
		});
	};

	// load the geojson using ajax
	var fetchData = function(){
		$.getJSON('./data/nyc-hoods-pediacities.geojson', function(d){
			console.log('hood data: ', d);
			elements.hoods = L.geoJson(d, {
				style: styleData,
				onEachFeature: onEachFeature,
			}).addTo(elements.map);
		})
		.done(function(){
			elements.hoods.on('click', app.game.attachEvents);
		})
	};

	var runCheck = function(guesses) {
		console.log('runCheck!', guesses);
		var parsedArray = _.map(guesses, function(item) {
			return JSON.parse(item.guess);
		});

		for (var i=0; i <parsedArray.length; i +=1) {
			var guess = parsedArray[i];
			elements.guessedHoods.push({
				hood: guess.hood,
				boro : guess.boro,
				correct : guess.correct
			});
		}
		console.log('parsedArray: ', parsedArray);
		console.log('elements.guessedHoods: ', elements.guessedHoods);
		
	};

	// initialize the map
	var init = function() {
		console.log('app.map init called');
		app.events.subscribe('ajax:GETcomplete', runCheck);
		renderMap();
		fetchData();		
	};

	return {
		init : init,
		elements : elements,
		style : style,
		styleData : styleData
	};

})( window, document, jQuery, _ );
