function geoFindMe() {
 

  function success(position) {
    var latitude  = position.coords.latitude;
    var longitude = position.coords.longitude;

    position = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';

    console.log(position);
}