<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		#div1 {width:400px;height:300px;padding:10px;border:1px solid #aaaaaa;}
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
		function allowDrop(ev) {
			ev.preventDefault();
		}
		function drag(ev) {
			ev.dataTransfer.setData("text", ev.target.id);
		}
		function drop(ev) {
			ev.preventDefault();
			var data = ev.dataTransfer.getData("text");
			ev.target.appendChild(document.getElementById(data));
		}
	</script>
</head>
<body>
    <h2>Drag and drop API</h2>
	<h3>Drag the image into the rectangle:</h3>
	<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
	<br>
	<img id="drag1" src="./images/DragAndDrop/Dog1.jpg" draggable="true" ondragstart="drag(event)" width="400" height="300">
</body>
</html>