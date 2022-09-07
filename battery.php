<?php
include_once('dbconnectstore.php');
include_once('admin/classes/Products.php');
// include_once('admin/products.php');
$query = "SELECT * FROM products" ;
$query_run = mysqli_query($conn,$query);

while($res = mysqli_fetch_array($query)){
    

}
?>


<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shojumaru&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
    <style>
        body {
            text-decoration: none;
        }

        .container {
            display: flex;
            flex-flow: row wrap;
            justify-content: space-evenly;
        }

        .card-title {
            color: white;
        }

        .card-text {
            color: orange;
        }

        .batteryheader {
            text-align: center;
        }

        <!-- .card>div>.addtocart {
            background-color: red;
            color: black;
            text-decoration: none;
            text-align: center;
            display: block;
            justify-content: center;
        }

        .card>div>.addtocart:hover {
            background-color: black;
            color: white;
            text-decoration: none;
        }

        .card>div>.addtocart:active {
            background-color: green;
            color: black;
            text-decoration: none;
        }

        -->
        .card {
            background-color: rgb(0, 0, 0);
        }

        .icons a {
            text-decoration: none;
            color: #ff7200;
        }

        .whatsappclass a {
            text-decoration: none;
            color: rgb(39, 219, 19);
        }

        .icons ion-icon {
            color: #ff7200;
            font-size: 3rem;
            padding-left: 2rem;
            padding-top: 0.313rem;
            transition: 0.3s ease;
        }

        .whatsappclass ion-icon {
            color: rgb(22, 227, 32);
            font-size: 3rem;
            padding-left: 2rem;
            padding-top: 0.313rem;
            transition: 0.3s ease;
        }

        .icons ion-icon:hover {
            color: #ff7200;
        }
    </style>
</head>

<body>

    <header class="fontstyle header">
        <h1 class="fontstyle header"> <a class="navbar-brand fontstyle oceanblue" id="navbartitle"
                href="https://falcorobotics.in/" target="_blank">FalcoRobotics.PVT.LTD</a></h1>
    </header>
    <div class="fixed-bottom icons whatsappclass"><a href="#">
            <ion-icon ios="logo-whatsapp" md="logo-whatsapp"></ion-icon>
        </a></div>

    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark sticky-top">
        <div class="container">

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
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Drones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <div class="btn-group dropright">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                <li class="nav-item">
                    <a class="nav-link" href="battery.html">Battery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html#contact">Contact Us</a>
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
                </div>

            </div>
        </div>

    </nav>


    <section id="agriculturaldrones">
        <!-- <div class="batteryheader">
            <h1>Agricultural Drones</h1>
        </div> -->
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $_SESSION['product_image']; ?>" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_SESSION['product_title']; ?></h5>
                    <p class="card-text">&#8377; <?php echo $_SESSION['product_price']; ?></p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="battery">
        <div class="batteryheader">
            <h1>Batteries Chargers & Parts</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="battery">
        <div class="batteryheader">
            <h1>Batteries Chargers & Parts</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section id="battery">
        <div class="batteryheader">
            <h1>Batteries Chargers & Parts</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories2">
        <div class="batteryheader">
            <h1>DYS Original Products</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories3">
        <div class="batteryheader">
            <h1>Multirotors and Parts</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories4">
        <div class="batteryheader">
            <h1>Servos and parts</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories5">
        <div class="batteryheader">
            <h1>Hardware and Accessories</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories6">
        <div class="batteryheader">
            <h1>Radios and Parts</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories7">
        <div class="batteryheader">
            <h1>Electronic Speed Control(ESC)</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories8">
        <div class="batteryheader">
            <h1>Propellers</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories9">
        <div class="batteryheader">
            <h1>Brushless Motors</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories10">
        <div class="batteryheader">
            <h1>Boats and Parts</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories11">
        <div class="batteryheader">
            <h1>Camera Fpv and video systems</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories12">
        <div class="batteryheader">
            <h1>Nitro and parts</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories13">
        <div class="batteryheader">
            <h1>Electronics and arudino</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories14">
        <div class="batteryheader">
            <h1>Miscellaneous
            </h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories15">
        <div class="batteryheader">
            <h1>Planes and Parts</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories16">
        <div class="batteryheader">
            <h1>Used Items</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section id="categories17">
        <div class="batteryheader">
            <h1>Gifts and Toys section</h1>
        </div>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="mavicair2.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">DJI Mavic Air 2 Intelligent Flight Battery </h5>
                    <p class="card-text">&#8377; 9200</p>
                    <button class="btn btn-danger icons">
                        <a href="#">Add to cart
                            <i class="fa-light fa-cart-shopping"></i>
                        </a>
                    </button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="dji-phantom-4-pro-plus-battery-500x500.jpg" class="card-img-top" alt="Mavic Air 2 Battery">
                <div class="card-body">
                    <h5 class="card-title">Phantom Battery </h5>
                    <p class="card-text">&#8377; 17000</p>
                    <button class=" icons btn btn-danger">
                        <a href="#">Add to cart
                            <ion-icon ios="ios-cart-outline" md="md-cart"></ion-icon>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <br><br>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>