<?php
	/* $server = "localhost";
	$user = "root";
	$password = "";
	$DB_name = "indoor";

	// Connect to the server.
	$connection = mysqli_connect($server, $user, $password) or die(mysql_error());

	// Create a database if it does not exist already.
	$DB_query = "CREATE DATABASE IF NOT EXISTS $DB_name";
	mysqli_query($connection, $DB_query);

	// Uncomment to check if the DB is created.
	// if(mysqli_query($connection, $DB_query)) {
	// 	echo "DB successful";
	// } else {
	// 	echo mysqli_error();
	// }

	// Connect to the database created just now!
	$connect_to_DB = mysqli_select_db($connection, $DB_name);

	// Uncomment to check if the connection with the database was successful.
	// if($connect_to_DB) {
	// 	echo "DB successful!";
	// } else {
	// 	echo mysql_error();
	// }

	// Uncomment this to check if the table already exists.
	$test_query = "SELECT id FROM data";
	$test_result = mysqli_query($connection, $test_query);

	// If the table does not exist, create one.
	if(empty($test_result)) {
		$table = "CREATE TABLE data (
			id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			latitude DOUBLE NOT NULL,
			longitude DOUBLE NOT NULL)";

		$result = mysqli_query($connection, $table);
		if(mysqli_query($connection, $table)) {
			echo "Table created!";
		} else {
			echo mysqli_error();
		}
	} */

	$data = $_POST["data"];
	$rows = array();

	while($r = mysql_fetch_assoc($data)) {
		$rows[] = $r;
	}
	echo "<pre>";
	// $lat = $_POST["latitude"];
	// $long = $_POST["longitude"];
	header("Content-type:application/json");
	echo json_encode($rows);
	print_r($_POST);
	echo "</pre>";
?>