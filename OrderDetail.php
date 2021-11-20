<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
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
        <div class="bg-white condition">
            <div class="row d-flex justify-content-between px-3 top">
                <div class="d-flex font-weight-bolder">
                    <h5>Đơn Hàng <span class="text-primary font-weight-bold"><?php echo $_GET['id']?></span></h5>
                </div>
                <div class="d-flex flex-column text-sm-right font-weight-bolder font-italic">
                    <p class="mb-0">Giao hàng dự kiến <span>01/12/21</span></p>
                </div>
            </div>
            <!-- Add class 'active' to progress -->
            <div class="mt-5 mx-5">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%"></div>
                </div>
                <div class="d-flex justify-content-between mt-4 font-weight-light ">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-check-circle-o mx-2 fa-3x" aria-hidden="true"></i>
                        <h6 >Chờ xác nhận</h6>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-hand-o-left mx-2 fa-3x" aria-hidden="true"></i>
                        <h6 >Đang chuẩn bị hàng</h6>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-truck mx-2 fa-3x" aria-hidden="true"></i>
                        <h6 >Đang Giao Hàng</h6>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-check mx-2 fa-3x" aria-hidden="true"></i>
                        <h6 >Giao Hàng Thành Công</h6>
                    </div>
                </div>
            </div>
        </div>

<!--        dia chi nhan hang, hanh trinh don hang-->
        <div class="justify-content-between row my-3">
            <div class="col-4 bg-white condition">
                <h5 class="mt-3 font-weight-bold">Địa Chỉ Giao Hàng</h5>
                <h6 class="mt-3 font-weight-light">Thiết KwangTuPTIT</h6>
                <h6 class="mt-3 font-weight-bolder text-warning">0888686868</h6>
                <h6 class="mt-3 font-weight-light font-italic">Hồ Gươm Plaza Hà Đông, Trần Phú, Mộ Lao, Hà Đông, Hà Nội</h6>
            </div>
            <div class="col-7 bg-white condition">
                <h5 class="mt-3 font-weight-bold">Hành Trình Đơn Hàng</h5>

                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row" class="text-primary">
                               01/10/21 23:20
                            </th>
                            <td colspan="2">Đơn hàng được xác nhận</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-primary">
                                02/10/21 07:40
                            </th>
                            <td colspan="2">Kho chuẩn bị hàng</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-primary">
                               05/10/21 20:05
                            </th>
                            <td colspan="2">Hoàn tất kiểm tra</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-primary">
                            <td colspan="2">Chờ đơn vị vận chuyển</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-primary">
                                06/10/21 09:05
                            </th>
                            <td colspan="2">Đơn vị vận chuyển nhận hàng và giao cho khách hàng</td>
                        </tr>
                        </tbody>
                    </table>

            </div>
        </div>
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