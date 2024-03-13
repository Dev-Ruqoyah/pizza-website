<?php
include "header.php";
  include "loginfunction.php";
 
?>






<!-- SECTION SIGNUP/SIGNIN -->
<section class="bg-light">
  <div class="container-section">

    <div class="container d-flex align-items-center justify-content-center h-100 ">
      <div class="position-relative w-75   bg-light rounded-3 container-one shadow">

        <!-- SIGNIN AND SIGNUP CONTAINER -->
        <div class="signin-signup-container position-absolute top-0 left-0 w-100 h-100 d-flex align-items-center justify-content-around">

          <!-- SIGN IN FORM -->

          <form action="" method="post" class="login-form signin-form d-flex align-items-center justify-content-center flex-column ">
            <i class="fa-pizza-slice fs-5"></i>
            <h2 class="fs-1 pb-3">Sign In</h2>
            

            <!--EMAIL -->
            <div class="input-field w-100 py-3 mb-2 rounded-3 d-flex align-items-center justify-content-between px-3 ">
              <input class="login-input" name="email" type="email" class="w-100 " placeholder="Email">
              <i class="fa fa-user"></i>

            </div>


            <!-- PASSWORD -->
            <div class="input-field w-100 py-3 mb-2 rounded-3 d-flex align-items-center justify-content-between px-3 ">
              <input class="login-input" type="password" class="w-100" name="password" placeholder="Password">
              <i class="fa fa-lock"></i>

            </div>

            <!-- REMEMBER -->
            <div class="remember d-flex justify-content-between  align-items-center w-100  mb-2 ">
              <div class="input-check d-flex align-items-center gap-1   ">
                <input class="login-input" type="checkbox" class="" name="remember">
                <label for="remember" class="">Remember&nbsp;me</label>
              </div>
              <div class="mt-lg-2 mt-md-1 mt-3">
                <p><a href="#">Forget Password?</a></p>
              </div>
            </div>
            <h2 class="fs-5 text-danger"><?php echo $invalid;?></h2>

            <!-- SIGN IN BUTTON -->
            <button type="submit" name="submit2" class="login-btn  rounded-3 py-2 w-100">Sign in</button>

            <p class="account-text mt-3">Don't have an account? <a href="#" id="sign-up-btn2">Sign Up</a></p>
          </form>

          <!-- SIGN UP FORM -->
          <form action="" method="post" enctype="multipart/form-data" class="login-form signup-form d-flex align-items-center justify-content-center flex-column ">
            <!-- <i class="fa-pizza-slice fs-5"></i> -->

            <h2 class="fs-1 pb-3">Sign Up</h2>
            <h2 class="fs-5 text-success"><?php echo $success; ?></h2>



            <!-- FULL NAME -->
            <div class="input-field w-100 py-3 mb-2 rounded-3 d-flex align-items-center justify-content-between px-3 ">
              <input class="login-input" name="fname" value="<?php echo htmlspecialchars($fname);?>" type="text" class="w-100 h-100" placeholder="Full name">
              <i class="fa fa-user"></i>

            </div>
            <h2 class="text-danger fs-5"><?php echo $emptymsg1 ?></h2>

            <!-- EMAIL -->
            <div class="input-field w-100 py-3 mb-2 rounded-3 d-flex align-items-center justify-content-between px-3">
              <input class="login-input" name="email" value="<?php echo htmlspecialchars($email);?>"  type="email" class="w-100 h-100" placeholder="Email">
              <i class="fa fa-envelope"></i>

            </div>
            <h2 class="text-danger fs-5"><?php echo $emptymsg2 ?></h2>
            <h2 class="text-danger fs-5"><?php echo $erroremail ?></h2>


            <!-- INGREDIENT -->
            <div class="input-field w-100 py-3 mb-2 rounded-3 d-flex align-items-center justify-content-between px-3">
              <input class="login-input" type="text" name="ingredient" value="<?php echo htmlspecialchars($Ingredient);?>" placeholder="Ingredients(Separated by comma)">
              <i class="fa fa-pizza-slice"></i>
            </div>
            <h2 class="text-danger fs-5"><?php echo $emptymsg3 ?></h2>

            <!-- TITLE -->
            <div class="input-field w-100 py-3 mb-2 rounded-3 d-flex align-items-center justify-content-between px-3">

              <input class="login-input" name="title" type="text" value="<?php echo htmlspecialchars($title);?>" placeholder="Title">
              <i class="fa fa-pizza-slice"></i>
            </div>
            <h2 class="text-danger fs-5"><?php echo $emptymsg4 ?></h2>

            <!-- PROFILE PICTURE -->
            <div class="input-field w-100 py-3 mb-2 rounded-3 d-flex align-items-center justify-content-between px-3">

              <input class="login-input" name="picture" type="file" placeholder="Profile Picture">
              <i class="fa fa-user"></i>
            </div>

            <!--  PASSWORD -->
            <div class="input-field w-100 py-3 mb-2 rounded-3 d-flex align-items-center justify-content-between px-3">

              <input class="login-input" name="password" type="password" class="login-input" value="<?php echo htmlspecialchars($password);?>" placeholder=" Password">
              <i class="fa fa-lock"></i>
            </div>
            <h2 class="text-danger fs-5"><?php echo $emptymsg5 ?></h2>

            <!-- SIGN UP BUTTON -->
            <button type="submit" name="submit" class="login-btn  rounded-3 py-2 w-100 my-2">Sign up</button>


            <p class="account-text mt-3">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
          </form>
        </div>

        <!-- PANELS CONTAINER -->
        <div class="panels-container  d-flex align-items-center justify-content-around">

          <div class="panel left-panel d-flex flex-column align-items-center justify-content-around px-3 ">
            <div class="image d-flex align-items-center justify-content-around flex-column h-100 w-100">
              <img src="./images/panel.png" class="mb-5" width="100%" alt="">
              <button class="login-btn  rounded-3 py-2 w-100" id="sign-in-btn">Sign In</button>


            </div>
            <div class="content">
            </div>
          </div>
          <div class="panel right-panel d-flex flex-column align-items-center justify-content-around px-3 ">
            <div class="image d-flex align-items-center justify-content-around flex-column h-100 w-100">
              <img src="./images/panel.png" class="mb-5" width="100%" alt="">
              <button class="login-btn  rounded-3 py-2 w-100" id="sign-up-btn">Sign Up</button>


            </div>
            <div class="content">
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>


<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>