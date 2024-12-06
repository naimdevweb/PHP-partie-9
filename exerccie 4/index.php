<?php
// date_default_timezone_set("Europe/Paris");
// echo date(' h:i:s A');

$timestamp = mktime(15,0,0,8,2,2016);
echo "le timestamp du mardi 2 aout 2016 a 15h00 est " .date("m-",$timestamp).date("d-",$timestamp).date("y",$timestamp). " " . date("h:i:s", $timestamp);
?>