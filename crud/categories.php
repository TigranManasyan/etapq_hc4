<?php
    $conn = mysqli_connect("localhost", "root", "", "test");
    $q = mysqli_query($conn, "SELECT * FROM `categories`");
    $categories = mysqli_fetch_all($q, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    <a href="./new_category.php">Create new category</a>
    <table border='1' cellpadding='15' cellspacing='0'>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($categories as $index => $category) {
                    $index += 1;
                    echo "<tr>
                        <td>$index</td>
                        <td><a href='./edit_category.php?id={$category['id']}'>{$category['name']}</a></td>
                        <td><a href='./delete_category.php?id={$category['id']}'>Delete</a></td>
                    </tr>
                    ";
                } 
            ?>
        </tbody>
    </table>
</body>
</html>