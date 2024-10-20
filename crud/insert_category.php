<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if(isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    mysqli_query($conn, "INSERT INTO `categories` (name) VALUES ('$name')");
    header("location:categories.php");
}