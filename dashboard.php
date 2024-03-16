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
    <link rel="stylesheet" href="index.css" />

    <!--FONTAWESOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />


    <!-- BOOTSTRAP LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

</head>

<body>
    <div class="dashboard-content ">
        <div class="d-flex  container-lg-fluid container-md-fluid mx-auto">
            <div class="  bgside  rounded-2 ms-1">

                <?php
                include "sidebar.php";
                ?>

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
                <div class="dashboard-category mt-5">
                    <div class="row  flex-nowrap gap-2 mx-auto  mt-3 ovx">
                        <div class="col-lg-2 col-md-3 col-4 mx-auto d-flex align-items-center dash-product flex-column py-3 rounded-3">
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
                        <div class="col-lg-2 col-md-3 col-4 mx-auto d-flex align-items-center dash-product flex-column py-3 rounded-3">
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
                        <div class="col-lg-2 col-md-3 col-4 mx-auto d-flex align-items-center dash-product flex-column py-3 rounded-3">
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
                        <div class="col-lg-2 col-md-3 col-4 mx-auto d-flex align-items-center dash-product flex-column py-3 rounded-3">
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
                        <div class="col-lg-2 col-md-3 col-4 mx-auto d-flex align-items-center dash-product flex-column py-3 rounded-3">
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
                <div class="dash-product-container">
                    <div class="row flex-nowrap mt-3 ovx">
                        <div class="col-lg-4 col-md-6  col-12 ">
                            <div class="dashproduct-image mx-auto">
                                <img class="pimage" src="./images/dashboard.png" alt="">
                            </div>
                            <div class="dashproduct-details p-2 px-4 rounded-3 pt-5 pb-3 d-flex align-items-center justify-content-between">
                                <div class="dash-one pt-3">
                                    <h  5 class="pname">Mushroom Pizza</h>
                                    <div class="star d-flex">
                                        <i class="fa fa-star text-warning   "></i>
                                        <i class="fa fa-star text-warning   "></i>
                                        <i class="fa fa-star text-warning   "></i>
                                        <i class="fa fa-star text-warning   "></i>
                                        <i class="fa fa-star text-warning   "></i>
                                    </div>
                                    <div class="dash-price">
                                        <p class="pprice">$342</p>
                                    </div>
                                </div>
                                <div class="dash-two p-3 rounded-circle pt-3">
                                    <i class="fa fa-plus text-light"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 ">
                            <div class="dashproduct-image mx-auto">
                                <img src="./images/dashboard.png" alt="">
                            </div>
                            <div class="dashproduct-details p-2 rounded-3 pt-5 pb-3 d-flex align-items-center justify-content-between px-4">
                                <div class="dash-one pt-3">
                                    <h5 class="pname">Sausage Pizza</h5>
                                    <div class="star d-flex">
                                        <i class="fa fa-star text-warning   "></i>
                                        <i class="fa fa-star text-warning   "></i>
                                        <i class="fa fa-star text-warning   "></i>
                                        <i class="fa fa-star text-warning   "></i>
                                        <i class="fa fa-star text-warning   "></i>
                                    </div>
                                    <div class="dash-price">
                                        <p>$342</p>
                                    </div>
                                </div>
                                <div class="dash-two p-3 rounded-circle pt-3">
                                    <i class="fa fa-plus text-light"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 ">
                            <div class="dashproduct-image mx-auto">
                                <img src="./images/dashboard.png" alt="">
                            </div>
                            <div class="dashproduct-details p-2 rounded-3 pt-5 pb-3 d-flex align-items-center justify-content-between px-4">
                                <div class="dash-one pt-3">
                                    <h5 class="pname">Italian Pizza</h5>
                                    <div class="star d-flex">
                                        <i class="fa fa-star text-warning   "></i>
                                        <i class="fa fa-star text-warning   "></i>
                                        <i class="fa fa-star text-warning   "></i>
                                        <i class="fa fa-star text-warning   "></i>
                                        <i class="fa fa-star text-warning   "></i>
                                    </div>
                                    <div class="dash-price">
                                        <p>$342</p>
                                    </div>
                                </div>
                                <div class="dash-two p-3 rounded-circle pt-3">
                                    <i class="fa fa-plus text-light"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" bg-main mx-auto mt-4 rounded-3">
                <div class="toggle">
                    <div class="lines d-flex flex-column gap-1 m-auto">
                        <div class="line bg-light"></div>
                        <div class="line bg-light"></div>
                        <div class="line bg-light"></div>
                    </div>
                </div>

                <div class="lg-screen">
                    <div class="dash-notification p-3 d-flex justify-content-around align-item-center">
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
                    <div class="order-body gap-3 d-flex flex-column">
                        <div class="order-product d-flex justify-content-evenly align-items-center shadow p-1 rounded-2">
                            <div style="height:50px; width:50px" class="order-image  rounded-3 d-flex align-items-center justify-content-center">
                                <img src="./images/dashboard.png" width="80%" height="80%" class="rounded-circle" alt="">
                            </div>
                            <div class="order-quantity">
                                <div class="product-name text-light">
                                    <h6 class="m-0 addname">Mushroom Pizza</h6>
                                </div>
                                <div class="product-quantity m-0 text-light">
                                    <p><span>*</span> 1</p>
                                </div>
                            </div>
                            <div class="order-price text-light">
                                <p>$7.89</p>
                            </div>
                        </div>
                        <div class="order-product d-flex justify-content-evenly align-items-center shadow p-1 rounded-2">
                            <div style="height:50px; width:50px" class="order-image  rounded-3 d-flex align-items-center justify-content-center">
                                <img src="./images/dashboard.png" width="80%" height="80%" class="rounded-circle" alt="">
                            </div>
                            <div class="order-quantity">
                                <div class="product-name text-light">
                                    <h6 class="m-0 addname">Mushroom Pizza</h6>
                                </div>
                                <div class="product-quantity m-0 text-light">
                                    <p><span>*</span> 1</p>
                                </div>
                            </div>
                            <div class="order-price text-light">
                                <p>$7.89</p>
                            </div>
                        </div>
                        <div class="order-product d-flex justify-content-evenly align-items-center shadow p-1 rounded-2">
                            <div style="height:50px; width:50px" class="order-image  rounded-3 d-flex align-items-center justify-content-center">
                                <img src="./images/dashboard.png" width="80%" height="80%" class="rounded-circle" alt="">
                            </div>
                            <div class="order-quantity">
                                <div class="product-name text-light">
                                    <h6 class="m-0 addname">Mushroom Pizza</h6>
                                </div>
                                <div class="product-quantity m-0 text-light">
                                    <p><span>*</span> 1</p>
                                </div>
                            </div>
                            <div class="order-price text-light">
                                <p>$7.89</p>
                            </div>
                        </div>
                    </div>
                    <div class="order-btn  mt-3 mx-5">
                        <button class="btn  btn-light px-4 rounded-pill">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- MAIN JS -->
    <script src="dashboard.js"></script>

</body>

</html>