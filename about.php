<?php
require('shopping_cart/config.php')

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shojumaru&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

    <title>About US</title>
    <style>
        * {
            padding: 0%;
            margin: 0%;
        }

        .box {
            background: linear-gradient(to bottom right, #ff550686 0%, #2595037f 100%);
        }

        .header {
            text-align: center;
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

        body {
            text-decoration: none;
        }

        .container {
            display: flex;
            flex-flow: row wrap;
            justify-content: space-evenly;
            text-align: center;
        }

        .card-body {
            background-color: black;
            text-align: center;
            text-decoration: none;
        }

        .card-title {
            color: white;
        }

        .card-text {
            color: orange;
        }

        .card-body:hover {
            background-color: rgba(0, 0, 0, 0.592);
        }

        .journeypara {
            text-align: center;
        }

        .container-fluid>.journeyhead>h1 {
            text-align: center;
            color: rgb(0, 0, 0);
        }

        .underimages {
            border: .25rem solid black;
            box-shadow: #ff7200;
            margin: .8rem;

        }

        .fsize {
            font-size: 2rem;
            padding: .3rem;
            margin: 2rem;
            text-size-adjust: inherit;
            color: #000000;
        }

        .flexclass {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;

        }

        .borderclass {
            box-shadow: 0.3125rem 0.3125rem #ff7200, 0.625rem 0.625rem rgb(255, 255, 255), 0.9375rem 0.9375rem #00ff5e;
        }

        .subclass {
            font-size: x-large;
            font-weight: bold;
        }

        .fontcolortexture {
            text-decoration-color: #ff7200;
        }

        .headerclass {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="header">
            <header>
                <h1 class="fontstyle header"> <a class="navbar-brand fontstyle oceanblue" id="navbartitle" href="https://falcorobotics.in/" target="_blank">FalcoRobotics.PVT.LTD</a></h1>
            </header>

        </div>
        <div class="fixed-bottom icons whatsappclass"><a href="#">
                <ion-icon ios="logo-whatsapp" md="logo-whatsapp"></ion-icon>
            </a></div>
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
                            <a class="nav-link" href="shopping_cart/checkouts.php"><i class="bi bi-cart3"></i>Checkout</a>
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
                            <a href="shopping_cart/cart.php"> <i class="bi bi-cart-fill" style="font-size: 2rem; color: rgb(255, 73, 57);"></i></a>
                            <span class="position-absolute top-0 start-100 translate-middle badge bg-primary style: z-index: -10">5</span>
                        </button>

                        <!-- <button type="button" class="btn-lg position-relative bg-dark style: z-index: -1">
                            <a href="#">  <i class="bi bi-arrow-through-heart"></i></a>
                            <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
                        </button> -->
                    </div>

                </div>
            </div>

        </nav>
        <div class="headerclass">
            <h3>
                About US
            </h3>
        </div>
        <div class="container">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, fugit molestias cum dolores officia
                repellendus maxime, quis voluptates rerum assumenda aspernatur deserunt quo necessitatibus in quae sapiente?
                Pariatur, nesciunt dicta at ut laborum alias dolores delectus similique ab, eaque exercitationem ea natus in
                unde ipsam id non molestiae provident esse perferendis error enim et. Placeat fugiat harum eum adipisci
                cumque, laboriosam itaque totam eius a? Architecto amet vel nihil magnam, nesciunt cumque ipsam. Quisquam
                atque adipisci fuga minus molestiae velit veniam, officiis, cum minima tempora quos! Quasi assumenda et,
                voluptatum aliquid iusto voluptates temporibus sapiente perferendis reiciendis odio perspiciatis dicta!
            </p>
        </div>

        <div class="container">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <i class="bi bi-book-fill" style="font-size: 2rem; color: rgb(255, 255, 255);"></i>
                    <h3 class="card-title">Journey</h3>
                    <p class="card-text">Our Story began in 2019. Back then we were a group of engineers that were giving
                        consultancy regarding Robotics and Drone.<br>
                        Today we are privileged to connect with thousands of students with exceptional teaching and more
                        than 10 schools in 5 different states and manufacturing of customized drones for both civilians and
                        defence.</p>
                    <a href="#journey" class="btn btn-primary">Read More</a>
                </div>

            </div>
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <i class="bi bi-globe" style="font-size: 2rem; color: rgb(255, 255, 255);"> </i>
                    <h3 class="card-title">Vision</h3>
                    <p class="card-text">1. Training of Drones in Indian Army (13 Mahar Regt, 8 Mahar Jaipur, 235 Engineers
                        Regt. )
                        <br>
                        2. Making of Customized drones, services.
                    </p>
                    <a href="#vision" class="btn btn-primary">Read More</a>
                </div>

            </div>
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <i class="bi bi-bookmark-fill" style="font-size: 2rem; color: rgb(255, 255, 255);"></i>
                    <h3 class="card-title">Achievements</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#achievements" class="btn btn-primary">Read More</a>
                </div>

            </div>
        </div>
        <br><br><br><br>
        <section id="journey">
            <div class="container-fluid">
                <div class="journeyhead">
                    <h1><strong>Our Journey</strong></h1>
                </div>
                <div class="container-fluid">
                    <div class="journeypara ">
                        <p><br><br>
                            <strong> Our Story began in 2019. Back then we were a group of engineers that were giving
                                consultancy
                                regarding Robotics and Drone. <br>
                                Today we are privileged to connect with thousands of students with exceptional teaching and
                                more than 10 schools in 5 different states and manufacturing of customized drones for both
                                civilians and defence.<br>
                                Falco Robotics is named after the genus of birds Falco. Our logo is inspired by the bird -
                                soul
                                calming blue colour with text written in Shojumaru font.</strong><br><br><strong> With our
                                mentors, our students and our customers at our core, we live these values:<br>
                                Creating a culture of warmth and belonging, where everyone is welcome.<br>
                                Acting with courage, integrity and challenging the status quo and finding new ways to grow
                                our company and each other.<br>
                                Being present, connecting with transparency, dignity and respect.<br>
                                Delivering our very best in all we do, holding ourselves accountable for results.<br>
                                We are performance-driven, through the lens of humanity.</strong>
                        </p><br><br><br>
                        <div class="subclass">Our Clients</div><br><br>
                        <p><strong>
                                We are pleased to have partnered with DAV Mausam Vihar, DAV Loni Road, Rotary Public School
                                Gurgaon, Defence forces etc.</strong> </p><br><br><br>
                        <div class="subclass"> Our Directors</div><br><br>
                        <p><strong>
                                Vishal Dixit<br>
                                Shivam Gupta</strong> </p><br><br><br>
                        <div class="subclass">Our Teaching</div><br><br>
                        <p><strong>
                                We’ve always believed in serving the best and latest content possible. It's our goal for all
                                of our
                                students
                                to be grown under the highest standards of quality, using ethical sourcing practices. Our
                                modules
                                personally enrich and nourish students’ knowledge in Delhi, Bihar, Chandigarh etc. And our
                                bonus
                                drone
                                modules bring out the best in the students.</strong> </p><br><br><br>
                        <div class="subclass">
                            Brand Portfolio</div><br><br>
                        <p><strong>
                                Falco Drones, Falco Training.<br>
                            </strong> </p>


                    </div>


                    <div class="images">
                        <div class="underimages borderclass" id="journeyimages-1"><img src="IMG20191024094627.jpg" alt="School photo">
                        </div><br><br>
                        <div class="container-fluid flexclass">
                            <div class="underimages borderclass" id="journeyimages-2"><img src="DRONE_EXPO_DEALING WITH_DGCA.jpg" alt=""></div>
                            <div class="fontstyle fsize fontcolortexture" style=" background: linear-gradient(to bottom right, #ff3300 33%, #ffffff 34% 67%,#006600 33%)">
                                <P style="color : linear-gradient(to bottom , #ff3300 33%, #ffffff 34% 67%,#006600 33%)" ;>
                                    <strong>
                                        Your <br><br><br><br><br>
                                        Intent<br><br><br><br><br>
                                        We <br><br><br><br><br>
                                        Invent
                                    </strong>
                                </P>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section id="vision">
            <div class="container-fluid">
                <div class="journeyhead">
                    <h1><strong>Our Vision</strong></h1>
                </div>
                <div class="journeypara ">
                    <p><br><br>
                        <strong>1. Training of Drones in Indian Army (13 Mahar Regt, 8 Mahar Jaipur, 235 Engineers Regt. )
                            <br>
                            2. Making of Customized drones, services.</strong><br>
                    </p>
                </div>
                <div class="images">
                    <div class="underimages borderclass">
                        <img src="DRONE_TRAINING_TO_ANTI_NEXALITES.jpg" alt="">
                    </div>
                    <br><br><br><br><br>

                    <div class="videos flexclass">
                        <div class="subvideo">
                            <video width="400" height="500" controls autoplay muted loop>
                                <source src="production ID_3764259.mp4" type="video/mp4">


                            </video>
                        </div>
                        <div class="subvideo">
                            <video width="600" height="500" controls autoplay muted loop>


                                <source src="pexels-cottonbro-9940814.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section id="achievements">
            <div class="container-fluid">
                <div class="journeyhead">
                    <h1><strong>Our Achievements</strong></h1>
                </div>
                <div class="journeypara ">
                    <p><br><br>
                        <strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, sit! Temporibus aliquam
                            error ratione porro quod corrupti? In nobis, impedit perspiciatis nihil quisquam ipsam molestiae
                            ratione nulla eos ad ipsa corporis laboriosam voluptas saepe rerum cumque earum. Corporis
                            nostrum officia laborum esse, error doloribus molestiae officiis porro vero maiores voluptate!

                        </strong><br>
                    </p>
                </div>

                <div class="container-flex flexclass">

                    <div class="underimages borderclass" style="text-align:center">
                        <img src="letter.png" alt="">
                        <P><strong>Startup India Certificate of Falco Robotics Private Limited</strong></P>
                    </div>


                    <div class="underimages borderclass" style="text-align:center">
                        <img src="gadchirolli.png" alt="">
                        <P><strong>Gadchiroli, Maharashtra Drone Training</strong></P>

                    </div>
                    <div class="underimages borderclass" style="text-align:center">
                        <img src="thailandtraining.png" alt="">
                        <P><strong>Startup India Certificate of Falco Robotics Private Limited</strong></P>

                    </div>
                    <div class="underimages borderclass" style="text-align:center">
                        <img src="bathinda.png" alt="">
                        <P><strong>Drone training at 235 Engineers Regiment, Bhatinda</strong></P>

                    </div>
                    <div class="underimages borderclass" style="text-align:center">
                        <img src="IPS_TRAINING_AT_IIPA.jpeg" alt="">
                        <P><strong>IPS Training at IIPA</strong></P>

                    </div>
                </div>

        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>