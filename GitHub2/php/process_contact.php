<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

	try {
		// Connecting
		$dbh = new PDO('mysql:host=localhost;dbname=databasecontact', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
		
		
			// Register if the username doesn't exist.
			$sqlInsert = "insert into uzenetek(id, name_, email_, message_)
						  values(0, :name, :email, :message)";
			$stmt = $dbh->prepare($sqlInsert); 
			$stmt->execute(array(':name' => $_POST['name'], ':email' => $_POST['email'],
								 ':message' => $_POST['message'])); 
			if($count = $stmt->rowCount()) {
				$newid = $dbh->lastInsertId();
				$message = "Your registration was successful.<br>ID: {$newid}";                     
				$again = false;
			}
			else {
				$message = "Your registration wasn't successful.";
				$again = true;
			}
		
	}
	catch (PDOException $e) {
		echo "Error: ".$e->getMessage();
	$again = true;
	}      
}
else {
    header("Location: .");
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Contact Form Confirmation</title>
</head>
<body>
  <h1>Thank you for contacting us!</h1>
  <p>Your message has been received and will be processed shortly.</p>
</body>
</html>