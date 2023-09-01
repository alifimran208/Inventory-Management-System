<?php
	include('DBConnect.php');
	$name = $_POST["name"];
	$unit = $_POST['unit'];
	$price = $_POST["price"];
	$descrip = $_POST["description"];
	$sql = "SELECT * FROM Product WHERE Pname = '$name'"; 
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) == 0){
		header('location: navbar.php');
	}
	
	$sql = "UPDATE Product 
				SET Punit = '$unit', Uprice = '$price', Pdescrip = '$descrip'
				WHERE Pname = '$name'";
	if(mysqli_query($conn, $sql)){
			echo "The data has been saved to the database. ";
	}
	else{
		echo 'query error : ' . mysqli_error($conn);
	}
?>

