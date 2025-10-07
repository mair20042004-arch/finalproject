<?php
include "connectiOnDataBase.php";
$id = $_GET['id'];
$result = $connection->query("SELECT FROM news WHERE id=$id");
$news =$result->fetch_assoc();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $cat_id = $_POST['category'];

    $sql = "UPDATE news SET title='$title', content='$content', category_id='$cat_id' WHERE id=$id";
    if ($connection->query($sql)){
        echo "The news has been modified";
    }
}
$cats = $connection->query("SELECT * FROM categories");
?>
<form>
    <label>The Address:</label>
    <input type="text" name="title" value="<?php echo $news['title']; ?>" required><br>
    <label>The Content:</label>
    <textarea name="content" required><?php echo $news['content']; ?></textarea><br>
    <label>The Category:</label>
    <select name="category">
        <?php while($row = $cats->fetch_assoc()) {?>
            <option value="<?php echo $row['id']; ?>"
            <?php if($row['id']==$news['category_id']) echo "selected"; ?>>
            <?php echo $row['name']; ?>
            </option>
        <?php } ?>
    </select>
    <br>
    <button type="submit">Save The Modifications</button>
</form>