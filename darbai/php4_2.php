<?php 


    function copyright() {
        
$currentYear = date("Y");
$makeYear = "2019";
        
        if ($currentYear > $makeYear) {
            echo '&#169;' . $makeYear . '-' . $currentYear . '<br>';
        } else {
            echo '&#169;' . $currentYear . '<br>';
        }
    }
    copyright();
?>

<?php

