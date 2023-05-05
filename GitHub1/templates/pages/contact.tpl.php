<html>
<head>

    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script type="text/javascript" src="js/main.js"></script>

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
            <label><strong>Name</strong> (minimum 5 characters):<input type="text" id="name" name="name" size="20" maxlength="40"> </label>
            <br/>
            <label><strong>E-mail</strong> (required):<input type="text" id="email" name="email" size="30" maxlength="40"> </label>
            <br/> 
            <label><strong>Message</strong> (required):<textarea id="textarea" name="message" cols="40" rows="10"></textarea>  </label>
            <br/>
            <br/>
            <input id="send" type="submit" value="Send">
            
            <button onclick="check();" type="button">Check</button>
            <br/>

        </div>

    </form>
</body>
</html>
