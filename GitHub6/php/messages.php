<?php
// csatlakozás az adatbázishoz
$dbh = new PDO('mysql:host=localhost;dbname=databasecontact', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
// ellenőrizd, hogy sikeres volt-e a csatlakozás
if (!$dbh) {
  die('Nem sikerült csatlakozni: ' . mysqli_connect_error());
}

// lekérdezés az adatbázisból
$query = "SELECT name, message FROM uzenetek";
$result = mysqli_query($dbh, $query);

// megjelenítés az eredményeket
while ($row = mysqli_fetch_assoc($result)) {
  echo $row['name'] . ': ' . $row['message'] . '<br>';
}

// bezárás az adatbázis kapcsolatot
mysqli_close($dbh);
?>