<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<?php
$title = 'Danh sach don hang';
require_once 'included/header.php';
?>
<body class="bg-light">
<?php
require_once 'included/navbar.php';
?>
    <section class="py-3">
        <div class="container px-1 py-5 mx-auto">
            <!-- tab -->
            <ul class="nav nav-pills bg-white justify-content-between">
                <li class="nav-item">
                    <a href="#tab1" data-toggle="tab" class="nav-link active">Tất Cả</a>
                </li>
                <li class="nav-item">
                    <a href="#tab2" data-toggle="tab" class="nav-link">Chờ Xác Nhận</a>
                </li>
                <li class="nav-item">
                    <a href="#tab3" data-toggle="tab" class="nav-link">Chuẩn Bị Hàng</a>
                </li>
                <li class="nav-item">
                    <a href="#tab4" data-toggle="tab" class="nav-link">Đang Giao </a>
                </li>
                <li class="nav-item">
                    <a href="#tab5" data-toggle="tab" class="nav-link">Thành Công</a>
                </li>
                <li class="nav-item">
                    <a href="#tab6" data-toggle="tab" class="nav-link">Đã Hủy</a>
                </li>
            </ul>

            <!-- Nội dung -->
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">

                    <!--                    order1-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Di Thanh Long</p>
                                <h3 class="mx-2">#00001</h3>
                                <a href="OrderDetail.html">Xem Chi Tiết</a>
                            </div>

                            <div class="d-flex text-primary">
                                <i class="fa fa-hand-o-left mx-2" aria-hidden="true"></i>
                                <p>Đang chuẩn bị hàng</p>
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

                    <!--                    order2-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Thiết Nguyễn</p>
                                <h3>#00002</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-check-circle-o mx-2" aria-hidden="true"></i>
                                <p>Chờ xác nhận</p>
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
                                <th scope="row" colspan="3">Tổng Tiền</th>
                                <td>80.000</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="mx-2">Xác Nhận Đơn Hàng</button>
                            <button class="mx-2">Liên Hệ Người Mua</button>
                            <button class="bg-warning">Hủy Đơn</button>
                        </div>
                    </div>
                    <!--order 3-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Thiết Nguyễn</p>
                                <h3>#00003</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-check-circle-o mx-2" aria-hidden="true"></i>
                                <p>Chờ xác nhận</p>
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
                            <button class="mx-2">Xác Nhận Đơn Hàng</button>
                            <button class="mx-2">Liên Hệ Người Mua</button>
                            <button class="bg-warning">Hủy Đơn</button>
                        </div>
                    </div>
                    <!--order4-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Thiết KwangTu PTIT</p>
                                <h3>#00004</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-truck mx-2" aria-hidden="true"></i>
                                <p>Đang Giao Hàng</p>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
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
                                <td>65.000</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="mx-2">Liên Hệ Người Mua</button>
                            <button class="bg-warning">Hủy Đơn</button>
                        </div>
                    </div>
                    <!--                    order 5-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Ms Kim</p>
                                <h3>#00005</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-check mx-2" aria-hidden="true"></i>
                                <p>Giao Hàng Thành Công</p>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <img src="assets/order1/Yai_sThaiPrikKhingCurry_720x.png" width="50" alt="NotSauce">
                                </th>
                                <td colspan="2">Cà ri Prik Khing<br>x2</td>
                                <td>100.000</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="3">Tổng Tiền</th>
                                <td>100.000</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="mx-2">Liên Hệ Người Mua</button>

                        </div>
                    </div>

                    <!--                    order 6-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Ms Kim</p>
                                <h3>#00006</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-check mx-2" aria-hidden="true"></i>
                                <p>Giao Hàng Thành Công</p>
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
                            <button class="mx-2">Liên Hệ Người Mua</button>
                        </div>
                    </div>

                    <!--                    order 7-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Nguyễn Xuân Xoong</p>
                                <h3>#0007</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-truck mx-2" aria-hidden="true"></i>
                                <p>Đang Giao Hàng</p>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
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
                                <td>65.000</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="mx-2">Liên Hệ Người Mua</button>
                            <button class="bg-warning">Hủy Đơn</button>
                        </div>
                    </div>

                    <!--                    order 8-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Lom Dom Phùng</p>
                                <h3>#00008</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-ban mx-2" aria-hidden="true"></i>
                                <p>Đã Hủy</p>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <img src="assets/order1/7_720x.png" width="50" alt="NotSauce">
                                </th>
                                <td colspan="2">Cà ri Massaman<br>x1</td>
                                <td>35.000</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="3">Tổng Tiền</th>
                                <td>35.000</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="mx-2">Liên Hệ Người Mua</button>
                        </div>
                    </div>

                    <!--                    order 9-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Nguyễn Tuấn Dũng</p>
                                <h3>#00009</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-truck mx-2" aria-hidden="true"></i>
                                <p>Đang Giao Hàng</p>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <img src="assets/order1/Yai_sThaiPrikKhingCurry_720x.png" width="50" alt="NotSauce">
                                </th>
                                <td colspan="2">Cà ri Prik Khing<br>x5</td>
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
                                <td>315.000</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="mx-2">Liên Hệ Người Mua</button>
                            <button class="bg-warning">Hủy Đơn</button>
                        </div>
                    </div>


                    <!--                    order 10-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Hùng Nguyễn</p>
                                <h3>#00010</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-ban mx-2" aria-hidden="true"></i>
                                <p>Đã Hủy Bởi Người Mua</p>
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

                <!--                tab2 - cho xac nhan-->
                <div class="tab-pane container fade" id="tab2">
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Thiết Nguyễn</p>
                                <h3>#00002</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-check-circle-o mx-2" aria-hidden="true"></i>
                                <p>Chờ xác nhận</p>
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
                                <th scope="row" colspan="3">Tổng Tiền</th>
                                <td>80.000</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="mx-2">Xác Nhận Đơn Hàng</button>
                            <button class="mx-2">Liên Hệ Người Mua</button>
                            <button class="bg-warning">Hủy Đơn</button>
                        </div>
                    </div>
                    <!--order 3-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Thiết Nguyễn</p>
                                <h3>#00003</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-check-circle-o mx-2" aria-hidden="true"></i>
                                <p>Chờ xác nhận</p>
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
                            <button class="mx-2">Xác Nhận Đơn Hàng</button>
                            <button class="mx-2">Liên Hệ Người Mua</button>
                            <button class="bg-warning">Hủy Đơn</button>
                        </div>
                    </div>
                </div>

                <!--                tab 3 -  chuan bi hang-->
                <div class="tab-pane container fade" id="tab3">
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Di Thanh Long</p>
                                <h3>#00001</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>

                            <div class="d-flex text-primary">
                                <i class="fa fa-hand-o-left mx-2" aria-hidden="true"></i>
                                <p>Đang chuẩn bị hàng</p>
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


                </div>

                <!--                tab4 - giao hang-->
                <div class="tab-pane container fade" id="tab4">
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Thiết KwangTu PTIT</p>
                                <h3>#00004</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-truck mx-2" aria-hidden="true"></i>
                                <p>Đang Giao Hàng</p>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
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
                                <td>65.000</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="mx-2">Liên Hệ Người Mua</button>
                            <button class="bg-warning">Hủy Đơn</button>
                        </div>
                    </div>

                    <!--                    order 7-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Nguyễn Xuân Xoong</p>
                                <h3>#0007</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-truck mx-2" aria-hidden="true"></i>
                                <p>Đang Giao Hàng</p>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
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
                                <td>65.000</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="mx-2">Liên Hệ Người Mua</button>
                            <button class="bg-warning">Hủy Đơn</button>
                        </div>
                    </div>
                    <!--                    order 9-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Nguyễn Tuấn Dũng</p>
                                <h3>#00009</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-truck mx-2" aria-hidden="true"></i>
                                <p>Đang Giao Hàng</p>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <img src="assets/order1/Yai_sThaiPrikKhingCurry_720x.png" width="50" alt="NotSauce">
                                </th>
                                <td colspan="2">Cà ri Prik Khing<br>x5</td>
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
                                <td>315.000</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="mx-2">Liên Hệ Người Mua</button>
                            <button class="bg-warning">Hủy Đơn</button>
                        </div>
                    </div>
                </div>

                <!--                tab 5 - giao thanh cong-->
                <div class="tab-pane container fade" id="tab5">
                    <!--                    order 5-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Ms Kim</p>
                                <h3>#00005</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-check mx-2" aria-hidden="true"></i>
                                <p>Giao Hàng Thành Công</p>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <img src="assets/order1/Yai_sThaiPrikKhingCurry_720x.png" width="50" alt="NotSauce">
                                </th>
                                <td colspan="2">Cà ri Prik Khing<br>x2</td>
                                <td>100.000</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="3">Tổng Tiền</th>
                                <td>100.000</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="mx-2">Liên Hệ Người Mua</button>

                        </div>
                    </div>

                    <!--                    order 6-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Ms Kim</p>
                                <h3>#00006</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-check mx-2" aria-hidden="true"></i>
                                <p>Giao Hàng Thành Công</p>
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
                            <button class="mx-2">Liên Hệ Người Mua</button>
                        </div>
                    </div>

                </div>

                <!--                tab 6 - da huy-->
                <div class="tab-pane container fade" id="tab6">
                    <!--                    order 8-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Lom Dom Phùng</p>
                                <h3>#00008</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-ban mx-2" aria-hidden="true"></i>
                                <p>Đã Hủy</p>
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <img src="assets/order1/7_720x.png" width="50" alt="NotSauce">
                                </th>
                                <td colspan="2">Cà ri Massaman<br>x1</td>
                                <td>35.000</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="3">Tổng Tiền</th>
                                <td>35.000</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            <button class="mx-2">Liên Hệ Người Mua</button>
                        </div>
                    </div>
                    <!--                    order 10-->
                    <div class="bg-white order">
                        <div class="justify-content-between d-flex  font-weight-bold">
                            <div class="d-flex">
                                <p class="mx-2">Hùng Nguyễn</p>
                                <h3>#00010</h3>
                                <a href="OrderDetail.html" class="mx-2">Xem Chi Tiết</a>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fa fa-ban mx-2" aria-hidden="true"></i>
                                <p>Đã Hủy Bởi Người Mua</p>
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
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </button>
        </div>
    </section>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>
<?php require_once 'included/footer.php'; ?>