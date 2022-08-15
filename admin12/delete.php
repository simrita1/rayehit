<?php
require("connection.php");
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../index.php');
} else {
    if (isset($_GET['id'])) {
        $productId = $_GET["id"];
        $query = "DELETE FROM properties WHERE id = $productId";
        $data = $conn->query($query);

        if ($data) {
            header("location: index.php");
        }
    } else {
        header('location: ./sellerdb.php');
    }
}
