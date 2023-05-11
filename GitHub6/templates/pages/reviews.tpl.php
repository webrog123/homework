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
    include('config.inc.php');
    
    // Collecting data:    
    $images = array();
    $reader = opendir($FOLDER);
    while (($file = readdir($reader)) !== false) {
        if (is_file($FOLDER.$file)) {
            $end = strtolower(substr($file, strlen($file)-4));
            if (in_array($end, $TYPES)) {
                $images[$file] = filemtime($FOLDER.$file);
            }
        }
    }
    closedir($reader);
    
    // Visualization logic:
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Reviews</title>
    <style type="text/css">
        div#gallery {margin: 0 auto; width: 800;}
        div.image { display: inline-block; }
        div.image img { width: 200px; }
    </style>
</head>
<body>
    <div id="gallery">
    <h2>Product reviews from our customers</h2>
    <?php
    arsort($images);
    foreach($images as $file => $date)
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
