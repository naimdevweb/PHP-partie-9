<?php
$date16mmai2016 = new DateTime("2016-05-16");
$datenow = new DateTime("now");

$difference = $datenow -> diff($date16mmai2016);
// date("h:i:s" , $autreDate);
echo($difference->days);
?>