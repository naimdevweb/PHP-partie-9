<?php
$date1fevrier2016 = new DateTime("2016-02-01");
$date1mars2016 = new DateTime("2016-03-01");

$difference = $date1fevrier2016 -> diff($date1mars2016);
echo($difference->days);
?>