<html>
<head>
<title>Big for loop</title>
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
    <script>
        function bigLoop() {
            var worker;
            if (typeof(Worker) !== "undefined") {
                if (typeof(worker) == "undefined")
                    worker = new Worker("bigLoop.js");
                    worker.onmessage = function(event){
                    alert("Completed " + event.data + " iterations" );
                };
            } else
                alert("Sorry! No Web Worker support" );
        }
        function sayHello() {
            alert("Hello sir...." );
        }
</script>
</head>
<body>
    <h2>Web Workers</h2>
	<p>Count numbers: <output id="result"></output></p>
	<p>Random number: <output id="random"></output></p>
	<button onclick="startWorker()">Start Worker</button>
	<button onclick="stopWorker()">Stop Worker</button>
	<button onclick="sayHello()">Random number</button>
	<script>
		var w;
		function startWorker() {
			if (typeof(Worker) !== "undefined") {
				if (typeof(w) == "undefined")
					w = new Worker("counter.js");
				w.onmessage = function(event) {
					document.getElementById("result").innerHTML = event.data;
				};
			} else
				document.getElementById("result").innerHTML = "Sorry! No Web Worker support.";
		}
		function stopWorker() {
			w.terminate();
			w = undefined;
		}
		function sayHello(){
			document.getElementById("random").innerHTML = Math.round(Math.random() * 1000);
		}
	</script>
</body>
</html>