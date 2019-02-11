<!-- Mexican Villa Restaurant -->
<div class="row">

    <?php 
        if (isset($_GET['showImg'])) {
            if ($_GET['showImg'] == 'yes') {
    ?>
    <div class="col-xl-3 mb-3">
        <div class="card" style="width: 18rem;">
            <img src="img/mexicanvilla.jpg" class="card-img-top card-img-bottom" alt="...">
        </div>
    </div>
    <?php            
            }
        }
    ?>

    <div class="col-xl-9 <?php if ($_GET['showImg'] == 'yes') {echo "pl-xl-5 ";}?>">
        <h3><u>Mexican Villa Restaurant</u></h3>
        <?php 
        if (isset($_GET['showRating'])) {
            if ($_GET['showRating'] == 'yes') {
                echo "<p class=\"d-inline\">4.5 </p>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star-half-alt fa-lg\"></i>";
            }
        }
        ?>
        <h4>Mexican restaurant</h4>
        <?php 
            if (isset($_GET['showInfo'])) {
                if ($_GET['showInfo'] == 'yes') {
        ?>
        <br>
        <p class="m-0">Address: 12315 NE Fourth Plain Blvd, Vancouver, WA 98682</p>
        <p class="m-0">Hours: Closes at: 10PM ⋅ Opens at: 11AM</p>
        <p class="m-0">Phone: (360) 256-9280</p>
        <?php
                }
            }
        ?>
    </div>
</div>
<hr class=" <?php secondary();?>">


<!-- Lindo Mexico | Restaurant & Cantina -->
<div class="row">
    <?php 
        if (isset($_GET['showImg'])) {
            if ($_GET['showImg'] == 'yes') {
    ?>
    <div class="col-xl-3 mb-3">
        <div class="card" style="width: 18rem;">
            <img src="img/lindomexico.jpg" class="card-img-top card-img-bottom" alt="...">
        </div>
    </div>
    <?php            
            }
        }
    ?>

    <div class="col-xl-9 <?php if ($_GET['showImg'] == 'yes') {echo "pl-xl-5 ";}?>">
        <h3><u>Lindo Mexico | Restaurant & Cantina</u></h3>
        <?php 
        if (isset($_GET['showRating'])) {
            if ($_GET['showRating'] == 'yes') {
                echo "<p class=\"d-inline\">4.5 </p>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star fa-lg\"></i>";
                echo "<i class=\"fas fa-star-half-alt fa-lg\"></i>";
            }
        }
        ?>
        <h4>Quaint, mural-filled Mexican restaurant & attached, funky bar with live music in a strip mall.</h4>
        <?php 
            if (isset($_GET['showInfo'])) {
                if ($_GET['showInfo'] == 'yes') {
        ?>
        <br>
        <p class="m-0">Address: 316 SE 123rd Ave D-11, Vancouver, WA 98683</p>
        <p class="m-0">Hours: Closes at: 10PM ⋅ Opens at: 11AM </p>
        <p class="m-0">Order: seamless.com, grubhub.com</p>
        <p class="m-0">Phone: (360) 433-2296</p>
        <?php
                }
            }
        ?>
    </div>
</div>
<hr class=" <?php secondary();?>">


<!-- La Costa | Mexican Restaurant -->
<div class="row">
    <?php 
        if (isset($_GET['showImg'])) {
            if ($_GET['showImg'] == 'yes') {
    ?>
    <div class="col-xl-3 mb-3">
        <div class="card" style="width: 18rem;">
            <img src="img/lacosta.jpg" class="card-img-top card-img-bottom" alt="...">
        </div>
    </div>
    <?php            
            }
        }
    ?>

    <div class="col-xl-9 <?php if ($_GET['showImg'] == 'yes') {echo "pl-xl-5 ";}?>">
        <h3><u>La Costa | Mexican Restaurant</u></h3>
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
        <h4>Fajitas, tacos & margaritas in a colorful Mexican eatery enlivened by happy hour & karaoke nights.</h4>
        <?php 
            if (isset($_GET['showInfo'])) {
                if ($_GET['showInfo'] == 'yes') {
        ?>
        <br>
        <p class="m-0">Address: 4708 NE Thurston Way, Vancouver, WA 98662</p>
        <p class="m-0">Hours: Closes at: 10PM ⋅ Opens at: 11AM</p>
        <p class="m-0">Phone: (360) 885-7675</p>
        <p class="m-0">Menu: lacostavancouver.com</p>
        <?php
                }
            }
        ?>
        
    </div>
</div>
<hr class=" <?php secondary();?>">