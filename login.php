<?php 
  // this is a basic authentication
  session_start(); // initialize session variables...
  // ... which are automatically destroyed after server shutdown
  
  if($_POST) {
    if(($_POST['user']=="mints") && ($_POST['password']=="12345")) { 
      $_SESSION['user']="mints";
      header("location:index.php"); 
      //$_SESSION['login']=true;

    } else {
      echo "<script> alert('Incorrect username or password') </script>";
    }
  } 

?>

<!doctype html>
<html lang="en">
  <head>
      <title>Login</title>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

      <!-- Bootstrap CSS v5.2.1 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  </head>

  <body>

      <div class="container">
          <div class="row">
              <div class="col-md-4">

              </div>

              <div class="col-md-4">
                  <br>
                  <div class="card">
                      <div class="card-header text-center">Log In</div>
                      <div class="card-body">
                          <form action="login.php" method="post">
                              User: <input class="form-control" type="text" name="user" id="">
                              <br>
                              Password: <input class="form-control" type="password" name="password" id="">
                              <br>

                              <button type="submit" class="btn btn-outline-primary">Enter to depository</button>
                          </form>
                      </div>
                      <div class="card-footer text-muted">Footer</div>
                  </div>


              </div>

              <div class="col-md-4">

              </div>
          </div>
      </div>
  </body>

</html>