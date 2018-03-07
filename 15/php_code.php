<?php
session_start();
$db = mysqli_connect('localhost', 'root', 'root', 'crud');

// initialize variables
$date = "";
$time = "";
$licence = "";
$distance = "";
$elapsed = "";
$id = 0;
$update = false;

if (isset($_POST['save'])) {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $licence = $_POST['licence'];
    $distance = $_POST['distance'];
    $elapsed = $_POST['elapsed'];

    mysqli_query($db, "INSERT INTO info (date, time, licence, distance, elapsed) VALUES ('$date', '$time', '$licence', '$distance', '$elapsed')");
    $_SESSION['message'] = "information saved";
    header('location: index.php');
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];

    mysqli_query($db, "UPDATE info SET date='$date', time='$time', licence='$licence', distance='$distance', elapsed='$elapsed' WHERE id=$id");
    $_SESSION['message'] = "Information updated!";
    header('location: index.php');
}
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM info WHERE id=$id");
    $_SESSION['message'] = "Information deleted!";
    header('location: index.php');
}