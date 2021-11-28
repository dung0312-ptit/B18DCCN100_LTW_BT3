<?php
session_start();
include '../Conn.php';
$id = $_GET['id'];
$date = new \DateTime();
$stadate = $date->format("Y-m-d H:i:s");

$sql = "INSERT INTO `status` (`id`, `ordersID`, `time`, `status`) VALUES (NULL, '$id', '$stadate', '4')";
if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $done = false;
}

$sql = "UPDATE `orders` SET `status` = '4' WHERE `orders`.`id` = $id";
if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] ="Đã hủy đơn";
    header("Location:../index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
