<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
		/* Extra small devices (phones, 600px and down) */
		@media only screen and (max-width: 600px) {
		}

		/* Small devices (portrait tablets and large phones, 600px and up) */
		@media only screen and (min-width: 600px) {
		}

		/* Medium devices (landscape tablets, 768px and up) */
		@media only screen and (min-width: 768px) {
		} 

		/* Large devices (laptops/desktops, 992px and up) */
		@media only screen and (min-width: 992px) {
		} 

		/* Extra large devices (large laptops and desktops, 1200px and up) */
		@media only screen and (min-width: 1200px) {
		}
</style>
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