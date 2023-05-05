<h2>Messages</h2>
<?php

	try {
    $dbh = new PDO('mysql:host=localhost;dbname=databasecontact', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
    }
	catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

	if(isset($_POST['elkuld'])){
	
		$stmt2 = $dbh->prepare("INSERT INTO uzenetek(id,name,date,email,message) VALUES('',:name,:date,:email,:text)");
		$datum = date("Y-m-d");
		$stmt2->bindParam("date", $datum, PDO::PARAM_STR);
		$stmt2->bindParam("name", $_POST['nev'], PDO::PARAM_STR);
		$stmt2->bindParam("email", $_POST['email'], PDO::PARAM_STR);
		$stmt2->bindParam("text", $_POST['szoveg'], PDO::PARAM_STR);
		$stmt2->execute();
	}else{}
?>

<table border="1">
<tr>
        <th>Date</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    
	<?php
		$stmt = $dbh->prepare("SELECT * FROM uzenetek ORDER BY date_ DESC");
        $stmt->execute();
		$count =0;
        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                echo ' 
					<tr>
						<td>'.$row['date_'].'</td>
						<td>'.$row['name_'].'</td>
						<td>'.$row['email_'].'</td>
						<td>'.$row['message_'].'</td>
					</tr>
				';
            }
	?>	
</table>