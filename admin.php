<?php 
include "header.php";
include "connect.php";

$sql = 'SELECT fname,email,ingredient,title,picture FROM pizzadetails ORDER BY created_at';


$result = mysqli_query($conn,$sql);

$pizzas = mysqli_fetch_all($result,MYSQLI_ASSOC);
//   print_r($pizzas);

mysqli_free_result($result);

mysqli_close($conn);
// print_r($pizzas['fname']);

?>

<section class="pizza-content mt-2">
    <div class="container">
        <div class="row gap-2">
            <?php foreach ($pizzas as $pizza): ?>
            <div style="background: var(--primary-color);" class="col-lg-3 col-md-4 col-12 rounded-3 py-2 px-3 mx-auto profile-container d-flex justify-content-between flex-column">
               <div>
               <h3 class="m-0 text-center"><?php echo htmlspecialchars($pizza['title'])?></h3>
                <ul style="height:60px;" class="overflow-y-scroll" >
                    <?php
                    foreach(explode(',',$pizza['ingredient']) as $ing):?>
                        <li ><?php echo htmlspecialchars($ing) ?></li>

                    <?php endforeach; ?>
                    
                </ul>
                <hr class="text-light">
                    
               </div>
             
                
                <div class="user-profile d-flex align-item-center justify-content-between">
                
                    <div style="height: 50px; width:50px;" class="user-image rounded-circle bg-light">
                        <img  src="./upload/<?php
                        echo $pizza['picture']?>" class="rounded-circle object-fit-cover" width="100%" height="100%" alt="">
                    </div>
                    <div class="user-details">
                        <h6 class="m-0"><?php echo htmlspecialchars($pizza['fname']);?></h6>
                        <p><?php echo htmlspecialchars($pizza['email'])?></p>
                    </div>
                </div>
            </div>






            <?php endforeach;?>
        </div>
    </div>
</section>







<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>