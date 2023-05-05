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
            <p>Name:  <?php echo $file; ?></p>
            <p>Date:  <?php echo date($DATEFORMAT, $date); ?></p>
        </div>
    <?php
    }
    ?>
    </div>
</body>
</html>
