function weatherBalloon( cityID ) {
    
    var key = '9b8cbae357420e30f7dcbd556893f7aa';
    fetch('https://api.openweathermap.org/data/2.5/weather?id=' + cityID+ '&lang=fr' + '&appid=' + key)  
    .then(function(resp) { return resp.json() }) // Convert data to json
    .then(function(data) {
      drawWeather(data);
      console.log(data);
    })
    .catch(function() {
      // catch any errors
    });
  }
  function drawWeather( d ) {
    var celcius = Math.round(parseFloat(d.main.temp)-273.15);
    // var fahrenheit = Math.round(((parseFloat(d.main.temp)-273.15)*1.8)+32);
    var description = d.weather[0].description; 
    var vent = (d.wind.speed)*3.6;
    
    document.getElementById('description').innerHTML = description;
    document.getElementById('temp').innerHTML = celcius + '&deg;' + "c";
    document.getElementById('wind').innerHTML = "Le vent souffle à " + vent + "km/h";
    // document.getElementById('location').innerHTML = "Tenirac";

}
  
  window.onload = function() {
    weatherBalloon( 6437360 );

    
  }