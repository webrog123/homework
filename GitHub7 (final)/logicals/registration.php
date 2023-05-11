<?php
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {
	try {
		// Connecting
		$dbh = new PDO('mysql:host=localhost;dbname=data', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
		
		// Does the username already exist?
		$sqlSelect = "select id from users where user_name = :username";
		$sth = $dbh->prepare($sqlSelect);
		$sth->execute(array(':username' => $_POST['username']));
		if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
			$message = "The username already exists!";
			$again = "true";
		}
		else {
			// Register if the username doesn't exist.
			$sqlInsert = "insert into users(id, first_name, last_name, user_name, password)
						  values(0, :firstname, :lastname, :username, :password)";
			$stmt = $dbh->prepare($sqlInsert); 
			$stmt->execute(array(':firstname' => $_POST['firstname'], ':lastname' => $_POST['lastname'],
								 ':username' => $_POST['username'], ':password' => sha1($_POST['password']))); 
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