<?php
$dateStr = "2020-01-01";
$timeStamp = strtotime($dateStr);

$dayOfWeek = date("l", $timeStamp);
echo "The day of the week in 2020 Jan 1 is $dayOfWeek";
?>
