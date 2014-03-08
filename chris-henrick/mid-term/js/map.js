// to do:
// randomly style hood fills so that they stand out from one another?
// make a functionality that asks user for input and checks against geojson data
// make a functionality that keeps track of user's score in localstorage

var app = app || {};

app.map = (function(){

	var elements = {
		map : null,
		hoods : null,
		target : null,
		popup_content : document.querySelector('.leaflet-popup-content'),
		popup_wrapper : document.querySelector('.leaflet-popup-content-wrapper'),
		popup_submit : document.querySelector('.submit-answer')
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
	};

	var createPopupContent = function(){
		var form = document.createElement('FORM');
		//'<form class=\"write-answer-form\"> <input type=\"text\" class=\"write-answer\"> <input type=\"submit\" class=\"submit-answer\" value=\"add\"> </form>',
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

		return form;
	};

	var style = {
		h : {
			color: "#ffffff",
			weight: 5,
			opacity: .8,
			fillOpacity: 0.6,
			fillColor: "#0066cc"
		},
		d : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.6,
			fillColor: "#FF530D"			
		},
		one : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.6,
			fillColor: "#b3e2cd"			
		},
		two : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.6,
			fillColor: "#fdcdac"			
		},
		three : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.6,
			fillColor: "#cbd5e8"			
		},
		four : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.6,
			fillColor: "#f4cae4"			
		},
		five : {
			color: "#FF530D",
			weight: 1.5,
			opacity: .7,
			fillOpacity: 0.6,
			fillColor: "#e6f5c9"			
		}																		
	};

	var styleData = function(feature) {
		console.log('feature color_id: ', feature.properties.color_id);
		switch(feature.properties.color_id) {
			case 0 : return style.one; break;
			case 1 : return style.two; break;
			case 2 : return style.three; break;
			case 3 : return style.four; break;
			case 4 : return style.five; break;
			default : return style.d;
		}
		
	}

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

	var attachEvents = function(){
	    $('.submit-answer').on('click', function(evt) {
	    	evt.preventDefault();
	        console.log('here');
    	});

	
		// elements.popup_wrapper.addEventListener('click', function(e) {
		// 	e.preventDefault();
		// 	var fieldValue = elements.answerField.value;
		// 	console.log('fieldValue: ', fieldValue);
		// 	// var newAnswer = new Model(fieldValue, answers).save();
		// 	// new View(newAnswer, elements.answerList).init();
		// 	elements.answerField.value = '';
		// });
	};

	var onEachFeature = function(f,l){
		//console.log('feature: ', f, ' layer: ', l);
		if (f.properties.NTAName) {
			//l.bindPopup("<p>Your Guess???</p></br>" + '<form class=\"write-answer-form\"> <input type=\"text\" class=\"write-answer\"> <input type=\"submit\" class=\"submit-answer\" value=\"add\"> </form>');			
			l.bindPopup(createPopupContent());
			// attachEvents();
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
				style: styleData,
				onEachFeature: onEachFeature,
			}).addTo(elements.map);
		})
		.done(function(){
			elements.hoods.on('click', app.game.attachEvents);
		})
	};

	var init = function() {
		console.log('app.map init called');
		renderMap();
		fetchData();
		attachEvents();
	};

	return {
		init : init,
	};

})();
