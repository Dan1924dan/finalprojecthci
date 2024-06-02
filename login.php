<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Von's Pizza | Login Form</title>
  <link rel="stylesheet" href="css/signup.css">
  <link rel="icon" type="image/png" href="img/logo.jpg" style="border-radius: 50%;">
  <link rel="icon" type="image/png" href="image/download.jpg">
</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center">Von's Pizza House</h3>
            <div class="text-center mb-4">
              <img src="img/logo.jpg" class="rounded-circle" alt="Von's Pizza Logo" style="width: 150px;">
            </div>
            <form method="post" action="login.php">
              <?php include('errors.php'); ?>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary" name="login_user">Login</button>
              </div>
              <p class="mt-3">
                Not yet a member? <a href="register.php">Sign up</a>
              </p>
            </form>
            <div id="output" class="mt-3"></div>
            <div id="message"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
     
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNACOuRxdmWi/3pv5ORi65i7Egh0zFRE1ZOtuc4jSk5NXNscmZBPmoA+zZWb3yZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhG8Gnop0rK04h83Jiq5F/ygtyr8f4lZwUk9e9E6zMO9pPh0PJ0U9KKaE6yh" crossorigin="anonymous"></script>
<script src="js/signup.js"></script>
</body>
</html>
