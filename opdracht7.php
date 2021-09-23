<p>Opdracht 7</p>
<?php
$iphonePrice = 1000;
$savings = 1800 ;
$resultMoney = $iphonePrice - $savings;
$resultMoney1 = $savings -$iphonePrice;
if($savings < 750){
    echo "Je hebt niet genoeg geld, het is beter om een baan te zoeken. Je komt €$resultMoney tekort";
}elseif ($savings > 750 && $savings < $iphonePrice){
    echo "Je hebt niet genoeg geld, het is beter om een baan te zoeken. Je komt €$resultMoney tekort";
}elseif ($savings >= $iphonePrice){
    echo "Je hebt genoeg voor de Iphone je hebt €$resultMoney1 over.";
}
?>