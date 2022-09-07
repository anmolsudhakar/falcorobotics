<?php
require('shopping_cart/config.php');

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shojumaru&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <style>
    .marginclass {
      margin: 3rem;
    }

    .journeyhead {
      text-align: center;
    }

    .social-footer {
      padding: 1rem;
      background: #191717;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
      justify-content: space-between;
    }

    .social-footer .social-footer-icons li:last-of-type {
      margin-right: 0;
    }

    .social-footer .social-footer-icons .fa {
      font-size: 1.3rem;
      color: #ffffff;
    }

    .social-footer .social-footer-icons .fa:hover {
      color: #000000;
      transition: color 0.3s ease-in;
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

    .aboutcard {
      display: flex;
      flex-flow: row wrap;
      justify-content: space-evenly;
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

    .padder {
      padding: 2rem;
    }

    .flexclass {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-evenly;
      align-items: center;

    }

    .marginclass1 {
      width: 15rem;
      height: 7rem;

    }

    .marginclass2 {
      width: 15rem;
      height: 7rem;
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

    .whatsappclass ion-icon:hover {
      color: #0c3302;
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
      color: blue;
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
      color: #ff7200;
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

    .textclass {
      text-align: left;
    }
  </style>
  <title>Drone</title>
</head>

<body>
  <header>
    <h1 class="fontstyle header"> <a class="navbar-brand fontstyle oceanblue" id="navbartitle" href="https://falcorobotics.in/" target="_blank">FalcoRobotics.PVT.LTD</a></h1>
  </header>

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
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
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
                <hr class="dropdown-divider">
              </li>
            </ul>
          </li>
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
          <button type="button" class="btn position-relative">
            <i class="bi bi-cart-fill" style="font-size: 2rem; color: rgb(255, 73, 57);"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
          </button>
        </div>

      </div>
    </div>

  </nav>
  <div class="container-fluid">
    <section class="section" id="home">

      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="drone5.jpg" class="d-block w-100" alt="Falco Drones">
          </div>
          <div class="carousel-item">
            <img src="done1.jpg" class="d-block w-100" alt="Falco Drones">

          </div>
          <div class="carousel-item">
            <img src="drone4.jpg" class="d-block w-100" alt="Falco Drones">

          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </section>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


  <section id="drone">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="text-uppercase section-heading">Drone</h1>
      </div>
    </div>
    <div class="container textclass">
      <p><strong>
          A drone is an unmanned aircraft. Drones are more formally known as unmanned aerial vehicles (UAVs) or unmanned
          aircraft systems. Essentially, a drone is a flying robot that can be remotely controlled or fly autonomously
          using software-controlled flight plans in its embedded systems, that work in conjunction with onboard sensors
          and a global positioning system (GPS).<br>

          UAVs were most often associated with the military. They were initially used for anti-aircraft target practice,
          intelligence gathering and, more controversially, as weapons platforms. Drones are now also used in a range of
          civilian roles, including the following:<br>

          1. search and rescue<br>
          2. surveillance<br>
          3. traffic monitoring<br>
          4. weather monitoring<br>
          5. firefighting<br>
          6. personal use<br>
          7. drone-based photography<br>
          8. videography<br>
          9.agriculture<br>
          10.delivery services<br>
        </strong></p>
    </div>
    <br>
    <div class="container-fluid">
      <div class="container aboutcard ">
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <i class="bi bi-fan" style="font-size: 2rem; color: rgb(255, 255, 255);"></i>
            <h3 class="card-title">Agriculture Drone</h3>
            <p class="card-text">An agricultural drone is an aerial vehicle used in agriculture operations,
              mostly in yield optimization and in monitoring crop growth and crop production. </p>
            <a href="agriculturedrone.html" class="btn btn-primary">Read More</a>
          </div>

        </div>
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <i class="bi bi-fan" style="font-size: 2rem; color: rgb(255, 255, 255);"></i>
            <img src="" alt="" srcset="">
            <h3 class="card-title">Camera Drone</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
              the
              card's content.</p>
            <a href="cameradrone.html" class="btn btn-primary">Read More</a>
          </div>

        </div>
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <i class="bi bi-fan" style="font-size: 2rem; color: rgb(255, 255, 255);"></i>
            <h3 class="card-title">Delivery Drone</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
              the
              card's content.</p>
            <a href="deliverydrone.html" class="btn btn-primary">Read More</a>
          </div>

        </div>
      </div>
      <div class="container flexclass">
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="agrivideo.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="video.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="cameravideo.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="carrievideo.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="firstaidvideo.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="agrivideo2.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
  </section>

  <br><br><br><br>

  <section id="agriculturaldrones">
    <div class="container-fluid">
      <div class="journeyhead">
        <h1><strong>Agricultural Drones</strong></h1>
      </div>
      <div class="container-fluid">
        <div class="journeypara ">
          <p><br><br>
            <strong>Agricultural drones are definitely going to allow producers to become much more efficient when
              growing their crops. They fall under the category of precision agriculture, which is the process of using
              high-tech systems to help farmers increase yields and cut costs. These drones provide images that
              highlight differences between the plants that are healthy and those that are not in a way that would not
              be able to be seen with the naked eye. Soil variations, pest and fungal infestations, and irrigation
              problems can all be tracked by these drones in order to increase crop production efficiency. Data
              collected by these drones can help reduce water and chemical usage, as well as help farmers decide which
              areas to harvest first by revealing high nutrient levels. These drones are relatively easy to use as they
              are equipped with autopilot with software that plans the flight path and are being developed with a
              fail-safe mechanism that automatically returns the drone to its takeoff position at the touch of a
              button.</strong>
            <br><br>
            <strong>As with all designs, there are alternatives to using drones in order to accomplish the same task.
              Satellite imagery, using traditional piloted aircraft, or simply walking the fields are all ways of
              collecting data in order to produce crop yields. However, each of these alternatives are at a disadvantage
              in some way when compared to drones. When compared to using satellites or piloted aircraft, using drones
              is much cheaper and can provide images of much higher resolution. While a drone may cost about $1000 each,
              hiring a manned aircraft can cost the same amount to run for only an hour. In addition, drones fly below
              the clouds, offering clearer pictures than those from a satellite. Lastly, drones obviously have a time
              advantage over walking the fields. Flying a drone over hundreds of acres would definitely take only a
              fraction of the time that it would in order to walk the same distance.</strong>
          </p><br><br><br>


          <p><strong>
              Despite the benefits to using a drone to improve agricultural yields, it is not without its drawbacks. The
              largest issue with using drones is that they have become the subject of political debates and public
              paranoia. After the wars in Afghanistan and Iraq, drones became largely associated with military strikes
              and surveillance operations, leading to worries over any sight of a drone, even if it was only being used
              for agricultural purposes. The Federal Aviation Administration rules have restricted civilian use of
              drones in all but a few cases. The FAA has said that a rule making exceptions to small, low flying drones
              will be introduced shortly, but some people believe that this change will not take effect until 2016.
              Overcoming fears and laws against drones may be a challenge, but I believe that their positive impact on
              the world will allow them to eventually be implemented in farms all around the world.</strong> </p>
          <br><br><br>


        </div>
      </div>

      <div class="container flexclass">
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="agrivideo.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="agrivideo2.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="agrivideo3.mp4" type="video/mp4">
          </video>
        </div>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
        <a href="shopping_cart/products.php" class="btn btn-primary" style="  cursor: pointer;">Buy</button></a>
      </div>

    </div>

  </section>

  <br>
  <br>

  <section id="cameradrones">
    <div class="container-fluid">
      <div class="journeyhead">
        <h1><strong>Camera Drones</strong></h1>
      </div>
      <div class="container-fluid">
        <div class="journeypara ">
          <p><br><br>
            <strong>Drone photography is the capture of still images and video by a remotely-operated or autonomous
              unmanned aerial vehicle (UAV), also known as an unmanned aircraft system (UAS) or, more commonly, as a
              drone.</strong>
            <br><br>
          <p>
            <strong>Drone photography allows images and audio/video to be captured that might not be otherwise possible
              for human photographers and videographers. That capacity can be enabled by the flight abilities of drones,
              their small size or their ability to tolerate harsh environments. Drone photography often enables a
              first-person view (FPV) that would normally be impossible to achieve.</strong>
          </p><br><br>


          <p><strong>
              There are many different drone sizes and designs, including fixed-wing with propeller or jet engine, as
              well as many rotor-based designs. Fixed-wing craft often have an edge on altitude and endurance but lack
              the maneuverability of rotor-based craft. Because they are often chosen for military operations, they are
              generally more threatening.</strong> </p>
          <br><br>
          <p><strong>

              For all intents and purposes, drones equipped with computer vision, face recognition, object recognition
              and other tracking technologies are flying robots. Their increasing presence in the environment is enabled
              by the combination of networking, robotics and artificial intelligence (AI). These advanced AI-capable
              drones can adapt to their environment and perform many autonomous tasks, like taking a drone-based selfie
              (also known as a “dronie”) or following an owner and taking pictures or filming while they walk around or
              travel in a vehicle.
            </strong> </p>
          <br><br>

        </div>
      </div>

      <div class="container flexclass">
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="cameravideo2.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="cameravideo.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="video.mp4" type="video/mp4">
          </video>
        </div>
      </div>

      <div class="journeyhead" style="color: green;">
        <h4><strong>Nature beauty captured by a drone</strong></h4>
      </div>


      <div class="container flexclass">
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="nature1_video.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="nature2_video.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="nature3_video.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="nature6_video.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="nature4_video.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="nature7_video.mp4" type="video/mp4">
          </video>
        </div>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
        <a href="shopping_cart/products.php" class="btn btn-primary" style="  cursor: pointer;">Buy</button></a>
      </div>
    </div>

  </section>

  <br>
  <br>

  <section id="deliverydrones">
    <div class="container-fluid">
      <div class="journeyhead">
        <h1><strong>Delivery Drones</strong></h1>
      </div>
      <div class="container-fluid">
        <div class="journeypara ">
          <p><br><br>
            <strong>A delivery drone is an unmanned aerial vehicle (UAV) used to transport packages, medical supplies,
              food, or other goods. Delivery drones are typically autonomous. In November 2020 the FAA proposed
              airworthiness criteria for type certification of delivery drones with an intent to initialize commercial
              operations. Zipline, Wingcopter, and Amazon Prime Air were amongst the 10 companies selected for this type
              certification</strong>
            <br><br>
          <p>
            <strong>Drones can be used to transport medicinal products such as blood products, vaccines,
              pharmaceuticals, and medical samples.[medical citation needed] Medical deliveries are able to fly into and
              out of remote or otherwise inaccessible regions, compared to trucks or motorcycles. Medical drone
              delivery is credited with saving lives during emergency deliveries of blood in Rwanda and post-hurricane
              relief in Puerto Rico.

              During the COVID-19 pandemic, drones made medical deliveries of personal protective equipment and COVID-19
              tests in the United States, Israel, and Ghana. In partnership with the Ghana Ministry of
              Health, Zipline drones delivered thousands of COVID-19 vaccine vials in Ghana during 2020 and
              2021.[9][10]University of British Columbia (UBC) has. selected Drone Delivery Canada Corp for UBC's
              “Remote Communities Drone Transport Initiative” program. This solution will be used to transport a variety
              of cargo for the benefit of the Stellat'en First Nation, located in the Fraser Lake area of Central
              Northern British Columbia.

              Irish drone-delivery startup Manna was ready to start deliveries as the COVID-19 pandemic started in March
              of 2020. The company quickly restructured to start making essential deliveries of prescription medication
              and food to isolated residents in the village of Moneygall, Barack Obama's ancestral home. Ireland's
              national health service, the HSE, designated Manna an essential service and it took the company a week to
              pivot from the original plan of food delivery to delivering essential medical goods.</strong>
          </p><br><br>


          <p><strong>
              Drones have been proposed as a solution for rapidly delivering prepared foods, such as pizzas, tacos, and
              frozen beverages.

              Foodpanda has piloted food deliveries in Singapore using multirotor drones from ST Engineering and in
              Pakistan using VTOL drones from Woot Tech. Early prototypes of food delivery drones include the
              Tacocopter demonstration by Star Simpson, which was a taco delivery concept utilizing a smartphone app to
              order drone-delivered tacos in San Francisco area. The revelation that it didn't exist as a delivery
              system or app led to it being labelled a hoax. A similar concept named the "burrito bomber"
              was tested in 2012.

              Manna drone delivery has been successfully delivering orders by drone from Tesco, local coffee and
              bookshops, takeaways via Just Eat in the town of Oranmore in County Galway since October, and has proved
              so popular that 35 per cent of the 3,000 or so homes in its delivery area have tried the service.</strong>
          </p>
          <br><br>
          <p><strong>

              Different postal companies from Australia, Switzerland, Germany, Singapore, the United Kingdom and
              Ukraine have undertaken various drone trials as they test the feasibility and profitability of unmanned
              delivery drone services.The USPS has been testing delivery systems with HorseFly Drones.

              The shipping line Maersk and the Port of Rotterdam have experimented with using drones to resupply
              offshore ships instead of sending smaller boats.
            </strong> </p>
          <br><br>


        </div>
      </div>

      <div class="container flexclass">
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="carrievideo.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="firstaidvideo.mp4" type="video/mp4">
          </video>
        </div>
        <div class="videos">
          <video width="420" height="290" controls autoplay muted loop>
            <source src="carriervideo.mp4" type="video/mp4">
          </video>
        </div>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
        <a href="shopping_cart/products.php" class="btn btn-primary" style="  cursor: pointer;">Buy</button></a>
      </div>

    </div>

  </section>
  <div class="fixed-bottom icons whatsappclass"><a href="https://wa.me/+919354150989?text=Hi! Please tell me something about Drone.">
      <ion-icon ios="logo-whatsapp" md="logo-whatsapp"></ion-icon>
    </a></div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <script src="script.js">

  </script>
  <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

  <script src="jquery-3.6.0.js"></script>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js">

  </script>


  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>