<?php
	include('DBConnect.php');
	$name = $_POST["name"];
	$unit = $_POST['unit'];
	$sql = "SELECT * FROM Product WHERE Pname = '$name'"; 
	$result = mysqli_query($conn, $sql);

	$product = mysqli_fetch_assoc($result);

	if(mysqli_num_rows($result) == 0){
		header('location: navbar.php');
	}
	
	if($unit > $product["Punit"]){
		echo "There are not enough products to sell <br> ";
		header('location: navbar.php');
	}

    $unit1 = $product["Punit"] - $unit;

	$sql = "UPDATE Product 
				SET Punit ='$unit1'
				WHERE Pname = '$name'";
	
	if(mysqli_query($conn, $sql)){
			echo "The update has been saved to the database. ";
	}
	else{
		echo 'query error : ' . mysqli_error($conn);
	}
?>