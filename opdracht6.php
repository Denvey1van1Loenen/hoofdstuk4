<p>Opdracht 6</p>
<?php
$temp = 25;
$humid = 90;

if ($dayTime >= 17 || $temp <= 20 || $humid <= 85){
    echo "De airo is uit";
} else{
    echo "De airco is aan";
}
?>