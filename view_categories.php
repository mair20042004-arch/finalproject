<?php
include "connectiOnDataBase.php";
$result = $connection->query("SELECT * FROM categories");
?>

<h2>All categories:</h2>
<tabel border="1">
    <tr><th>ID</th><th>category name:</th></tr>
    <?php while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
        </tr>
        <?php } ?>
</tabel>
