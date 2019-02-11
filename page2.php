<?php 
    require 'includes/header.inc.php';
?>
<div class="row">
    <div class="col-12 p-4">
    <?php 
        if (isset($_GET['type'])) {
            echo "<h1 class=\"text-center\">We hope you enjoy our local ";
            if ($_GET['type'] == 'pizza') {
                echo 'pizzerias. <i class="far fa-smile-beam"></i>';
            } else if ($_GET['type'] == 'mexican') {
                echo 'mexican restaurants. <i class="far fa-smile-beam"></i>';
            }
        }
    ?>
    </h1>
    
    </div>
</div>
<div id="wrapper">
<!-- Special Offers -->
<?php 
if (isset($_GET['type'])) {
    if (isset($_GET['special'])) {
        if ($_GET['special'] == 'yes') {
            ?>
                <div class="jumbotron p-3 <?php secondary();?>">
                    <h3 class="text-center">Check out these special offers!!</h3>
                    <hr>
                    <p>
                        <?php 
                            if ($_GET['type'] == 'pizza') {
                                echo $specialPizza;
                            } else if ($_GET['type'] == 'mexican') {
                                echo $specialMexican;
                            }
                        ?>
                    </p>
                    
                </div>
            <?php
        }
    }
}
?>

<!-- Card with each local place -->
<?php 
    if (isset($_GET['type'])) {
        if ($_GET['type'] == 'pizza') {
            include 'includes/pizza.inc.php';
        } else if ($_GET['type'] == 'mexican') {
            include 'includes/mexican.inc.php';
        }
    }
?>

<?php 
    require 'includes/footer.inc.php';
?>