<?php
	include("DBConnect.php");
	$name = $_POST["username"];
	$pwd = $_POST["password"];
	$sql = ("SELECT * FROM Admin WHERE Name = '$name'");

	$result = mysqli_query($conn, $sql);
	
	$users = mysqli_fetch_assoc($result);
	//$hashedpwd = $users["Pwd"];

	//$checkpwd = password_verify($pwd, $hashedpwd);
	
	if(isset($_POST["submit"])){
		if($pwd == $users["Pwd"]){
			include('session.php');
			$_SESSION["name"] = $users["Name"];
			header("location: navbar.php");
		}	
		else{
			header("location: form.php");
		}
	}
	else header("location: form.php");


?>