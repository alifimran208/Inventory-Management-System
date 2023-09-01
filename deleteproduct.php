<?php
	include('DBConnect.php');
	$name = $_POST["name"];
	$sql = "SELECT * FROM Product WHERE Pname = '$name'"; 
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) == 0){
		header('location: navbar.php');
	}

	$sql = "DELETE FROM Product 
				WHERE Pname = '$name'";
	if(mysqli_query($conn, $sql)){
			echo "The data has been deleted from the database.";
	}
	else{
		echo 'query error : ' . mysqli_error($conn);
	}
?>