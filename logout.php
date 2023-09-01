<?php
	include('session.php');
	session_destroy();
	header("location: form.php");
?>