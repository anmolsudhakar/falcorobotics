<?php
require 'config.php';

$grand_total = 0;
$allItems = '';
$items = [];

$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
  $grand_total += $row['total_price'];
  $items[] = $row['ItemQty'];
}
$allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <style>
    #loading {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark sticky-top">
    <div class="container-fluid padder">

      <a class="navbar-brand fontstyle oceanblue" id="navbartitle" href="#home" target="_blank">Falco Drone
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
              <li><a class="dropdown-item" href="#">Agricultural Drones</a></li>
              <li><a class="dropdown-item" href="#">Carrier Drones</a></li>
              <li><a class="dropdown-item" href="#">Camera Drones</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="categories.html" data-toggle="dropdown" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            <a href="shopping_cart/cart.php" target="_blank"> <i class="bi bi-cart-fill" style="font-size: 2rem; color: rgb(255, 73, 57);"></i></a>
            <span id="cart-item" class="position-absolute top-0 start-100 translate-middle badge bg-primary "></span>
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
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total, 2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email ID" required>
          </div>
          <div class="form-group">
            <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Enter Phone No." required>
          </div>
          <div class="form-group">
            <textarea name="address" id="address" class="form-control" Enterrows="3" cols="10" placeholder="Enter Delivery Address Here..." required></textarea>
          </div>
          <!-- <h6 class="text-center lead">Select Payment Mode</h6> -->
          <!-- <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div> -->

          <div class="d-grid gap-2 col-6 mx-auto">
            <button id="rzp-button1" class="btn btn-primary" type="button" onclick="paynow()">Place Your Order</button>
            <div id="loading" style="visibility:hidden"></div>
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <script>
              function paynow() {
                document.getElementById("loading").style.visibility = "visible";
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var mobile = document.getElementById('mobile').value;
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                  var orderID = this.responseText;
                  document.getElementById("loading").style.visibility = "hidden";
                  var options = {
                    "key": "rzp_test_Qts9SJh5wvAzV1", // Enter the Key ID generated from the Dashboard
                    "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                    "currency": "INR",
                    "name": "Acme Corp",
                    "description": "Test Transaction",
                    "image": "https://example.com/your_logo",
                    //"order_id": orderID, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                    "handler": function(response) {
                      alert(response.razorpay_payment_id);
                      alert(response.razorpay_order_id);
                      alert(response.razorpay_signature)
                    },
                    "prefill": {
                      "name": name,
                      "email": email,
                      "contact": mobile
                    },
                    "notes": {
                      "address": "Razorpay Corporate Office"
                    },
                    "theme": {
                      "color": "#3399cc"
                    }
                  };
                  var rzp1 = new Razorpay(options);
                  rzp1.on('payment.failed', function(response) {
                    alert(response.error.code);
                    alert(response.error.description);
                    alert(response.error.source);
                    alert(response.error.step);
                    alert(response.error.reason);
                    alert(response.error.metadata.order_id);
                    alert(response.error.metadata.payment_id);
                  });
                  document.getElementById('rzp-button1').onclick = function(e) {
                    rzp1.open();
                    e.preventDefault();
                  }
                }
                xhttp.open("GET", "checkorder.php?name=" + name + "&email=" + email);
                xhttp.send();
              }
            </script>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
    $(document).ready(function() {

      // Sending Form data to the server
      $("#placeOrder").submit(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'shopping_cart/action.php',
          method: 'post',
          data: $('form').serialize() + "&action=order",
          success: function(response) {
            $("#order").html(response);
          }
        });
      });

      // Load total no.of items added in the cart and display in the navbar
      load_cart_item_number();

      function load_cart_item_number() {
        $.ajax({
          url: 'shopping_cart/action.php',
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