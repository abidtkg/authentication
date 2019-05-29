<?php
  session_start();

  //check session data
  if(isset($_SESSION['id'])){
    include 'index.php';
    exit();
  }else{

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="shortcut icon" href="assets/img/logo.svg" type="image/x-icon"/>
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Create Account</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="form-signin">
      
  <img class="mb-4" src="assets/img/server.svg" alt="" width="100" height="100">
  <h1 class="h3 mb-3 font-weight-normal">Create Account</h1>
<form action="inc/signup.php" method="POST">
  <label for="fristName" class="sr-only">Frist Name</label>
  <input name="fristName" type="fristName" id="fristName" class="form-control" placeholder="Frist Name" required autofocus>

  <label for="lastName" class="sr-only">Last Name</label>
  <input name="lastName" type="lastName" id="lastName" class="form-control" placeholder="Last Name" required autofocus>

  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

  <label for="phone" class="sr-only">Last Name</label>
  <input name="phone" type="phone" id="phone" class="form-control" placeholder="Phone Number" required autofocus>

  <label for="inputPassword" class="sr-only">Password</label>
  <input name="pwd" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Create Account</button>
  </form>
  Already have account? 
  <a href="index.php">Log in</a>
  <p class="mt-5 mb-3 text-muted">&copy; Abid Hasan 2019 All Rights Reserved</p>
</div>
</body>
</html>

<?php
  }  
?>