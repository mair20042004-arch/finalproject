<?php
include "connectiOnDataBase.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $sql = "INSERT INTO categories (name) VALUES ('$name')";
    if ($connection->query($sql)){
        echo "Added Successfully";
    }
}

?>

<form method="POST">
    <label>category name:</label>
    <input type="text" name="name" required>
    <button type="submit"></button>
</form>