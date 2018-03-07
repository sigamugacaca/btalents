<html>
<head>
    <title>Vehicle History</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form id="form" name="form" method="post" action="">
    <label>Add The Date
        <input type="date" name="date" id="date" value ="" />
    </label>
    <label>Add The Time
        <input type="time" name="time" id="time" value="" />
    </label>
    <label>Add Plate # (Example: ABC 001)
        <input type="text" name="plate" id="plate" value="" />
    </label>
    <label>Distance Traveled (Meters)
        <input type="number" name="distance" id="distance" value="" />
    </label>
    <label>Time Spent (Seconds)
        <input type="number" name="elapsed" id="elapsed" value="" />
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
$distance = $_POST["distance"];
$elapsed = $_POST["elapsed"];

$posts = file_get_contents("posts.txt");
$posts = "$date $time $plate $distance $elapsed\n" . $posts;
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

    <?php
    {
        echo '<tr><td>' . $date . '</td><td>' . $time . '</td><td>' . $plate . '</td><td>' . $distance . '</td><td>' . $elapsed . '</td></tr>';
    }
    ?>
    <?php
    $page = $_GET['page']??1;
    $limit = 10;
    $offset = ($page -1) * $limit;
    $automobiliai = [];
    $dbh = new PDO('mysql:host=localhost;dbname=Auto', 'root', 'root');
    foreach($dbh->query('SELECT * from Radars order by `date` desc limit 10 offset ' . $offset)->fetchALL(PDO::FETCH_NAMED) as $row) {
    $automobiliai[] = $row;
    }
    $dbh = null;
    foreach ($automobiliai as $auto) {
        echo $auto['date'].$auto['time'].$auto['number'].$auto['distance'].$auto['elapsed'].'<br>';
    }
    ?>
</body>
</html>
// Hello
// Hello