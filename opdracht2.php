<?php
$uur = (int) date ("G");

$dagdeel = match ($uur){
    6,7,8,9,10,11 => "het is ochtend",
    12,13,14,15,16,17 =>"het is middag",
    18,19,20,21,22,23=> "het is avond",
    24,1,2,3,4,5=> "het is nacht",
    default => "FOUT",
};
echo $dagdeel;
