<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if(isset($_POST['name']) && isset($_POST['id']) && !empty($_POST['name']) && !empty($_POST['id'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    echo $name;
    mysqli_query($conn, "UPDATE `categories` SET `name` = '$name' WHERE id = $id");
    header("location:categories.php");
}