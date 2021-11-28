<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
include 'Conn.php';

$sql = "SELECT * FROM orders WHERE id='" . $_GET['id'] . "'";
$orders = mysqli_query($conn, $sql);
if (false === $orders) {
    echo "<script>alert('loi tum lum')</script>";
}
if (mysqli_num_rows($orders) > 0) {
    while ($row = mysqli_fetch_array($orders)) {
        $order = $row;
    }
}


$sql = "SELECT * FROM status WHERE ordersID='" . $order['id'] . "'";
$result = mysqli_query($conn, $sql);
if (false === $result) {
    echo "<script>alert('status errors')</script>";
}
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $orderSta[] = $row;
    }
}

$sql = "SELECT * FROM ordersdetails WHERE ordersID='" . $order['id'] . "'";
$result = mysqli_query($conn, $sql);
$items = array();
if (false === $result) {
    echo "<script>alert('loi tum lum')</script>";
}
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $items[] = $row;
    }
} else {
    echo "<script>alert('không có hàng')</script>";
}
?>
<?php
$title = 'Chi tiết đơn hàng';
require_once 'included/header.php';
?>
<body class="bg-light">
<?php
require_once 'included/navbar.php';
?>
<section class="py-3">
    <div class="container px-1 mx-auto">
        <?php require_once 'included/OrderTracking.php' ?>


        <div class="condition bg-white mb-5 p-2">
            <h5 class="mt-3 font-weight-bold">Chi Tiết Đơn Hàng</h5>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Tên</th>
                    <th scope="col"></th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Thành Tiền</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($items as $item):
                    ?>
                    <?php
                    include 'Conn.php';

                    $proID = $item['productID'];
                    $sql = "SELECT * FROM product WHERE id='$proID'";
                    $result = mysqli_query($conn,$sql);
                    $items = array();
                    if(false===$result){
                        echo "<script>alert('loi tum lum')</script>";
                    }
                    if(mysqli_num_rows($result) >0 ){
                        $row = mysqli_fetch_assoc($result);
                        $pro  = $row;

                    }else{
                        echo"<script>alert('khong tim thay mat hang')</script>";
                    }
                    ?>
                    <tr>
                        <th scope="row">
                            <img src=<?php echo $pro['image'] ?> width="50" alt="NotSauce">
                        </th>
                        <td colspan="2"><?php echo $pro['name'] ?></td>
                        <td><?php echo $item['amount'] ?></td>
                        <td><?php echo $pro['price']?></td>
                        <td><?php echo $item['totalPrice'] ?></td>
                    </tr>
                <?php
                endforeach;
                ?>

                <tr>
                    <th scope="row" colspan="5" class="text-right pr-5">Tổng Tiền</th>
                    <td class="text-warning font-weight-bolder"><?php echo $order['totalPrice']?></td>
                </tr>
                <tr>
                    <th scope="row" colspan="4" class="text-right pr-5">Thanh Toán</th>
                    <td colspan="2">
                        <i class="fa fa-cc-mastercard"></i>
                        <?php echo $order['paymentMethod']?>
                    </td>
                </tr>
                <tr>
                    <th scope="row" colspan="4" class="text-right pr-5">Phí Ship</th>
                    <td colspan="2">
                        <?php echo $order['shippingFee']?>
                    </td>
                </tr>
                <tr>
                    <th scope="row" colspan="4" class="text-right pr-5">Khách Trả</th>
                    <td colspan="2">
                        <?php
                            switch ($order['clientCharge']){
                                case '0':
                                    echo "Không";
                                    break;
                                case '1':
                                    echo "Có";
                                    break;
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row" colspan="4" class="text-right pr-5">Thực Thu</th>
                    <td colspan="2" class="text-warning font-weight-bolder">
                        <h4>   <?php
                            switch ($order['clientCharge']){
                                case '1':
                                    echo $order['totalPrice'];
                                    break;
                                case '0':
                                    echo $order['totalPrice'] - $order['shippingFee'];
                                    break;
                            }
                            ?></h4>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
</body>
</html>