<?php
    $conn = mysqli_connect("localhost", "root", "", "test");
    if(!isset($_GET['id'])) {
        header("location:categories.php");
    }
    $id = $_GET['id'];
    $q = mysqli_query($conn, "SELECT * FROM `categories` WHERE $id");
    $category = mysqli_fetch_assoc($q);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category <?php echo $category['name']; ?></title>
</head>
<body>
    <form action="./update_category.php" method="post">
        <input type="hidden" name='id' value='<?php echo $category['id']; ?>'>
        <input type="text" name='name' value="<?php echo $category['name']; ?>">
        <button>Save changes</button>
    </form>
    <a href="./categories.php">Back</a>
</body>
</html>