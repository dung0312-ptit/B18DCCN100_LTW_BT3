<?php
include '../Conn.php';
$id = $_GET['id'];
$status = $_GET['status'] + 1;
$date = new \DateTime();
$stadate = $date->format("Y-m-d H:i:s");

$sql = "INSERT INTO `status` (`id`, `ordersID`, `time`, `status`) VALUES (NULL, '$id', '$stadate', '$status')";
if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $done = false;
}

$sql = "UPDATE `orders` SET `status` = '$status' WHERE `orders`.`id` = $id";
if (mysqli_query($conn, $sql)) {
    header("Location:../index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

