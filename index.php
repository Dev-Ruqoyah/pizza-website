<!DOCTYPE html>
<html lang="en">

<?php
include "header.php"

?>

<!-- MAIN SECTION -->
<main class="overflow-x-hidden">
  <!-- NAVBAR -->


  <section class="hero-section">
    <div class="container">
      <div class="row position-relative">
        <div class="col-lg-12 col-md-12 h-5 d-flex justify-content-center mt-5">
          <div class="hero-content text-light h-100 d-flex flex-column align-items-start justify-content-center my-auto pb-5 pt-3 mt-4">
            <h1>
              Enjoy Our <br />
              Delicious <span>Food</span>
            </h1>
            <p class="border w-100"></p>
            <p class="text-light fs-4">
              Get a taste of perfection with every slice!
            </p>
          <a href="login.php" class="text-decoration-none">   <buttom class="btn btn-lg btn-light px-5">Try It Now</buttom></a>
          </div>
          <div class="signs d-none d-lg-block">
            <img class="one" src="./images/7.png" width="5%" alt="" />
          </div>
          <div class="round d-none d-lg-block">
            <img class="two" src="./images/8.png" width="10%" alt="" />
            <img src="./images/4.png" class="three top-50" width="10%" alt="" />
          </div>
        </div>
        <!-- <div class="col-lg-6 col-md-6 h-100 animate__animated animate__infinite animate__slower 3s animate__bounce">
          <div class="image-hero pt-lg-5 pb-lg-0 pb-md-0 pb-4">
            <img src="./images/panel.png" width="100%" height="100%" alt="" />
          </div>
        </div> -->
      </div>
    </div>
  </section>
</main>

<!-- 
      PRODUCT SECTION
     -->
<section class="products py-5 overflow-x-hidden overflow-y-hidden">
  <div class="row container mx-auto gap-2 d-flex justify-content-center">
    <div class="col-lg-3 product rounded-3 col-md-6 col-12 my-auto" data-aos="fade-up-right" data-aos-duration="3000">
      <div class="container py-5 px-1 d-flex flex-column align-items-center justify-content-center">
        <div class="icon">
          <i class="fa fa-pizza-slice fs-3"></i>
        </div>
        <div class="product-text text-center">
          <h4>Maxican Pizza</h4>
          <p>
            Food is any substance consumed to provide nutritional support
            for an organism.
          </p>
        </div>
        <div class="product-image">
          <img src="images/promo-1.png" width="100%" height="100%" alt="" />
        </div>
      </div>
    </div>
    <div class="col-lg-3 product col-md-6 col-12 my-auto rounded-3" data-aos="fade-up-right" data-aos-duration="3000">
      <div class="container py-5 px-1 d-flex flex-column align-items-center justify-content-center">
        <div class="icon">
          <i class="fa fa-pizza-slice fs-3"></i>
        </div>
        <div class="product-text text-center">
          <h4>Soft Drink</h4>
          <p>
            Food is any substance consumed to provide nutritional support
            for an organism.
          </p>
        </div>
        <div class="product-image">
          <img src="images/promo-2.png" width="100%" height="100%" alt="" />
        </div>
      </div>
    </div>
    <div class="col-lg-3 product col-md-6 col-12 my-auto rounded-3" data-aos="fade-up-left" data-aos-duration="3000">
      <div class="container py-5 px-1 d-flex flex-column align-items-center justify-content-center">
        <div class="icon">
          <i class="fa fa-pizza-slice fs-3"></i>
        </div>
        <div class="product-text text-center">
          <h4>French Fry</h4>
          <p>
            Food is any substance consumed to provide nutritional support
            for an organism.
          </p>
        </div>
        <div class="product-image">
          <img src="images/promo-3.png" width="100%" height="100%" alt="" />
        </div>
      </div>
    </div>
    <div class="col-lg-3 product col-md-6 col-12 my-auto rounded-3" data-aos="fade-up-left" data-aos-duration="3000">
      <div class="container py-5 px-1 d-flex flex-column align-items-center justify-content-center">
        <div class="icon">
          <i class="fa fa-pizza-slice fs-3"></i>
        </div>
        <div class="product-text text-center">
          <h4>Burger Kingo</h4>
          <p>
            Food is any substance consumed to provide nutritional support
            for an organism.
          </p>
        </div>
        <div class="product-image">
          <img src="images/promo-4.png" width="100%" height="100%" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>

