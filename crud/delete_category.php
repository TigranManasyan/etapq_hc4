<?php
    $conn = mysqli_connect("localhost", "root", "", "test");
    if(!isset($_GET['id'])) {
        header("location:categories.php");
    }
    $id = $_GET['id'];
    $q = mysqli_query($conn, "DELETE FROM `categories` WHERE id = $id");
    header("location:categories.php");