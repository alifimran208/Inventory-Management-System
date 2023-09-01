<?php
	include('DBConnect.php');

	$sql = "INSERT INTO Admin (Name, Age, Pwd)
	VALUES ('Kazi Imran', 23, 'Imran@98#')";

	if(mysqli_query($conn,$sql)){
	echo "New record created successfully";
}
	//echo "Alif";
?>