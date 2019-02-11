<?php 
    require 'includes/header.inc.php';
?>

<div class="row">
    <div class="col-12 p-4">

    <h1 class="text-center font-italic"><u>Local places to eat!</u></h1>
    
    </div>
</div>


<div class="row">
    <div class="col-12">
        <p>In the URL you will need to add 7 parameters that in the end will build your page!</p>

        <p>Make sure you use the following options on the page2.php and not on this current page! Have fun!! <i class="far fa-smile-beam"></i></p>
        <ul>
            <li>You can choose what type of place you want to eat at, the options are pizzerias or mexican restaurants: 
            <span class="font-weight-bold">type=pizza</span> OR  
            <span class="font-weight-bold">type=mexican</span>.</li>

            <li>You can choose if you want to get any special offers: <span class="font-weight-bold">special=yes</span> OR <span class="font-weight-bold">special=no</span>.</li>
            
            
            <li>You can choose if you want to see any images for the places: 
            <span class="font-weight-bold">showImg=yes</span> OR 
            <span class="font-weight-bold">showImg=no</span>.</li>

            <li>You can choose to see additional information about the place (address, hours, phone, website): 
            <span class="font-weight-bold">showInfo=yes</span> OR 
            <span class="font-weight-bold">showInfo=no</span>.</li>
            
            <li>You can choose if you want to show the google rating of the place: 
            <span class="font-weight-bold">showRating=yes</span> OR 
            <span class="font-weight-bold">showRating=no</span>.</li>
            
            <li>You can change the theme of the website to dark or light: <span class="font-weight-bold">theme=dark</span> OR <span class="font-weight-bold">theme=light</span>.</li>

            <li>You can customize the font of the page if you would like to (sm=small & lg=large): 
            <span class="font-weight-bold">fontSize=sm</span> OR 
            <span class="font-weight-bold">fontSize=lg</span>.</li>

        </ul>
    </div>
</div>
<?php 
    require 'includes/footer.inc.php';
?>