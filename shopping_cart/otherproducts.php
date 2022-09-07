<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping Cart System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shojumaru&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <style>
    .header {
      text-align: center;
    }
  </style>
</head>

<body>

  <header>
    <h1 class="fontstyle header"> <a class="navbar-brand fontstyle oceanblue" id="navbartitle" href="https://falcorobotics.in/" target="_blank">FalcoRobotics.PVT.LTD</a></h1>
  </header>

  <!-- Navbar start -->
  <!-- <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;Mobile Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php"><i class="fas fa-mobile-alt mr-2"></i>Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-th-list mr-2"></i>Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav> -->

  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark sticky-top">
    <div class="container-fluid padder">

      <a class="navbar-brand fontstyle oceanblue" id="navbartitle" href="#home" target="_blank">Falco Robotics
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Drones
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="shopping_cart/products.php">Agricultural Drones</a></li>
              <li><a class="dropdown-item" href="shopping_cart/products.php">Carrier Drones</a></li>
              <li><a class="dropdown-item" href="shopping_cart/products.php">Camera Drones</a></li>
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Batteries Chargers & Parts</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Multirotors and Parts</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Servos and parts</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Phantom Battery</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Hardware and Accessories</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Radios and Parts </a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Electronic Speed Control(ESC)</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Propellers</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Brushless Motors</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Boats and Parts</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Camera Fpv and video systems</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Nitro and parts</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Electronics and arudino</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Miscellaneous</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Planes and Parts</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Used Items</a></li>
              <li><a class="dropdown-item" href="shopping_cart/otherproducts.php">Gifts and Toys section</a></li>
              <li>
              <li class="nav-item">
                <a class="nav-link" href="about.php" target="_blank"><i class="bi bi-file-earmark-person-fill"></i>About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#contact"><i class="bi bi-person-lines-fill"></i>Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shopping_cart/checkouts.php"><i class="bi bi-cart3"></i>Checkout</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-left"></i>Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-in-right"></i>Logout</a>
              </li>



            </ul>
            <div class="slogan">
              <h5 class="fontstyle ">
                Your Intent We Invent
              </h5>
            </div>

            <div class="order-lg-10 nav-btns">
              <button type="button" class="btn-lg position-relative bg-dark">
                <a href="shopping_cart/cart.php"> <i class="bi bi-cart-fill" style="font-size: 1.79rem; color: rgb(186, 182, 182);"></i></a>
                <span class="position-absolute top-0 start-100 translate-middle badge bg-primary " style="font-size: 0.9rem;">5</span>
              </button>

              <!-- <button type="button" class="btn-lg position-relative bg-dark style: z-index: -1">
                        <a href="#">  <i class="bi bi-arrow-through-heart"></i></a>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
                    </button> -->
            </div>

      </div>
    </div>

  </nav>
  <!-- Navbar end -->

  <!-- Displaying Products Start -->
  <div class="container">
    <div class="row">
      <h3>Products</h3>
    </div>
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
      include 'config.php';
      $stmt = $conn->prepare('SELECT * FROM products WHERE product_cat != "Drones"');
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) :
      ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
          <div class="card-deck">
            <div class="card p-2 border-secondary mb-2">
              <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
              <div class="card-body p-1">
                <h4 class="card-title text-center text-info"><?= $row['product_title'] ?></h4>
                <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'], 2) ?>/-</h5>
                <P class="card-text text-center"><?= $row['product_desc'] ?> </P>
              </div>
              <div class="card-footer p-1">
                <form action="" class="form-submit">
                  <div class="row p-2">
                    <div class="col-md-6 py-1 pl-4">
                      <b>Quantity : </b>
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                    </div>
                  </div>
                  <input type="hidden" class="pid" value="<?= $row['product_id'] ?>">
                  <input type="hidden" class="pname" value="<?= $row['product_title'] ?>">
                  <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                  <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                  <input type="hidden" class="pcode" value="<?= $row['product_keywords'] ?>">
                  <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                    cart</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
    $(document).ready(function() {

      // Send product details in the server
      $(".addItemBtn").click(function(e) {
        e.preventDefault();
        var $form = $(this).closest(".form-submit");
        var pid = $form.find(".pid").val();
        var pname = $form.find(".pname").val();
        var pprice = $form.find(".pprice").val();
        var pimage = $form.find(".pimage").val();
        var pcode = $form.find(".pcode").val();

        var pqty = $form.find(".pqty").val();

        $.ajax({
          url: 'action.php',
          method: 'post',
          data: {
            pid: pid,
            pname: pname,
            pprice: pprice,
            pqty: pqty,
            pimage: pimage,
            pcode: pcode
          },
          success: function(response) {
            $("#message").html(response);
            window.scrollTo(0, 0);
            load_cart_item_number();
          }
        });
      });

      // Load total no.of items added in the cart and display in the navbar
      load_cart_item_number();

      function load_cart_item_number() {
        $.ajax({
          url: 'otherproducts.php',
          method: 'get',
          data: {
            cartItem: "cart_item"
          },
          success: function(response) {
            $("#cart-item").html(response);
          }
        });
      }
    });
  </script>
</body>

</html>