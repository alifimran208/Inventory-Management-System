<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="form2.css">
</head>
<body>
	<div class="p-4">
<div class="container">
  <div class="row">
    <div class="col-md-5 col-sm-6 col-lg-3 mx-auto">
      <div class="formContainer">
        <h2 class="p-2 text-center mb-4 h4" id="formHeading">Login</h2>
        <form action="sign-up.inc.php" method = "post">
          <div class="form-group mt-3">
            <label class="mb-2" for="username">Username / Email ID </label>
            <input class="form-control" id="username" name="username" type="text" />
          </div>
          <div class="form-group mt-3">
            <label class="mb-2" for="password">Password</label>
            <input class="form-control" type = "password" id="password" name="password" placeholder="username" />
          </div>
          <button class="btn btn-success btn-lg w-100 mt-4" name = "submit" type = "submit" value = "submit">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>