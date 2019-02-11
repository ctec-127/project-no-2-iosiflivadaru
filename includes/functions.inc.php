<?php 
    function dark() {
        $dark = 'bg-dark text-white';
        if (isset($_GET['theme'])) {
            if ($_GET['theme'] == 'dark') {
                echo $dark;
            }
        }
    }
    function secondary() {
        $secondary = 'bg-secondary text-white';
        if (isset($_GET['theme'])) {
            if ($_GET['theme'] == 'dark') {
                echo $secondary;
            }
        }
    }

    $specialPizza = "
    <u>Blind Onion Pizza & Pub:</u><br>
    No special offers!<br><br>

    <u>Mod Pizza:</u><br>
    Only $8 for any custom pizza! <span class='badge badge-dark'>New</span><br><br>

    <u>Pied Piper Pizza:</u><br>
    No special offers!<br>
    ";

    $specialMexican = "
    <u>Mexican Villa Restaurant:</u><br>
    No special offers!<br><br>

    <u>Lindo Mexico | Restaurant & Cantina:</u><br>
    No special offers!<br><br>

    <u>La Costa | Mexican Restaurant:</u><br>
    Buy 3 tacos and get one more for FREE. <span class='badge badge-dark'>New</span><br>
    ";