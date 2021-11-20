<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
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
           <h3>2 đơn hàng tương ứng "0001"</h3>
       </div>
        <div>
            <div class="bg-white order">
                <div class="justify-content-between d-flex  font-weight-bold">
                    <div class="d-flex">
                        <p class="mx-2">Di Thanh Long</p>
                        <h3 class="mx-2">#00001</h3>
                        <a href="OrderDetail.php">Xem Chi Tiết</a>
                    </div>

                    <div class="d-flex text-primary">
                        <i class="fa fa-hand-o-left mx-2" aria-hidden="true"></i>
                        <p >Đang chuẩn bị hàng</p>
                    </div>
                </div>
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">
                            <img src="assets/order1/Yai_sThaiPrikKhingCurry_720x.png" width="50" alt="NotSauce">
                        </th>
                        <td colspan="2">Cà ri Prik Khing<br>x1</td>
                        <td>50.000</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="assets/order1/6_720x.png" width="50" alt="NotSauce">
                        </th>
                        <td colspan="2">Cà ri PaNang<br>x2</td>
                        <td>30.000</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="assets/order1/7_720x.png" width="50" alt="NotSauce">
                        </th>
                        <td colspan="2">Cà ri Massaman<br>x1</td>
                        <td>35.000</td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="3">Tổng Tiền</th>
                        <td>115.000</td>
                    </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <button class="mx-x">Hoàn tất đóng gói
                    </button>
                    <button class="mx-2">Liên Hệ Người Mua</button>
                    <button class="bg-warning">Hủy Đơn</button>
                </div>
            </div>

            <div class="bg-white order">
                <div class="justify-content-between d-flex  font-weight-bold">
                    <div class="d-flex">
                        <p class="mx-2">Hùng Nguyễn</p>
                        <h3>#00010</h3>
                        <a href="OrderDetail.php" class="mx-2">Xem Chi Tiết</a>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fa fa-ban mx-2" aria-hidden="true"></i>
                        <p >Đã Hủy Bởi Người Mua</p>
                    </div>
                </div>
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">
                            <img src="assets/order1/Yai_sThaiPrikKhingCurry_720x.png" width="50" alt="NotSauce">
                        </th>
                        <td colspan="2">Cà ri Prik Khing<br>x1</td>
                        <td>50.000</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="assets/order1/6_720x.png" width="50" alt="NotSauce">
                        </th>
                        <td colspan="2">Cà ri PaNang<br>x4</td>
                        <td>60.000</td>
                    </tr>

                    <tr>
                        <th scope="row" colspan="3">Tổng Tiền</th>
                        <td>110.000</td>
                    </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <button class="mx-2">Liên Hệ Người Mua</button>
                </div>
            </div>
        </div>
        </div>

    </div>
</section>
</body>
<?php

require_once "included/footer.php";
?>