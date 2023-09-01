


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
  <div class="container">
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
        <h2>Delete product</h2>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
          <form id="contact-form" class="form" action="deleteproduct.php" method="POST" role="form">
              <div class="form-group">
                  <label class="form-label" for="name">Product Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Product name" tabindex="1" required>
              </div>                            
              <div class="text-center">
                  <button type="submit" class="btn btn-start-order">Delete product</button>
              </div>
          </form>
      </div>
  </div>
</div>
</body>
</html>