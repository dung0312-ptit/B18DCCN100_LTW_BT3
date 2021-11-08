<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<?php
    $title = 'Tạo đơn mới';
    require_once "included/header.php";
?>

<body class="bg-light">
<?php
require_once 'included/navbar.php';
?>
<section class="py-3">
    <div class="container px-1 mx-auto">
        <form action="index.php" method="get" class="order bg-white">
            <div class="row mt-5">
                <div class="col-12 col-lg-6 mt-3">
                    <div class="d-flex  justify-content-between pr-lg-5 mb-3">
                        <label class="text-muted" for="name">Sản phẩm</label>
                        <div>
                            <div class="d-flex">
                                <select class="form-control" id="chonsp" name="chonsp">
                                    <option value="1">Cà ri số 1</option>
                                    <option value="2">Cà ri cay/option>
                                    <option value="3">cà ri không cay</option>
                                </select>
                                <input class="form-control ml-3 w-25" id="name" name="name" placeholder=" số lượng" type="text"/>
                            </div>
                            <a class="text-center" href="#">
                                <i class="fa fa-plus-square-o fa-2x mt-3" aria-hidden="true"></i>
                            </a>

                        </div>

                    </div>
                    <div class="d-flex align-items-center justify-content-between pr-lg-5 mb-3">
                        <label class="text-muted" for="payment_method">Hình thức thanh toán</label>
                        <select class="form-control w-50" id="payment_method" name="payment_method">
                            <option value="1">Ship Cod</option>
                            <option value="2">Đã chuyển khoản</option>
                        </select>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pr-lg-5 mb-3">
                        <label class="text-muted">Tổng tiền</label>
                        <h5 class="font-weight-lighter font-italic">Tự Động tính</h5>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-3">
                    <div class="d-flex align-items-center justify-content-between pr-lg-5 mb-3">
                        <label class="text-muted" for="customer">Tên khách hàng</label>
                        <input class="form-control w-50" id="customer" name="customer" placeholder="Nhập tên khách hàng"
                               type="text"/>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pr-lg-5 mb-3">
                        <label class="text-muted" for="address">Địa chỉ</label>
                        <input class="form-control w-50" id="address" name="address" placeholder="Nhập địa chỉ khách hàng"
                               type="text"/>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pr-lg-5 mb-3">
                        <label class="text-muted" for="tel">Số điện thoại</label>
                        <input class="form-control w-50" id="tel" name="tel" placeholder="Nhập số điện thoại khách hàng"
                               type="tel"/>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pr-lg-5 mb-3">
                        <label class="text-muted" for="email">Email</label>
                        <input class="form-control w-50" id="email" name="email" placeholder="Nhập số email khách hàng"
                               type="email"/>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pr-lg-5 mb-3">
                        <label class="text-muted" for="note">Lưu ý của khách</label>
                        <textarea class="form-control w-50" id="note" name="note" placeholder="Nhập lưu ý">
                    </textarea>
                    </div>
                </div>
                <div class="text-center w-100 ">
                    <button class="btn btn-warning m-auto text-center mt-3">Thêm mới</button>
                </div>

            </div>
        </form>
    </div>
</section>
</body>
<?php
require_once "included/footer.php";
?>