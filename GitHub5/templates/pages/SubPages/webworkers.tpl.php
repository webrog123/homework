<html>
<head>
<title>Big for loop</title>
    <script>
        function bigLoop() {
            var worker;
            if (typeof(Worker) !== "undefined") {
                if (typeof(worker) == "undefined")
                    worker = new Worker("./js/bigLoop.js");
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
					w = new Worker("./js/counter.js");
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