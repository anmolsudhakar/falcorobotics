<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];



    $sql = "Select * from loginusers where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
      $showError = "Username Already Exists";

    }

    else{



 if(($password == $cpassword)){
  $hash = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
  $result = mysqli_query($conn, $sql);
  if ($result){
      $showAlert = true;
  }
}
else{
  $showError = "Passwords do not match";
}
}
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark sticky-top">
    <div class="container-fluid padder">

      <a class="navbar-brand fontstyle oceanblue" id="navbartitle" href="#home" target="_blank">Falco Drone
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Drones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <div class="btn-group dropright">
                  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Agricultural Drones
                  </button>
                  <div class="dropdown-menu">
                  </div>
                </div>
                <div class="btn-group dropright">
                  <button type="button" class="btn btn-secondary">
                    <a class="dropdown-item" href="#">Quadcopter</a>
                  </button>
                  <button type="button" class="btn btn-secondary">
                    <a class="dropdown-item" href="#">Hexacopter</a>
                  </button>
                  <div class="dropdown-menu">
                  </div>
                </div>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <div class="btn-group dropright">
                  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Racer Drones
                  </button>
                  <div class="dropdown-menu">
                  </div>
                </div>
                <div class="btn-group dropright">
                  <button type="button" class="btn btn-secondary">
                    <a class="dropdown-item" href="#">Quadcopter</a>
                  </button>
                  <button type="button" class="btn btn-secondary">
                    <a class="dropdown-item" href="#">Hexacopter</a>
                  </button>
                  <div class="dropdown-menu">
                  </div>
                </div>
              </li>

          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Delivery Drones
              </button>
              <div class="dropdown-menu">
              </div>
            </div>
            <div class="btn-group dropright">
              <button type="button" class="btn btn-secondary">
                <a class="dropdown-item" href="#">Quadcopter</a>
              </button>
              <button type="button" class="btn btn-secondary">
                <a class="dropdown-item" href="#">Hexacopter</a>
              </button>
              <div class="dropdown-menu">
              </div>
            </div>
          </li>
        </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Batteries Chargers & Parts</a></li>
            <li><a class="dropdown-item" href="#">Multirotors and Parts</a></li>
            <li><a class="dropdown-item" href="#">Servos and parts</a></li>
            <li><a class="dropdown-item" href="#">Phantom Battery</a></li>
            <li><a class="dropdown-item" href="#">Hardware and Accessories</a></li>
            <li><a class="dropdown-item" href="#">Radios and Parts </a></li>
            <li><a class="dropdown-item" href="#">Electronic Speed Control(ESC)</a></li>
            <li><a class="dropdown-item" href="#">Propellers</a></li>
            <li><a class="dropdown-item" href="#">Brushless Motors</a></li>
            <li><a class="dropdown-item" href="#">Boats and Parts</a></li>
            <li><a class="dropdown-item" href="#">Camera Fpv and video systems</a></li>
            <li><a class="dropdown-item" href="#">Nitro and parts</a></li>
            <li><a class="dropdown-item" href="#">Electronics and arudino</a></li>
            <li><a class="dropdown-item" href="#">Miscellaneous</a></li>
            <li><a class="dropdown-item" href="#">Planes and Parts</a></li>
            <li><a class="dropdown-item" href="#">Used Items</a></li>
            <li><a class="dropdown-item" href="#">Gifts and Toys section</a></li>
            <!-- <li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <hr class="dropdown-divider">
                      </li> -->
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.html">Checkout</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login.html">Login</a>
        </li>

        </ul>
        <div class="slogan">
          <h5 class="fontstyle ">
            Your Intent We Invent
          </h5>
        </div>

        <div class="order-lg-10 nav-btns">
          <button type="button" class="btn position-relative">
            <i class="fa-light fa-shopping-cart"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
          </button>
          <button type="button" class="btn position-relative">
            <i class="fa-light fa-heart"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
          </button>
          <button type="button" class="btn position-relative">
            <i class="fa-light fa-search"></i>
          </button>
        </div>

      </div>
    </div>

  </nav>
  <?php 
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4">
     <h1 class="text-center">Signup to our website</h1>
     <form action="/loginsystem/signup.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="email" placeholder="Email" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <button type="submit" class="btn btn-primary">SignUp</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>