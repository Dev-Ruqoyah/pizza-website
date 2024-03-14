
<div class="dashboard-content ">
    <div class="row  container-lg-fluid container-md-fluid mx-auto">
        <div class="col-lg-1 col-md-1 rounded-2 ms-1">
        <?php
            include "sidebar.php";
            ?>
        </div>
        <div class="col-lg-8 col-md-8 mt-3 bg-light mx-auto">
            <div class="dashboard-header d-flex justify-content-between">
                <h4>Today's menu 😋</h4>
                <div class="search rounded-pill border d-flex justify-content-around align-items-center px-2">
                    <input type="text" placeholder= "Search by food name" >
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="dashboard-image mt-3 rounded-3">
                <div class="dashboard-image-content ">
                   <div class="container-image d-flex align-items-center ms-4 pt-5 flex-column ">
                   <h3 class="text-light">Hello, Rukayat</h3>
                    <p class="fs-5 text-light">Get free delivery every $20 purchase</p>
                    <button class="btn  dash-btn">Learn More</button>
                   </div>
                </div>
            </div>
            <div class="dashboard-category">
                <div class="d-flex flex-no-wrap mt-3">
                    <div  class="col-lg-2 col-md-2 col-4 d-flex align-items-center dash-product flex-column py-3 rounded-3">
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
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 bg-light mx-auto mt-3 rounded-3">

        </div>
    </div>
</div>



</body>
</html>