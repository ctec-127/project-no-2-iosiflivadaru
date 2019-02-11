<!-- Blind Onion Pizza -->
<div class="row">

    <?php 
        if (isset($_GET['showImg'])) {
            if ($_GET['showImg'] == 'yes') {
    ?>
    <div class="col-xl-3 mb-3">
        <div class="card" style="width: 18rem;">
            <img src="img/blindpizza.jpg" class="card-img-top card-img-bottom" alt="...">
        </div>
    </div>
    <?php            
            }
        }
    ?>

    <div class="col-xl-9 <?php if ($_GET['showImg'] == 'yes') {echo "pl-xl-5 ";}?>">
        <h3><u>Blind Onion Pizza & Pub</u></h3>
        <?php 
        if (isset($_GET['showRating'])) {
            if ($_GET['showRating'] == 'yes') {
                echo "<p class=\"d-inline\">4.6 </p>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star-half-alt fa-lg\"></i>";
            }
        }
        ?>
        <h4>Trendy small chain pizzeria features classic pies, casual fare & microbrews in a laid-back setting.</h4>
        <?php 
            if (isset($_GET['showInfo'])) {
                if ($_GET['showInfo'] == 'yes') {
        ?>
        <br>
        <p class="m-0">Address: 6115 NE 114th Ave #101, Vancouver, WA 98662</p>
        <p class="m-0">Hours: Closes at 10PM ⋅ Opens at 3PM</p>
        <p class="m-0">Phone: (360) 213-1805</p>
        <?php
                }
            }
        ?>
    </div>
</div>
<hr class=" <?php secondary();?>">


<!-- Mod Pizza -->
<div class="row">
    <?php 
        if (isset($_GET['showImg'])) {
            if ($_GET['showImg'] == 'yes') {
    ?>
    <div class="col-xl-3 mb-3">
        <div class="card" style="width: 18rem;">
            <img src="img/modpizza.jpg" class="card-img-top card-img-bottom" alt="...">
        </div>
    </div>
    <?php            
            }
        }
    ?>

    <div class="col-xl-9 <?php if ($_GET['showImg'] == 'yes') {echo "pl-xl-5 ";}?>">
        <h3><u>Mod Pizza</u></h3>
        <?php 
        if (isset($_GET['showRating'])) {
            if ($_GET['showRating'] == 'yes') {
                echo "<p class=\"d-inline\">4.6 </p>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star-half-alt fa-lg\"></i>";
            }
        }
        ?>
        <h4>Counter-serve chain with industrial-chic decor known for build-your-own pizza.</h4>
        <?php 
            if (isset($_GET['showInfo'])) {
                if ($_GET['showInfo'] == 'yes') {
        ?>
        <br>
        <p class="m-0">Address: 305 SE Chkalov Dr #120, Vancouver, WA 98683</p>
        <p class="m-0">Hours: Closes at 11PM ⋅ Opens at 10:30AM </p>
        <p class="m-0">Menu: modpizza.com</p>
        <p class="m-0">Order: modpizza.com</p>
        <p class="m-0">Phone: (360) 952-4915</p>
        <?php
                }
            }
        ?>
    </div>
</div>
<hr class=" <?php secondary();?>">


<!-- Pied Piper Pizza -->
<div class="row">
    <?php 
        if (isset($_GET['showImg'])) {
            if ($_GET['showImg'] == 'yes') {
    ?>
    <div class="col-xl-3 mb-3">
        <div class="card" style="width: 18rem;">
            <img src="img/piedpizza.jpg" class="card-img-top card-img-bottom" alt="...">
        </div>
    </div>
    <?php            
            }
        }
    ?>

    <div class="col-xl-9 <?php if ($_GET['showImg'] == 'yes') {echo "pl-xl-5 ";}?>">
        <h3><u>Pied Piper Pizza</u></h3>
        <?php 
        if (isset($_GET['showRating'])) {
            if ($_GET['showRating'] == 'yes') {
                echo "<p class=\"d-inline\">4.0 </p>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"far fa-star fa-lg\"></i>";
            }
        }
        ?>
        <h4>This homey joint filled with darts & car-related tchotchkes offers pizzas, sports on TV & a buffet.</h4>
        <?php 
            if (isset($_GET['showInfo'])) {
                if ($_GET['showInfo'] == 'yes') {
        ?>
        <br>
        <p class="m-0">Address: 12300 NE Fourth Plain Blvd # E, Vancouver, WA 98682</p>
        <p class="m-0">Hours: Closes at: 10PM ⋅ Opens at: 11AM</p>
        <p class="m-0">Phone: (360) 892-6430</p>
        <p class="m-0">Menu: places.singleplatform.com</p>
        <?php
                }
            }
        ?>
        
    </div>
</div>
<hr class=" <?php secondary();?>">