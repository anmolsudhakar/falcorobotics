<?php

$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';
    $username = $_POST["email"];
    $password = $_POST["password"];



    $sql = "Select * from loginusers where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $username;
                header("location:index.php");
            } else {
                $showError = "Invalid Credentials";
            }
        }
    } else {
        $showError = "Invalid Credentials";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webpage Design</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shojumaru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <style>
        .fontstyle {
            font-family: 'Shojumaru', cursive;
            color: rgb(0, 153, 255);
            text-decoration: none;
        }

        .headerclass {
            text-decoration: none;
            text-align: center;
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
    </style>
</head>

<body>
    <div class="main">
        <header>
            <div class="headerclass">
                <h1 class="fontstyle header"> <a class="fontstyle " id="headertitle" href="https://falcorobotics.in/" target="_blank">FalcoRobotics.PVT.LTD</a></h1>
            </div>
        </header>

        <div class="navbar">
            <div class="icon">
                <h2 class="logo fontstyle">FALCO ROBOTICS</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="drone.html">Drone</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="contact.html">DRONE</a></li>
                    <li><a href="BATTERY.html">BATTERY</a></li>
                    <li><a href="index.html#contact">CONTACT</a></li>
                </ul>
            </div>
            <!--                                             
            <div class="search">                                            
                <input class="srch" type="search" name="" placeholder="Type To text">                                            
                <a href="#"> <button class="btn">Search</button></a>                                            
            </div> -->
        </div>

        <?php
        if ($login) {
            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
        }
        if ($showError) {
            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
        }
        ?>
        <div class="content">
            <h1>
                <br><span>Our Ongoing Projects</span> <br>
            </h1>
            <p class="par">1. Training of Drones in Indian Army (13 Mahar Regt, 8 Mahar Jaipur, 235 Engineers Regt. )</p>
            <p class="par"> 2. Making of Customized drones, services</p>
            <button class="cn"><a href="#">ABOUT US</a></button>
            <div class="form">
                <h2>Login Here</h2>
                <input type="email" name="email" placeholder="Enter Email Here">
                <input type="password" name="password" placeholder="Enter Password Here">
                <button Type="submit" name="login" class="btnn"><a href="#">Login</a></button>
                <p class="link">Don't have an account<br>
                    <a href="signup.php">Sign up </a> here</a>
                </p>
                <p class="liw">Log in with</p>
                <div class="icons">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <!-- <a href="#">
                        <ion-icon name="logo-skype"></ion-icon>
                    </a> -->
                    <a href="#">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </div>
                
            </div>
          
        </div>
        <div class="fixed-bottom-right icons whatsappclass "><a href="https://wa.me/+919354150989?text=Hi! Please tell me something about Drone." target="_blank">
      <ion-icon ios="logo-whatsapp" md="logo-whatsapp"></ion-icon>
    </a></div>   
    </div>

    


    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>