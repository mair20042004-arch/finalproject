<?php
include "connectiOnDataBase.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $cat_id = $_POST['category'];

    $sql = "INSERT INTO news (title, content , category_id) VALUES ('$title','$content','$cat_id)";
    if ($connection->query($sql)){
        echo "The News has been successfully added";
    }
}

$result = $connection->query("SELECT * FROM categories");
?>

<form method="POST">
    <label>Addres:</label>
    <input type="text" name="title" required><br>
    <label>Content:</label>
    <textarea name="content" required></textarea><br>
    <label>Category:</label>
    <select name="category">
        <?php while($row = $result->fetch_assoc()){?>
            <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
            <?php } ?>
    </select>
    <br>
    <button type="submit">Add New</button>
</form>