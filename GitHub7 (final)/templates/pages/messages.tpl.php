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

<h2>Messages</h2>
<?php

	try {
    $dbh = new PDO('mysql:host=localhost;dbname=data', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
    }
	catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

	
?>

<table border="1">
<tr>
        <th>Date</th>
        <th>Name</th>
        <th>Message</th>
    </tr>
    
	<?php
		$stmt = $dbh->prepare("SELECT * FROM uzenetek ORDER BY date_ DESC");
        $stmt->execute();
		$count =0;
        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
				
		$stmt = $dbh->prepare("SELECT * FROM uzenetek ORDER BY date_ DESC");
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    	if (!isset($_SESSION['user_name'])) {
        $row['name_'] = "Guest";
    }

                echo ' 
					<tr>
						<td>'.$row['date_'].'</td>
						<td>'.$row['name_'].'</td>
						<td>'.$row['message_'].'</td>
					</tr>
				';
            }
		}
	?>	
</table>