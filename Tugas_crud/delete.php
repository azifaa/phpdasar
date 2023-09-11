<?php
include 'connect.php';

session_start();

if (!isset($_SESSION['email'])) {
    echo "<script>alert('maaf, anda belum login!');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from produk where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:read.php');
    } else {
        die($conn->$connect_error);
    }
}
?>