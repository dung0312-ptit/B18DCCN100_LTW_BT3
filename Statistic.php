<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<?php
$title = 'Thống kê';
require_once "included/header.php";
?>

<body class="bg-light">
<?php
require_once 'included/navbar.php';
?>
<section class="py-3">
    <div class="container px-1 py-5 mx-auto">


    </div>
</section>
</body>
<?php

require_once "included/footer.php";
?>
