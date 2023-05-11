<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script type="text/javascript" src="js/main.js"></script>
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

    <div id="contact">
        <h2>Contact with us</h2>
        <p>Manager: <strong> Joe Goldberg </strong></p>
        <p>E-mail: <strong>joegoldberg@gmail.com</strong></p>
        <p>Phone: <strong> (253) 697-9984 </strong></p>
    </div>
    <br/>
    <h2>Send a message</h2>
    <form name="contact" action="./php/process_contact.php" onsubmit="return check();" method="post">
        
        <div id="form">
            <label><strong>Name</strong> <input type="text" id="name" name="name" size="20" maxlength="40" required></label>
            <br/>
            <label><strong>E-mail</strong> <input type="text" id="email" name="email" size="30" maxlength="40" required> </label>
            <br/> 
            <label><strong>Message</strong> <textarea id="textarea" name="message" cols="40" rows="6" required></textarea>  </label>
            <br/>
            <br/>
            <input id="send" type="submit" value="Send">
            
            <button onclick="check();" type="button">Check</button>
            <br/>

        </div>

    </form>
</body>
</html>