<!--
       ABOUT SECTION
     -->
<section class="about py-5 overflow-x-hidden" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 container animate__animated animate__infinite animate__slower 3s animate__bounce">
        <div class="image position-relative pt-5">
          <img src="./images/pizz.png" width="100%" alt="" />
          <div class="mini-image position-absolute top-0 pt-5">
            <img src="./images/sale-shape-red.png" width="70%" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12 container">
        <div class="about-header">
          <h2 class="fs-1 px-3">
            Caferio, Burgers, <br />
            and Best Pizzas <br />
            <span>in Town!</span>
          </h2>
          <p class="fs-4 px-3">
            The restaurants in Hangzhou also catered to many northern
            Chinese who had fled south from Kaifeng during the Jurchen
            invasion of the 1120s, while it is also known that many
            restaurants were run by families.
          </p>
          <ul class="goods d-flex flex-column gap-1 fs-5">
            <li>Delicious and healthy food</li>
            <li>Spacific Family And Kids Zone</li>
            <li>Music & Other Facilities</li>
            <li>Fastest Food Home Delivery</li>
          </ul>
          <button class="aboutbtn btn ms-3">Order Now</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!--------------------- 
        MENU RESTAURANT
    ----------------------->
<section class="delicious pb-5 pt-4 overflow-x-hidden" id="menu">
  <div class="container">
    <div class="menu-header text-center">
      <p class="food fs-5 text-light font-weight-italise m-0">Food Items</p>
      <h4 class="text-center fs-1 text-light m-0">
        Popular <span>Menu</span>
      </h4>
    </div>
    <div class="row pt-5 gap-2 ">

      <!-- MENU  ONE -->
      <div class="menu-menu col-lg-2 col-md-2 col-4 bg-light py-4 d-flex flex-column gap-2 rounded-3 mx-auto" data-aos="fade-up" data-aos-duration="3000">
        <div class="image mx-auto">
          <img src="./images/pizza (1).png" width="100%" alt="" />
        </div>
        <div class="desc text-center">
          <h4>Pizza</h4>
        </div>
      </div>
      <!-- MENU TWO -->
      <div class="menu-menu col-lg-2 col-md-2 col-4 bg-light py-4 d-flex flex-column gap-2 rounded-3 mx-auto" data-aos="fade-up" data-aos-duration="3000">
        <div class="image mx-auto">
          <img src="./images/burger.png" width="100%" alt="" />
        </div>
        <div class="desc text-center">
          <h4>Burger</h4>
        </div>
      </div>
      <!-- MENU THREE -->
      <div class="menu-menu col-lg-2 col-md-2 col-4 bg-light py-4 d-flex flex-column gap-2 rounded-3 mx-auto" data-aos="fade-up" data-aos-duration="3000">
        <div class="image mx-auto">
          <img src="./images/chicken.png" width="100%" alt="" />
        </div>
        <div class="desc text-center">
          <h4>Chicken</h4>
        </div>
      </div>
      <!-- MENU FOUR -->
      <div class="menu-menu col-lg-2 col-md-2 col-4 bg-light py-4 d-flex flex-column gap-2 rounded-3 mx-auto" data-aos="fade-up" data-aos-duration="3000">
        <div class="image mx-auto">
          <img src="./images/drinks.png" width="100%" alt="" />
        </div>
        <div class="desc text-center">
          <h4>Drinks</h4>
        </div>
      </div>
      <!-- MENU FIVE -->
      <div class="menu-menu col-lg-2 col-md-2 col-4 bg-light py-4 d-flex flex-column gap-2 rounded-3 mx-auto" data-aos="fade-up" data-aos-duration="3000">
        <div class="image mx-auto">
          <img src="./images/drinks2.png" width="100%" alt="" />
        </div>
        <div class="desc text-center">
          <h4>Drinks</h4>
        </div>
      </div>
      <!-- MENU SIX -->
      <div class="menu-menu col-lg-2 col-md-2 col-4 bg-light py-4 d-flex flex-column gap-2 rounded-3 mx-auto" data-aos="fade-up" data-aos-duration="3000">
        <div class="image mx-auto">
          <img src="./images/combo.png" width="100%" alt="" />
        </div>
        <div class="desc text-center">
          <h4>Combo Menu</h4>
        </div>
      </div>


    </div>
    <!-- SPECIALITY -->
    <div class="speciality mt-5">
      <div class="container2-header pb-4">
        <h4 class="text-center fs-1 text-light">Popular <span style="color: var(--primary-color);">Speciality</span></h4>
      </div>
      <div class="container py-4 bg-light mx-auto  rounded-3">

        <div class="row container  mx-auto ">
          <div class="col-lg-3 pizz-pizz mx-auto pt-5">
            <div class="py-3 d-flex flex-column align-items-start justify-content-center">
              <div class="pizza-images ">
                <img src="./images/shirmp-pizza.png" class=" animate__animated animate__infinite animate__slower 3s animate__bounce" width="100%" alt="">
              </div>
              <div class="pizza-description">
                <h4>Cheese pizza</h4>
                <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="pizza-price d-flex align-items-center gap-5 ">
                <div class="price fs-5">$12.95</div>
                <button class="btn pizzbtn ms-1">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 pizz-pizz mx-auto pt-5">
            <div class="py-3 d-flex flex-column align-items-start justify-content-center">
              <div class="pizza-images">
                <img src="./images/barbeque-chicken.png" class="animate__animated animate__infinite animate__slower 3s animate__bounce" width="100%" alt="">
              </div>
              <div class="pizza-description">
                <h4>Barbeque Chicken</h4>
                <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="pizza-price d-flex align-items-center gap-5 ">
                <div class="price fs-5">$12.35</div>
                <button class="btn pizzbtn ms-1">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 pizz-pizz mx-auto pt-5">
            <div class="py-3 d-flex flex-column align-items-start justify-content-center">
              <div class="pizza-images">
                <img src="./images/pepperoni.png" class="animate__animated animate__infinite animate__slower 3s animate__bounce" width="100%" alt="">
              </div>
              <div class="pizza-description">
                <h4>Pepperoni</h4>
                <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="pizza-price d-flex align-items-center gap-5 ">
                <div class="price fs-5">$12.35</div>
                <button class="btn pizzbtn ms-1">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 pizz-pizz mx-auto pt-5">
            <div class="py-3 d-flex flex-column align-items-start justify-content-center">
              <div class="pizza-images">
                <img src="./images/vegetarian.png" class="animate__animated animate__infinite animate__slower 3s animate__bounce" width="100%" alt="">
              </div>
              <div class="pizza-description">
                <h4>Vegetarian</h4>
                <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="pizza-price d-flex align-items-center gap-5 ">
                <div class="price fs-5">$12.35</div>
                <button class="btn pizzbtn ms-1">Add to Cart</button>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

  </div>
