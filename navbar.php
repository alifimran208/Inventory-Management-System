<?php
    include('session.php');
    if(!isset($_SESSION["name"])){
        header("location: form.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
      .header{
          text-align: center;
          font-weight: bold;
          color: blue;
      }
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
<div class="container-fluid">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class=" collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ms-auto ">
      <li class="nav-item">
        <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Product
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="addproductform.php">Add product</a></li>
          <li><a class="dropdown-item" href="updateproductform.php">Update product</a></li>
          <li><a class="dropdown-item" href="deleteproductform.php">Delete product</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link mx-2" href="purchaseform.php">Purchase</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mx-2" href="saleform.php">Sale</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mx-2" href="showstock.php">Stock</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mx-2" href="logout.php">Log out</a>
      </li>
    </ul>
  </div>
</div>
</nav>

    <h2 class = "header"> <?php echo "Welcome " . $_SESSION["name"]; ?> </h2>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>

