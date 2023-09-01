<?php
	include('DBConnect.php');
	$name = $_POST["name"];
	$unit = $_POST['unit'];
	$price = $_POST["price"];
	$sql = "SELECT * FROM Product WHERE Pname = '$name'"; 
	$result = mysqli_query($conn, $sql);

	$product = mysqli_fetch_assoc($result);

	if(mysqli_num_rows($result) == 0){
		header('location: navbar.php');
	}
	

    $unit1 = $product["Punit"] + $unit;
    $price1 = $price;

	$sql = "UPDATE Product 
				SET Punit ='$unit1', Uprice = '$price1'
				WHERE Pname = '$name'";
	if(mysqli_query($conn, $sql)){
			echo "The data has been saved to the database. ";
	}
	else{
		echo 'query error : ' . mysqli_error($conn);
	}
?>