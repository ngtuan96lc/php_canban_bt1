<?php
	function contact_insert($name, $email, $phone, $message){
		global $conn;
		$result = false;

		$_name = mysqli_real_escape_string($conn, $name);
		$_email = mysqli_real_escape_string($conn, $email);
		$_phone = mysqli_real_escape_string($conn, $phone);
		$_message = mysqli_real_escape_string($conn, $message);

		$sql = "INSERT INTO contacts (name, email, phone, message, status) VALUES ('{$_name}', '{$_email}', '{$_phone}', '{$_message}', 0)";

		if(mysqli_query($conn, $sql)){
			$result = true;
		}else{
			$result = false;
		}

		return $result;
	}
?>