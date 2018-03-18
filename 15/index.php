<?php include('php_code.php');
?>
<?php
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

    if (count($record) == 1 ) {
        $n = mysqli_fetch_array($record);
        if (empty($n)) {
            die('Data Not Found');
        }
        $date = $n['date'];
        $time = $n['time'];
        $licence = $n['licence'];
        $distance = $n['distance'];
        $elapsed = $n['elapsed'];
        $speed = $n['speed'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>CRUD: Create, Update, Delete, View PHP Auto MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<img class="retro" src="https://images.cdn.circlesix.co/image/uploads/posts/2016/10/9b50b24f409eaac78466bc7537ba65c4.gif" width="290" height="170">
<h2 class="headline">AUTO (Create, Update, Delete, View)!</h2>
<?php if (isset($_SESSION['message'])): ?>
    <div class="msg">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>
<?php
if (empty($results)) {
    $results = mysqli_query($db, "SELECT * FROM info");
}
?>

<table>
    <thead>
    <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Licence</th>
        <th>Distance</th>
        <th>Elapsed</th>
        <th>Top Speed</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['licence']; ?></td>
            <td><?php echo $row['distance']; ?></td>
            <td><?php echo $row['elapsed']; ?></td>
            <td><?php echo $row['speed']; ?></td>
            <td>
                <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
            </td>
            <td>
                <a href="php_code.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
    <form method="post" action="php_code.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class=""input-group">
            <label>Date:</label>
        <input type="date" name="date" value="<?php echo $date; ?>">
        </div>

        <div class=""input-group">
            <label>Time:</label>
        <input type="text" name="time" value="<?php echo $time; ?>">
        </div>

        <div class=""input-group">
            <label>Licence Plate:</label>
        <input type="text" name="licence" value="<?php echo $licence; ?>">
        </div>

        <div class=""input-group">
            <label>Distance Travelled:</label>
        <input type="text" name="distance" value="<?php echo $distance; ?>">
        </div>

        <div class=""input-group">
            <label>Time Elapsed:</label>
        <input type="text" name="elapsed" value="<?php echo $elapsed; ?>">
        </div>

        <div class=""input-group">
        <label>Top Speed</label>
        <input type="text" name="speed" value="<?php echo $speed; ?>">
        </div>

        <div class="input-group">
            <?php if ($update == true): ?>
                <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
            <?php else: ?>
                <button class="btn" type="submit" name="save" >Save</button>
            <?php endif ?>
        </div>
    </form>
    <form method="get" action="index.php">
        <label>Search!</label>
        <input type="text" name="query" />
    </form>


</body>
</html>
//Hello

