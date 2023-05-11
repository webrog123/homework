<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
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
    </head>
    <body>
        <?php if(isset($message)) { ?>
            <h1><?= $message ?></h1>
            <?php if($again) { ?>
                <a href="index.php?oldal=belepes">Try again!</a>
            <?php } ?>
        <?php } ?>
    </body>  
</html>