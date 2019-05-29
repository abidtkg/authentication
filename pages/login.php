
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="shortcut icon" href="assets/imge/logo.png" type="image/x-icon"> 
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Sign in</title>

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
      <form action="inc/login.php" method="POST">
  <img class="mb-4" src="assets/img/firewall.svg" alt="" width="100" height="100">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Phone / Email</label>
  <input name="userid" type="text" id="inputEmail" class="form-control" placeholder="Phone / Email" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input name="pwd" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input  type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>
  <a href="create.php">Create an account</a>
  <p class="mt-5 mb-3 text-muted">&copy; Abid Hasan 2019 All Rights Reserved</p>
</div>
</body>
</html>