</section>


<!-- ----------------- 
      FAST DELIVERY
     --------------------->
<section class="delivery pb-5 pt-4 overflow-x-hidden">
  <div class="container">
    <div class="row container mx-auto">
      <div class="col-lg-6 col-md-6 col-12 d-flex flex-column justify-content-center">
        <div class="delivery-header">
          <h1 class="text-light fs-1">A Moments Of <br> Delivered On <br> <span>Right Time </span>& Place</h1>
        </div>
        <div class="delivery-content text-light fs-5">
          <p class="pe-5">The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families.</p>

          <button class="btn delibtn btn-lg">Order now</button>


        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12 delimage">
        <div class="container-image deliimage">
          <img src="./images/delivery-boy.svg" width="100%" alt="">
        </div>
      </div>
    </div>
  </div>
</section>


<!------------------- 
      TESTIMONIAL
      -------------------->
<section class="testimonial py-5 overflow-x-hidden">
  <div class="container">
    <div class="testimonial-header text-center text-light">
      <p class="m-0 fs-5 testi">Testimonial</p>
      <h2 class="fs-1 text-light">Client <span>Feedback</span></h2>
    </div>
    <div class="d-flex gap-3 has-scrollbar mt-5">
      <div class="col-lg-4 col-md-4 col-12 p-4 bg-light rounded-3">
        <div class="client-profile d-flex align-items-center gap-3 py-3">
          <div class="profile-image">
            <img src="./images/HAM.png" class="rounded-5" width="100%" alt="">
          </div>
          <div class="profile-name">
            <h5>Hamzat Rukayat</h5>
            <p>CEO Kingfisher</p>
          </div>

        </div>
        <div class="client-review">
          <p class="fs-5">"I would be lost without restaurant. I would like to personally thank you for your outstanding product."</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 p-4 bg-light rounded-3">
        <div class="client-profile d-flex align-items-center gap-3 py-3">
          <div class="profile-image">
            <img src="./images/avatar-2.jpg" class="rounded-5" width="100%" alt="">
          </div>
          <div class="profile-name">
            <h5>Hamzat Rukayat</h5>
            <p>CEO Kingfisher</p>
          </div>

        </div>
        <div class="client-review">
          <p class="fs-5">"I would be lost without restaurant. I would like to personally thank you for your outstanding product."</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 p-4 bg-light rounded-3">
        <div class="client-profile d-flex align-items-center gap-3 py-3">
          <div class="profile-image">
            <img src="./images/testi-1 (1).png" class="rounded-5" width="100%" alt="">
          </div>
          <div class="profile-name">
            <h5>Hamzat Rukayat</h5>
            <p>CEO Kingfisher</p>
          </div>

        </div>
        <div class="client-review">
          <p class="fs-5">"I would be lost without restaurant. I would like to personally thank you for your outstanding product."</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 p-4 bg-light rounded-3">
        <div class="client-profile d-flex align-items-center gap-3 py-3">
          <div class="profile-image">
            <img src="./images/testi-1 (1).png" class="rounded-5" width="100%" alt="">
          </div>
          <div class="profile-name">
            <h5>Hamzat Rukayat</h5>
            <p>CEO Kingfisher</p>
          </div>

        </div>
        <div class="client-review">
          <p class="fs-5">"I would be lost without restaurant. I would like to personally thank you for your outstanding product."</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ----------------------- 
        ONLINE BOOKING
      --------------------------->

