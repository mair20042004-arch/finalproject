<?php
include "connectiOnDataBase.php";

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $connection->query("DELETE FROM news WHERE id =$id");
    echo "new is deleted";

}
$result = $connection->query("SELECT news.id, news.title, news.content, categories.name as category FROM news LEFT JOIN categories ON news.category_id = categories.id");
?>

<h2>All News</h2>
<tabel border="1">
    <tr><th>ID</th><th>Address</th><th>category</th><th>procedures</th></tr>
    <?php while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['content']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td>
                <a herf="edit_news.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a herf="view_news.php?delete=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>

</table>