<p>Opdracht 8</p>
<?php
$myAge = 24;
$cardRecieved = true;
if ($myAge > 16){
    echo "Je bent ouder dan 16 dus je mag je scooter rijbewijs halen.";
    echo "<br>";
    if ($myAge > 18 && $cardRecieved = true){
        echo "Je bent ouder dan 18 en je hebt een stemkaart ontvangen dus je mag stemmen.";
    }elseif ($myAge >18 && $cardRecieved = false){
        echo "Je bent ouder dan 18 dus heb je het recht om te stemmen maar je hebt geen kaart ontvangen dus je mag nog niet stemmen.";
    }elseif ($myAge <18){
        echo "Je bent niet ouder dan 18 dus je mag nog niet stemmen.";
    }
}else{
    echo "Je bent niet ouder dan 16 dus je mag je scooter rijbewijs niet halen.";
}


?>