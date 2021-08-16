<?php

date_default_timezone_set("Asia/Manila");

$date = "September 06, 2019 03:54:00 PM";
// echo date('Y-m-d h:i:s a');
echo $date;
echo "<br/>";
echo date('m/d/Y H:i:s a', strtotime($date));



?>