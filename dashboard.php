<?php
include "connect.php";

session_start();
$email = $_SESSION['email'];
$select = mysqli_query($conn, "SELECT * FROM  `pizzadetails` WHERE `email` = '$email'");
$details = mysqli_fetch_assoc($select);
// echo $details;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>


    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css" />


    <!--FONTAWESOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />


    <!-- BOOTSTRAP LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

</head>

<body>
    <div class="dashboard-content ">
        <div class="d-flex  container-lg-fluid container-md-fluid mx-auto">
            <div class="  bgside  rounded-2 ms-1">
                <div class="sidebar-container">
                    <div style="background-color: var(--primary-color); color: white;" class="  text-white py-3 sidebar mt-lg-3 mt-md-2 mt-0 rounded-3">
                        <div class="container-up ">
                            <div class="lines d-flex flex-column gap-1 m-auto">
                                <div class="line bg-light"></div>
                                <div class="line bg-light"></div>
                                <div class="line bg-light"></div>
                            </div>

                            <div class="home p-3 rounded-circle ">
                                <a class="text-decoration-none " href="#"> <i class="fa-solid fa-home"></i></a>
                            </div>
                            <div class="home p-3 rounded-circle ">
                                <a class="text-decoration-none " href="#"> <i class="fa-solid fa-message"></i></a>
                            </div>
                            <div class="home p-3 rounded-circle ">
                                <a class="text-decoration-none " href="#"> <i class="fa-solid fa-image"></i></a>
                            </div>

                            <div class="home p-3 rounded-circle ">
                                <a class="text-decoration-none " href="#"> <i class="fa-solid fa-chart-simple"></i></a>
                            </div>
                            <div class="home p-3 rounded-circle ">
                                <a class="text-decoration-none " href="#"> <i class="fa-solid fa-gear"></i></a>
                            </div>



                        </div>
                        <div class="container-down">
                            <div class="home p-3 rounded-circle ">
                                <a class="text-decoration-none " href="#"> <i class="fa-solid fa-right-from-bracket faright"></i></a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <div class="  bgcenter  mt-3 bg-light mx-auto ">
                <div class="dashboard-header d-flex justify-content-between">
                    <h4>Today's menu 😋</h4>
                    <div class="search rounded-pill border d-flex justify-content-around align-items-center px-2">
                        <input type="text" placeholder="Search by food name">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <div class="dashboard-image mt-3 rounded-3">
                    <div class="dashboard-image-content ">
                        <div class="container-image d-flex align-items-center ms-4 pt-5 flex-column ">
                            <h3 class="text-light">Hello, <?php echo $details['fname'] ?></h3>
                            <p class="fs-5 text-light">Get free delivery every $20 purchase</p>
                            <button class="btn  dash-btn">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="dashboard-category mt-5 ">
                    <div class="row  flex-nowrap gap-2 mx-auto  mt-3 ovx">
                        <div class="col-lg-2 col-md-5 col-6 mx-auto d-flex align-items-center dash-product flex-column py-3 rounded-3">
                            <div class="image-pizza rounded-circle">
                                <img src="./images/dashboard.png" alt="" class="rounded-circle">
                            </div>
                            <div class="product-name">
                                <h5>Pizza</h5>
                            </div>
                            <div class="product-icon p-3 rounded-circle text-light">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-5 col-6 mx-auto d-flex align-items-center dash-product flex-column py-3 rounded-3">
                            <div class="image-pizza rounded-circle">
                                <img src="./images/burgeree.png" alt="" class="rounded-circle">
                            </div>
                            <div class="product-name">
                                <h5>Burger</h5>
                            </div>
                            <div class="product-icon p-3 rounded-circle text-light">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-5 col-6 mx-auto d-flex align-items-center dash-product flex-column py-3 rounded-3">
                            <div class="image-pizza rounded-circle">
                                <img src="./images/burgeree.png" alt="" class="rounded-circle">
                            </div>
                            <div class="product-name">
                                <h5>Burger</h5>
                            </div>
                            <div class="product-icon p-3 rounded-circle text-light">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-5 col-6 mx-auto d-flex align-items-center dash-product flex-column py-3 rounded-3">
                            <div class="image-pizza rounded-circle">
                                <img src="./images/burgeree.png" alt="" class="rounded-circle">
                            </div>
                            <div class="product-name">
                                <h5>Burger</h5>
                            </div>
                            <div class="product-icon p-3 rounded-circle text-light">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-5 col-6 mx-auto d-flex align-items-center dash-product flex-column py-3 rounded-3">
                            <div class="image-pizza rounded-circle">
                                <img src="./images/burgeree.png" alt="" class="rounded-circle">
                            </div>
                            <div class="product-name">
                                <h5>Burger</h5>
                            </div>
                            <div class="product-icon p-3 rounded-circle text-light">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="dash-product-container mt-3">
                    <div id="products" class="row flex-nowrap container ovx">
                        <div class="product-dashee col-lg-4 ">
                            <div style="height:150px; width:150px; margin-bottom:-70px; " class="dash-image mx-auto">
                                <img src="./images/dashboard.png" alt="Product 1" height="100%" width="100%">
                            </div>
                            <div style="background: #fff;" class="  py-3 px-3 rounded-4 d-flex align-items-center justify-content-between">
                                <div class="pt-5">
                                    <p class="fs-5 m-0">Mushroom Pizza</p>
                                    <div class="stars d-flex">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                    <p>$10</p>
                                </div>
                                <button style="background: var(--primary-color);" class="add-to-cart p-3 rounded-circle border-0" data-name="Mushroom Pizza" data-price="10" data-image="./images/dashboard.png">
                                    <i class="fa fa-plus text-light"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-dashee col-lg-4 ">
                            <div style="height:150px; width:150px; margin-bottom:-70px; " class="dash-image mx-auto">
                                <img src="./images/dashboard.png" alt="Product 1" height="100%" width="100%">
                            </div>
                            <div style="background: #fff;" class="  py-3 px-3 rounded-4 d-flex align-items-center justify-content-between">
                                <div class="pt-5">
                                    <p class="fs-5 m-0">Italian Pizza</p>
                                    <div class="stars d-flex">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                    <p>$13</p>
                                </div>
                                <button style="background: var(--primary-color);" class="add-to-cart p-3 rounded-circle border-0" data-name="Italian Pizza" data-price="13" data-image="./images/dashboard.png">
                                    <i class="fa fa-plus text-light"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-dashee col-lg-4 ">
                            <div style="height:150px; width:150px; margin-bottom:-70px; " class="dash-image mx-auto">
                                <img src="./images/dashboard.png" alt="Product 1" height="100%" width="100%">
                            </div>
                            <div style="background: #fff;" class="  py-3 px-3 rounded-4 d-flex align-items-center justify-content-between">
                                <div class="pt-5">
                                    <p class="fs-5 m-0">Sausage Pizza</p>
                                    <div class="stars d-flex">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                    <p>$12</p>
                                </div>
                                <button style="background: var(--primary-color);" class="add-to-cart p-3 rounded-circle border-0" data-name="Sausage Pizza" data-price="12" data-image="./images/dashboard.png">
                                    <i class="fa fa-plus text-light"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=" bg-main  mx-auto mt-4 rounded-3 ">
                

                <div class="lg-screen">
                    <div class="dash-notification p-3 d-flex justify-content-center  align-item-center">
                        <div class="icon-dash mt-2">
                            <i class="fa fa-bell text-light"></i>
                        </div>
                        <div class="dash-profile d-flex">
                            <div class="dashprofile-image rounded-circle">
                                <img style="object-fit:cover;" src="./upload/<?php echo $details['picture'] ?>" class="rounded-circle border" alt="">
                            </div>
                            <div class="dashuser-name text-light">
                                <h6 class="m-0"><?php echo $details['fname']; ?></h6>
                                <p class="text-dark">User</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="debit-card bg-light mx-auto rounded-3 p-3 ">
                    <div class="">
                        <div class="debit-head d-flex justify-content-between align-items-center">
                            <p>Debit Card</p>
                            <h4 class="fw-bold">VISA</h4>
                        </div>
                        <div class="debit-bottom mt-5 d-flex justify-content-between align-items-center">
                            <div class="debit-amount">
                                <h4 class="m-0"> $1560.00</h4>
                                <p class="debit-name m-0"><?php echo $details['fname'] ?></p>
                            </div>
                            <div class="debit-icon">
                                <i class="fa fa-debit"></i>
                                <p>1234098</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-menu p-3 ">
                    <div class="order-header">
                        <h5 class="text-light">Order Menu</h5>
                    </div>
                    <div id="cart">

                        <div id="cart-items" class="d-flex flex-column gap-3">

                        </div>
                        <p class="text-light fs-5 mt-3">Total: $<span id="cart-total">0</span></p>
                    </div>
                    <div class="order-btn  mt-3 mx-5">
                        <button class="btn  btn-light px-4 rounded-pill">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- MAIN JS -->
    <script src="dash.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>