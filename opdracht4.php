<?php
$prijs = 100;
if ($prijs > 150) {
    echo "oude prijs: € $prijs. na verhoging van 19% is de prijs: € " .
        ($prijs * 1.19);
}else if($prijs< 55) {
    echo "oude prijs: € $prijs. na verhoging van 11% is de prijs: € " .
        ($prijs * 1.11);
}else {
    echo "oude prijs: € $prijs. na verhoging van 16% is de prijs: € " .
        ($prijs * 1.16);
}
?>
