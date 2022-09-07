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
                    <a class="nav-link active" aria-current="page" href="drone.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Drones
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="drone.html#agriculturaldrones">Agricultural Drones</a></li>
                        <li><a class="dropdown-item" href="drone.html#cameradrones">Carrier Drones</a></li>
                        <li><a class="dropdown-item" href="drone.html#deliverydrones">Camera Drones</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="categories.html" data-toggle="dropdown" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark force-scroll" aria-labelledby="navbarDropdown">
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
                    <a class="nav-link" href="about.html">About</a> <i class="bi bi-file-earmark-person-fill"></i>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contact"><i class="bi bi-person-lines-fill"></i>Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shopping_cart/checkouts.php"><i class="bi bi-cart3"></i>Checkout</a>
                </li>

                <form class="d-flex">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button> -->
                    <button type="button" class="btn btn-primary btn-sm shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-primary btn-sm shadow-none " data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register
                    </button>
                </form>



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
<!-- navbar modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-circle fs-3 me-2"></i>User Login</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none" id="emailheader" placeholder="Input your Email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none" id="passwordheader">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none">Login</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none"> Forgot
                            Password?</a>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Understood</button>
                    </div> -->
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="" id="register-form">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge bg-danger mb-3 text-wrap lh-base">Note: Your details must match with Your
                        ID (Aadhaar
                        card, Passport, Drivery License,etc.)
                        that will be required during check-in.</span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="nameregister" class="form-control shadow-none" id="nameregister" placeholder="Input your Name" required>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="emailregister" class="form-control shadow-none" id="emailregister" placeholder="Input your Email" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone</label>
                                <input type="number" name="phonenumregister" class="form-control shadow-none" id="phoneregister" placeholder="Input your Phone no." required>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Picture</label>
                                <input type="file" name="pictureregister" accept=".jpg,.jpeg,.png,.webp" class="form-control shadow-none" id="pictureregister" placeholder="Input your Email" required>
                            </div>
                            <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" name="addressregister" placeholder="Input yourAddress" rows="3" required></textarea>
                            </div>

                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Pincode</label>
                                <input type="number" name="pincoderegister" id="pincoderegister" placeholder="Pincode" class="form-control shadow-none" placeholder="Pincode" required>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Date of birth</label>
                                <input type="date" name="dobregister" id="dob" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="passwordregister" id="passwordregister" class="form-control shadow-none" placeholder="Password" required>
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="confirmpasswordregister" id="confirmpasswordregister" class="form-control shadow-none" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-dark shadow-none my-1" type="submit">Register</button>
                        </div>

                    </div>


            </form>
        </div>
    </div>
</div>