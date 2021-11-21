<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
include 'Conn.php';

$sql = "SELECT * FROM orders WHERE id='".$_GET['id']."'";
$orders = mysqli_query($conn,$sql);
if(false===$orders){
    echo "<script>alert('loi tum lum')</script>";
}
if(mysqli_num_rows($orders) >0 ){
    while ($row = mysqli_fetch_array($orders)){
      $order=$row;
    }
}


$sql = "SELECT * FROM status WHERE ordersID='".$order['id']."'";
$result = mysqli_query($conn,$sql);
if(false === $result){
    echo "<script>alert('status errors')</script>";
}
if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        $orderSta[] = $row;
    }
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
        <?php require_once 'components/OrderTracking.php'?>


        <div class="condition bg-white mb-5">
            <h5 class="mt-3 font-weight-bold">Chi Tiết Đơn Hàng</h5>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Minh họa</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Thành Tiền</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">
                        1
                    </th>
                    <td><img src="assets/order1/Yai_sThaiPrikKhingCurry_720x.png" width="50" alt="NotSauce"></td>
                    <td >Cà ri Prik Khing</td>
                    <td>1</td>
                    <td>50.000</td>
                    <td>50.000</td>
                </tr>
                <tr>
                    <th scope="row">
                        2
                    </th>
                    <td><img src="assets/order1/Yai_sThaiPrikKhingCurry_720x.png" width="50" alt="NotSauce"></td>
                    <td >Cà ri PaNang</td>
                    <td>2</td>
                    <td>15.000</td>
                    <td>30.000</td>
                </tr>
                <tr>
                    <th scope="row">
                       3
                    </th>
                    <td> <img src="assets/order1/7_720x.png" width="50" alt="NotSauce"></td>
                    <td>Cà ri Massaman</td>
                    <td>1</td>
                    <td>35.000</td>
                    <td>35.000</td>
                </tr>
                <tr>
                    <th scope="row" colspan="5" class="text-right pr-5">Tổng Tiền</th>
                    <td class="text-warning font-weight-bolder">115.000</td>
                </tr>
                <tr>
                    <th scope="row" colspan="4" class="text-right pr-5">Thanh Toán</th>
                    <td colspan="2" >
                        <i class="fa fa-cc-mastercard"></i>
                        Mastercard ******5342
                    </td>
                </tr>
                <tr>
                    <th scope="row" colspan="4" class="text-right pr-5">Phí Ship</th>
                    <td colspan="2" >
                       15.000
                    </td>
                </tr>
                <tr>
                    <th scope="row" colspan="4" class="text-right pr-5">Khách Trả</th>
                    <td colspan="2" >
                       Có
                    </td>
                </tr> <tr>
                    <th scope="row" colspan="4" class="text-right pr-5">Thực Thu</th>
                    <td colspan="2" class="text-warning font-weight-bolder">
                        <h4>115.000</h4>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
</body>
</html>