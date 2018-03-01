<html>
<head>
    <title>Vehicle History</title>
</head>
<body>
<form id="form" name="form" method="post" action="">
    <label>Add The Date
        <input type="date" name="date" id="date" value ="" />
    </label>
    <label>Add The Time
        <input type="time" name="time" id="time" value="" />
    </label>
    <label>Add Plate #
       <input type="text" name="plate" id="plate" value="" />
    </label>
    <p>
        <label>Submit Information
            <input type="submit" name="submit" id="submit" value="Submit" />
        </label>
    </p>
</form>

<?php
$date = $_POST["date"];
$time = $_POST["time"];
$plate = $_POST["plate"];
$posts = file_get_contents("posts.txt");
$posts = "$date $time $plate\n" . $posts;
file_put_contents("posts.txt", $posts);
echo $posts;

$handle = fopen("posts.txt", "r");
if(isset($_POST['action']) and $_POST['action']=='empty'){
    $handle = $fp=fopen("posts.txt", "w");
    fclose($fp);
}
?>
<form action="index.php" method="post">

    <input type="hidden" name="action" value="empty">
    <input type="submit" value="empty" onclick="" />

</form>


</body>
</html>
