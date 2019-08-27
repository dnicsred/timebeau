<?php 
require_once 'timebeau(CMS)/modules/mod_connection.php';
$name = $_POST["name"];
$phone = $_POST["phone-number"];
$email = $_POST["email"];
$message = $_POST["message"];
	
$sql = "INSERT INTO contact(conname,conphone,conemail,conmessage)VALUES('{$name}','{$phone}','{$email}','{$message}')";
	if ($stmt = $conn->prepare($sql)) {
		if ($stmt->execute()) {
		}
	}


?>