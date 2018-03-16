<?php
    $con = mysqli_connect("localhost","root","root") or die('Could not connect: ' . mysqli_error());
    mysqli_select_db("drivers, info", $crud);
?>

<?xml version="1.0" encoding="UTF-8"?>
<records>
    <auto>
        <name>Ignas</name>
        <city>Vilnius</city>
        <driverid>4</driverid>
    </auto>
</records>

