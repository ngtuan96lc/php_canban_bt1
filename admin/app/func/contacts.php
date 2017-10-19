<?php
	// Get all data
	function getAllContacts(){
		global $conn;
		$contacts = array();

		$sql = "SELECT contacts.id, contacts.name, contacts.email, contacts.phone, contacts.message, contacts.status FROM contacts "; 
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$contacts[] = $row;
			}
		}
		return $contacts;
	}

	function deleteContact($id){
		global $conn;
		$sql = "UPDATE contacts SET status = 2 WHERE id = {$id}";
		if(mysqli_query($conn, $sql))
			return true;
		else {
			// echo "Code id dont match: ".mysqli_error($conn);
			return false;
		}
	}

	function readContact($id){
		global $conn;
		$sql = "UPDATE contacts SET status = 1 WHERE id = {$id}";
		if(mysqli_query($conn, $sql))
			return true;
		else 
			return false;
	}


?>