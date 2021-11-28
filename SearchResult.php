<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
$search = $_POST['search'];
?>
<?php
$title = 'Tìm kiếm đơn';
require_once "included/header.php";
?>

<body class="bg-light">
<?php
require_once 'included/navbar.php';
?>
<section class="py-3">
    <div class="container px-1 py-5 mx-auto">
       <div class="font-italic font-weight-light border-dark border-bottom" >
           <h3><?php echo "Đơn hàng phù hợp '".$search."'"?></h3>
       </div>
        <div>
            <?php
            include 'Conn.php';

            $sql = "SELECT * FROM orders where id like '%$search%'";
            $orders = mysqli_query($conn,$sql);
            if(false===$orders){
                echo "<script>alert('loi tum lum')</script>";
            }
            if(mysqli_num_rows($orders) >0 ){
                while ($row = mysqli_fetch_array($orders)){
                    $id = $row['id'];
                    $name = $row['clientName'];
                    $status = $row['status'];
                    $totalPrice = $row['totalPrice'];

                    require 'included/OrderSumary.php';
                }
            }
            ?>
        </div>

    </div>
</section>
</body>
<?php

require_once "included/footer.php";
?>