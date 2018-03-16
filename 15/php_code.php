<?php
session_start();
$db = mysqli_connect('localhost', 'root', 'root', 'crud');

// initialize variables
$date = "";
$time = "";
$licence = "";
$distance = "";
$elapsed = "";
$speed = "";
$id = 0;
$update = false;


if (isset($_POST['save'])) {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $licence = $_POST['licence'];
    $distance = $_POST['distance'];
    $elapsed = $_POST['elapsed'];
    $speed = $_POST['speed'];

    mysqli_query($db, "INSERT INTO info (date, time, licence, distance, elapsed, speed) VALUES ('$date', '$time', '$licence', '$distance', '$elapsed', '$speed')");
    $_SESSION['message'] = "Information Saved!";
    header('location: index.php');
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $licence = $_POST['licence'];
    $distance = $_POST['distance'];
    $elapsed = $_POST['elapsed'];
    $speed = $_POST['speed'];

    mysqli_query($db, "UPDATE info SET date='$date', time='$time', licence='$licence', distance='$distance', elapsed='$elapsed', speed='$speed' WHERE id=$id");
    $_SESSION['message'] = "Information Updated!";
    header('location: index.php');
}
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
    $n = mysqli_fetch_array($record);
    if (empty($n)) {
        die('Data Not Found');
    }
    mysqli_query($db, "DELETE FROM info WHERE id=$id");
    $_SESSION['message'] = "Information Deleted!";
    header('location: index.php');
}
if (isset($_GET['query'])) {
    $query = $db->escape_string($_GET['query']);
    $sql="SELECT date, time, licence, distance, elapsed, speed FROM info WHERE licence like '%{$query}%' or date like '%{$query}%' or time like '%{$query}%' or licence like '%{$query}%' or distance like '%{$query}%' or elapsed like '%{$query}%' or speed like '%{$query}%'";
    $results = $db->query($sql);
    var_dump($query);
}