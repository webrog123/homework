<html>
<body onload="myFunction()">
    <h2>Geolocation</h2>
	<p>Click the button to get your coordinates.</p>
	<button onclick="getLocation()">Try It</button>
	<p id="demo"></p>
	<script>	
		var x = document.getElementById("demo");
		function getLocation()  {
			if (navigator.geolocation)
				navigator.geolocation.getCurrentPosition(showPosition);
			else 
				x.innerHTML = "Geolocation is not supported by this browser.";
		}
		function showPosition(position)  {
			x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;	
			var newContent = '<iframe src = "https://maps.google.com/maps?q=47.1644818,20.1983107&hl=es;z=14&amp;output=embed" width="600" height="450"></iframe>';
			var contentHolder = document.getElementById('content-holder');
			contentHolder.innerHTML = newContent;
		}
	</script>
	<p id="content-holder">Google maps: Waiting for GPS coordinates ...</p>
</body>
</html>