<?php
function check($number)
{
    if ($number % 2 == 0) {
        echo "het nummer is gelijk";
    } else {
        echo "het nummer is on-gelijk";
    }
}

$number = 39;
check($number) ;