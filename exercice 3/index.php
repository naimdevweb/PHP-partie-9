<?php


// echo date('l jS \of F Y  ');

$jours = array(
    "Monday" => "Lundi",
    "Tuesday" => "Mardi",
    "Wednesday" => "Mercredi",
    "Thursday" => "Jeudi",
    "Friday" => "Vendredi",
    "Saturday" => "Samedi",
    "Sunday" => "Dimanche",
);

$mois = array(1=>" janvier "," février "," mars "," avril "," mai "," juin ",
" juillet "," août "," septembre "," octobre "," novembre "," décembre ");

echo "la date d'aujourhui est". " ". $jours[date("l")]." ".date("d").$mois[date("m")];

?>