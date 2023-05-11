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

<?php
    // Application logic:
    include('photos.config.inc.php');
    
    // Collecting data:    
    $photos = array();
    $reader = opendir($FOLDER);
    while (($file = readdir($reader)) !== false) {
        if (is_file($FOLDER.$file)) {
            $end = strtolower(substr($file, strlen($file)-4));
            if (in_array($end, $TYPES)) {
                $photos[$file] = filemtime($FOLDER.$file);
            }
        }
    }
    closedir($reader);
    
    // Visualization logic:
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Products</title>
    <style type="text/css">
        div#gallery {margin: 0 auto; width: 800;}
        div.image { display: inline-block; }
        div.image img { width: 700px; }
    </style>
</head>
<body>
    <div id="gallery">
    <h2>Our products</h2>
    <?php
    arsort($photos);
    foreach($photos as $file => $date)
    {
    ?>
        <div class="image">
        <a href="<?php echo $FOLDER.$file ?>">
                <img src="<?php echo $FOLDER.$file ?>">
            </a>   
            <p><strong>Name: </strong><?php echo $file; ?></p>
            <p><strong>Date: </strong><?php echo date($DATEFORMAT, $date); ?></p>
        </div>
    <?php
    }
    ?>
    </div>
</body>
</html>
