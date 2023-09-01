<?php
	include('DBConnect.php');
	$sql = "SELECT *
			FROM Product";
	$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		.container1{
			left-margin: 10px;
		}
	</style>
</head>
<body>
	<?php if(mysqli_num_rows($result) > 0){ ?>
		<div class = "container1">
		<table class="table table-hover table-dark">
		<thead>
    	<tr>
      	<th scope="col">Product name</th>
      	<th scope="col">Product unit</th>
      	<th scope="col">Unit price</th>
      	<th scope="col">Product description</th>
    	</tr>
  		</thead>
  		<tbody>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td> <?php echo $row["Pname"]; ?> </td>	
			<td> <?php echo $row["Punit"]; ?> </td>
			<td> <?php echo $row["Uprice"]; ?> </td>
			<td> <?php echo $row["Pdescrip"]; ?> </td>
		</tr>	
		<?php } ?>
		</tbody>
		</table>
		</div>	
	<?php } ?>
</body>
</html>

