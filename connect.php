<?php
$conn = mysqli_connect("localhost", "root", "", "db_companyprofile");

	
function query($sql) {
	global $conn;
	$result = mysqli_query($conn, $sql);

	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}
function message($data) {
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$subject = htmlspecialchars($data["subject"]);
	$message = htmlspecialchars($data["message"]);

	$sql = "INSERT INTO tb_visitors
				VALUES
			('', '$nama', '$email', '$subject','$message')";

	mysqli_query($conn, $sql);

	return mysqli_affected_rows($conn);
}