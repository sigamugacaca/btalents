<?php
$myObj->name = "Ignas";
$myObj->city = "Kaunas";
$myObj->distance = "100km";
//Hello
$MyJSON = json_encode($myObj);

echo $MyJSON;
?>