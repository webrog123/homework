<html>
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
<body>
    <h2>Sending emails</h2>
    <?php
        if (isset($_POST['email'])) {
            $email = $_POST['email'] ;
            $subject = $_POST['subject'] ;
            $message = $_POST['message'] ;
            mail( "somebody@mail.com", "Subject: $subject", $message, "From: $email" );
            echo "Thank you for your message.";
        } else {
            echo "<form method='post' action='sendingemails.tpl.php'>
            Email: <input name='email' type='text'><br>
            Subject: <input name='subject' type='text'><br>
            Message:<br>
            <textarea name='message' rows='15' cols='40'>
            </textarea><br>
            <input type='submit'>
            </form>";
        }
    ?>
</body>
</html>
