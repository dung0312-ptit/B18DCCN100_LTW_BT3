<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "notsauceorder";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Lỗi kết nối')</script>");
}

?>
