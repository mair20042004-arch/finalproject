<?php
session_start();
$name = $_SESSION["authUser"]["name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <center>
        <h1>Hello in Dashboard<?php echo $name;?></h1>
    </center>
    <div>
        <h2>Welcome<?php echo $name; ?></h2>
        <p>Select The Operation You Want to perform:</p>
        <a href="add_category.php">Add Category:</a><br>
        <a href="view_categories.php">View Categories:</a><br>
        <a href="add_news.php">Add News:</a><br>
        <a href="view_news.php">View News:</a>

    </div>
</body>
</html>