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
<body>
    <h2>Local Storage</h2>
    <script type="text/javascript">
        if( localStorage.hits )
            localStorage.hits = Number(localStorage.hits) +1;
        else
            localStorage.hits = 1;
            document.write("Total Hits :" + localStorage.hits );
    </script>
    <p>Refresh the page to increase number of hits.</p>
    <p>Close the window and open it again and check the result.</p>
</body>
</html>