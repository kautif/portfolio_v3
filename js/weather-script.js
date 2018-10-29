$(document).ready(function(){

	var x = document.getElementById("geoPlace");
	function getLocation() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position){
			var lat = position.coords.latitude;
			var long = position.coords.longitude;
				console.log("Latitute: " + lat + " Longitude: " + long);
			$.ajax({
				url: 'https://ipinfo.io/json/',
				type: 'GET',
				dataType: 'jsonp',
				success: locatePlace
			});

			function locatePlace(place) {
				$('#geoPlace').text(place.city + ', ' + place.region);
			};

			$.ajax({
				url: "https://api.openweathermap.org/data/2.5/weather?lat=" + lat + "&lon=" + long + "&appid=9f3037429a040bb01000bb0aadaad0b7",
				type: 'GET',
				dataType: 'jsonp',
				success: temperature 
			});

			function temperature(degrees) {
				var kelvin = degrees.main.temp;
				var celcius = Math.floor(kelvin - 273.15) + '&#176C';
				var far = Math.floor(kelvin * 9 / 5 - 459.67) + '&#176F';
				$('#celcius').html(celcius);
				$('#far').html(far);
				$('#sky').html(degrees.weather[0].description);

				if ($('#sky').html() === 'clear sky') {
					$('.weather-summary').css('background-image', 'url("https://media.giphy.com/media/xmW8F2ksN0KA0/giphy.gif")');

				}  else if ($('#sky').html() === 'few clouds' || $('#sky').html() === 'broken clouds' || $('#sky').html() === 'scattered clouds' || $('#sky').html() === 'haze') {
					$('.weather-summary').css('background-image', 'url("https://media.giphy.com/media/3yPbhOd3gvJXq/giphy.gif")');
				} 
				   else if ($('#sky').html() === 'light rain' || $('#sky').html() === 'moderate rain' || $('#sky').html() === 'heavy rain' || $('#sky').html() === 'thunderstorm'|| $('#sky').html() === 'mist') {
					$('.weather-summary').css('background-image', 'url("https://media.giphy.com/media/Mgq7EMQUrhcvC/giphy.gif")');
				}

			};
			
				$('.tempChange').click(function(){
					$('.tempChange').toggle();
				});

			});

		} else {
				x.innerHTML = "Your browser doesn't support geolocation."
		}
	}

    getLocation();
});