<section class="reservation py-5" id="reservation">
  <div class="container">
    <div class="row">
      <div class="reservation-header text-center text-light">
        <p class="m-0 text-center fs-5 p-reserve ">Online Reservation</p>
        <h2 class="m-0 fs-1">Book a <span>table now!</span></h2>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="content-container">
          <div class="reservation-working mt-3">
            <h3 class="text-light">Working Hours</h3>
            <div class="d-flex flex-column gap mt-4">
              <div class="timing d-flex align-item-center gap-5 ">
                <h5 class="text-light fs-4">Mon- fri</h5>
                <p class="text-white fs-5"> &nbsp; &nbsp; &nbsp;&nbsp;9:00pm - 8:00pm</p>
              </div>
              <div class="timing d-flex align-item-center gap-5 ">
                <h5 class="text-light fs-4">Launching</h5>
                <p class="text-white fs-5">Everyday</p>
              </div>
              <div class="timing d-flex align-item-center gap-5 ">
                <h5 class="text-light fs-4">Saturday</h5>
                <p class="text-white fs-5">&nbsp; &nbsp; &nbsp;&nbsp;9:00am - 3:00pm</p>
              </div>
              <div class="timing d-flex align-item-center gap-5 ">
                <h5 class="text-light fs-4">Sunday</h5>
                <p class="text-white fs-5 text-danger">&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Closed</p>
              </div>
            </div>
            <div class="sign-up mt-4">
              <p class="fs-4 text-light">Signup and get exclusive offers and
                coupon codes</p>
              <button class="btn reservationbtn">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="container mt-5 me-auto">
          <form action="#" method="post">
            <div class="container d-flex flex-column gap-4">
              <div class="input-container-one d-flex w-100 gap-3">
                <input type="text" class="ps-3 py-3 w-50 rounded-3 book-input" name="fname" placeholder="Name">
                <input type="email" class="ps-3 py-3 w-50 rounded-3 book-input" name="email" placeholder="Email">
              </div>
              <div class="input-container-one d-flex w-100 gap-3">
                <input type="text" class="ps-3 py-3 w-50 rounded-3 book-input" name="fname" placeholder="Phone">
                <input type="email" class="ps-3 py-3 w-50 rounded-3 book-input" name="date" placeholder="Date">
              </div>
              <div class="input-container-one d-flex w-100 gap-3">
                <input type="text" class="ps-3 py-3 w-50 rounded-3 book-input" name="fname" placeholder="Pizza Type">
                <input type="email" class="ps-3 py-3 w-50 rounded-3 book-input" name="text" placeholder="Address">
              </div>
              <div class="botton-container">
                <button type="submit" class="btn reservationbtn">Book Now!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<!------------------------- 
        GALLERY
       ------------------------->

