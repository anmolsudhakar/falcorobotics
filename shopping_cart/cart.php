<?php
  session_start();
  require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cart</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
  <!-- <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <! Brand -->
    <!-- <a class="navbar-brand" href="index.php"><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;Mobile Store</a> -->
    <!-- Toggler/collapsibe Button -->
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <!-- Navbar links -->
    <!-- <div class="collapse navbar-collapse" id="collapsibleNavbar">
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
  </nav>  -->
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark sticky-top">
        <div class="container-fluid padder">

            <a class="navbar-brand fontstyle oceanblue" id="navbartitle" href="#home" target="_blank">Falco Drone
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Drones
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Agricultural Drones</a></li>
                            <li><a class="dropdown-item" href="#">Carrier Drones</a></li>
                            <li><a class="dropdown-item" href="#">Camera Drones</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="categories.html" data-toggle="dropdown"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
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
                        <a class="nav-link" href="#about"><i class="bi bi-file-earmark-person-fill"></i>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="bi bi-person-lines-fill"></i>Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="checkout.html"><i class="bi bi-cart3"></i>Checkout</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-left"></i>Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right"></i>Logout</a>
                    </li>



                </ul>
                <div class="slogan">
                    <h5 class="fontstyle ">
                        Your Intent We Invent
                    </h5>
                </div>

                <div class="order-lg-10 nav-btns">
                    <button type="button" class="btn-lg position-relative bg-dark">
                        <a href="shopping_cart/cart.php"> <i class="bi bi-cart-fill"
                                style="font-size: 2rem; color: rgb(255, 73, 57);"></i></a>
                        <span
                        id="cart-item" class="position-absolute top-0 start-100 translate-middle badge bg-primary style: z-index: -10"></span>
                    </button>

                    <!-- <button type="button" class="btn-lg position-relative bg-dark style: z-index: -1">
                        <a href="#">  <i class="bi bi-arrow-through-heart"></i></a>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
                    </button> -->
                </div>

            </div>
        </div>

    </nav>

       
    
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Products in your cart!</h4>
                </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>
                  <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
                require 'config.php';
                $stmt = $conn->prepare('SELECT * FROM cart');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):
              ?>
              <tr>
                <td><?= $row['id'] ?></td>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <td><img src="<?= $row['product_image'] ?>" width="50"></td>
                <td><?= $row['product_name'] ?></td>
                <td>
                  <i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2); ?>
                </td>
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <td>
                  <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
                </td>
                <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
                <td>
                  <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              <?php $grand_total += $row['total_price']; ?>
              <?php endwhile; ?>
              <tr>
                <td colspan="3">
                  <a href="index.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                <td>
                  <a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
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