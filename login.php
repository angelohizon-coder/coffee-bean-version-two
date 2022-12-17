<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Coffee Bean</title>

  <link rel="icon" href="images/favicon/favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles-login.css">

</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8 col-md-8 col-left">
        <img src="images/6.jpg" class="img-fluid" alt="picture">
      </div>
      <div class="col-sm-4 col-md-4 col-right">
        <form action="login.php" method="post">
          <img class="mb-4 icon" src="images/coffee-cup-1.png" alt="coffee-cup" width="120" height="120">
          <div class="form-group">
            <label class="font-weight-bolder" for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          </div>
          <div class="form-group">
            <label class="font-weight-bolder" for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <button type="submit" class="btn btn-primary btn-light">Submit</button>
          <!-- <a href="index.html" class="btn btn-primary btn-light">Submit</a> -->
        </form>
      </div>
    </div>
  </div>

</body>

</html>