<section class="gallery py-5" id="gallery">
  <div class="container">
    <div class="gallery-header text-center">
      <p class="m-0  p-reserve fs-5">Fresh from HRpiz</p>
      <h2 class="m-0">Image <span>Gallery</span></h2>
    </div>
    <div class="gallery-content">
      <div class="d-flex container has-scrollbar gap-4 mt-4">
        <div class="col-lg-3 py-3 px-3 rounded-3 bg-light image-gallery col-md-3 col-12">
          <div class="image-galler">
            <img src="./images/wings-xs.jpg" class="rounded-3" width="100%" alt="">
          </div>
          <div class="description-gallery">
            <h4 class="m-0">DEEP FRIED CHICKEN</h4>
            <div class="star d-flex align-item-center gap-2 m-0">
              <p class="fs-4">5.0 </p>
              <div class="starrs mt-2">
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 py-3 px-3 rounded-3 bg-light image-gallery col-md-3 col-12">
          <div class="image-galler">
            <img src="./images/one.jpg" class="rounded-3" width="100%" alt="">
          </div>
          <div class="description-gallery">
            <h4 class="m-0">BBQ PORK RIBS</h4>
            <div class="star d-flex align-item-center gap-2 m-0">
              <p class="fs-4">5.0 </p>
              <div class="starrs mt-2">
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 py-3 px-3 rounded-3 bg-light image-gallery col-md-3 col-12">
          <div class="image-galler">
            <img src="./images/two.jpg" class="rounded-3" width="100%" alt="">
          </div>
          <div class="description-gallery">
            <h4 class="m-0">GARLIC SHRIMP PASTA</h4>
            <div class="star d-flex align-item-center gap-2 m-0">
              <p class="fs-4">4.0 </p>
              <div class="starrs mt-2">
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 py-3 px-3 rounded-3 bg-light image-gallery col-md-3 col-12">
          <div class="image-galler">
            <img src="./images/three.jpg" class="rounded-3" width="100%" alt="">
          </div>
          <div class="description-gallery">
            <h4 class="m-0">GRILLED SALMON</h4>
            <div class="star d-flex align-item-center gap-2 m-0">
              <p class="fs-4">5.0 </p>
              <div class="starrs mt-2">
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 py-3 px-3 rounded-3 bg-light image-gallery col-md-3 col-12">
          <div class="image-galler">
            <img src="./images/four.jpg" class="rounded-3" width="100%" alt="">
          </div>
          <div class="description-gallery">
            <h4 class="m-0">SPINACH BLUEBERRIES SALAD</h4>
            <div class="star d-flex align-item-center gap-2 m-0">
              <p class="fs-4">4.9 </p>
              <div class="starrs mt-2">
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 py-3 px-3 rounded-3 bg-light image-gallery col-md-3 col-12">
          <div class="image-galler">
            <img src="./images/five.jpg" class="rounded-3" width="100%" alt="">
          </div>
          <div class="description-gallery">
            <h4 class="m-0">PIZZA MUSHROOM</h4>
            <div class="star d-flex align-item-center gap-2 m-0">
              <p class="fs-4">5.0 </p>
              <div class="starrs mt-2">
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 py-3 px-3 rounded-3 bg-light image-gallery col-md-3 col-12">
          <div class="image-galler">
            <img src="./images/six.jpg" class="rounded-3" width="100%" alt="">
          </div>
          <div class="description-gallery">
            <h4 class="m-0">MANGAL RIB EYE STEAK</h4>
            <div class="star d-flex align-item-center gap-2 m-0">
              <p class="fs-4">5.0 </p>
              <div class="starrs mt-2">
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 py-3 px-3 rounded-3 bg-light image-gallery col-md-3 col-12">
          <div class="image-galler">
            <img src="./images/seven.jpg" class="rounded-3" width="100%" alt="">
          </div>
          <div class="description-gallery">
            <h4 class="m-0">FRESH BURGER PATTIES</h4>
            <div class="star d-flex align-item-center gap-2 m-0">
              <p class="fs-4">5.0 </p>
              <div class="starrs mt-2">
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
                <i class="fa fa-star fs-5 text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- -----------------
          FOOTER
        ------------------- -->

