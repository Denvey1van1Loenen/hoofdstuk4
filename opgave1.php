<?php
$tijd = date("G");
if ( $tijd<12 ){
    echo "het is ochtend";
}
elseif ($tijd >12){
    echo "het is middag";
}
elseif ($tijd >18){
    echo "het is avond";
}
elseif ($tijd >24){
    echo "het is nacht";
}
?>