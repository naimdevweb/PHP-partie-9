<?php
    $date = date("m/").date("d/").date("y");
    echo date('Y-m-d', strtotime($date. ' - 22 days'));
?>