<footer class="py-5" id="contact">
  <div class="container-sections">
    <div class="container">
      <div class="row gap-lg-0 gap-md-0 gap-3">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="container-content">
            <h1><a class="text-decoration-none text-light" href="#">HRpiz</a></h1>
            <p class="text-light fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="social-media d-flex gap-3 align-item-center">
              <i class="fa-brands fa-facebook fs-4 text-light"></i>
              <i class="fa-brands fa-instagram fs-4 text-light"></i>
              <i class="fa-brands fa-twitter fs-4 text-light"></i>
              <i class="fa-brands fa-youtube fs-4 text-light"></i>
              <i class="fa-brands fa-linkedin fs-4 text-light"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="container-content">
            <h2 class="text-light ms-lg-5 ms-md-5 ms-0">Information</h2>
            <div class="info-gen d-flex gap-3">
              <div class="info ms-md-5 ms-lg-5 ms-0">
                <p><a href="#" class="text-decoration-none text-light ms-4 fs-5">Home</a></p>

                <p><a href="#" class="text-decoration-none text-light ms-4 fs-5">About</a></p>

                <p><a href="#" class="text-decoration-none text-light ms-4 fs-5">Menu</a></p>


              </div>
              <div class="info">
                <p><a href="#" class="text-decoration-none text-light ms-4 fs-5">Reservation</a></p>
                <p><a href="#" class="text-decoration-none text-light ms-4 fs-5">Gallery</a></p>
                <p><a href="#" class="text-decoration-none text-light ms-4 fs-5">Contact</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 ">
          <div class="containe-section ms-lg-5 ms-md-5">
            <h2 class="text-light">Contacts</h2>
            <div class="links ms-3">
              <div class="d-flex align-items-center gap-2">
                <i class="fa fa-location fs-5 text-light"></i>
                <p class="fs-5 text-light mt-1">Ogbomoso,Oyo State,Nigeria</p>
              </div>

              <div class="d-flex align-items-center gap-2">
                <i class="fa fa-envelope fs-5 text-light"></i>
                <p class="fs-5 text-light mt-1">
                  <a class="text-decoration-none text-light" href="mailto:hamzatrukayatabiodun02@gmail.com">hamzatrukayatabiodun02</a>
                </p>
              </div>
              <div class="d-flex align-items-center gap-2">
                <i class="fa fa-phone fs-5 text-light"></i>
                <p class="fs-5 text-light mt-1"><a class="text-decoration-none text-light" href="tel:+2438148462822">
                    +2348148462822
                  </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- AOS LINK -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- BOOTSTRAP SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>