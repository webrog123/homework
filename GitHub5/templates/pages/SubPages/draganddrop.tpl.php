<html>
<head>
	<style>
		#div1 {width:400px;height:300px;padding:10px;border:1px solid #aaaaaa;}
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