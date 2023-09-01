<?php
	include('DBConnect.php');
	$name = $_POST["name"];
	$unit = $_POST["unit"];
	$price = $_POST["price"];
	$descrip = $_POST["description"];
	
	$sql = "INSERT INTO Product (Pname, Punit, Uprice, Pdescrip)
	VALUES ('$name', '$unit', '$price', '$descrip')";

	if(mysqli_query($conn, $sql)){
		echo "New record created successfully";
	}
	else{
			echo 'query error : ' . mysqli_error($conn);
	}
?>