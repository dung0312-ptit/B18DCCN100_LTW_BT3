<?php
session_start();
//session
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
// lay danh sach san pham
include 'Conn.php';
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
$products = array();
if (false === $result) {
    echo "<script>alert('loi tum lum')</script>";
}
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
} else {
    echo "<script>alert('không có hàng')</script>";
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
        <form class="order bg-white insert-form" id="insert-form" method="post" action="actions/NewOrd.php">
            <div class="row mt-5">
                <div class="col-12 col-lg-6 mt-3">
                    <div class="d-flex  justify-content-between pr-lg-5 mb-3">
                        <label class="text-muted" for="name">Sản phẩm</label>
                        <div>
                            <div  id="pro_field">
                                <div class="d-flex align-items-center">
<!--                                    <select class="form-control" id="chonsp" name="chonsp[]">-->
<!--                                        --><?php
//                                            foreach ($products as $product):
//                                        ?>
<!--                                        <option value="--><?php //echo $product['id'] ?><!--">--><?php //echo $product['name']?><!--</option>-->
<!--                                        --><?php
//                                            endforeach;
//                                        ?>
<!--                                    </select>-->
<!--                                    <input class="form-control mx-2 w-25" id="amount" name="amount[]" placeholder="số lượng" type="text"/>-->
<!--                                    <input class="btn btn-outline-danger my-1" id="remove" value="">-->
<!--                                        <i class="fa fa-times" aria-hidden="true"></i>-->
<!--                                    </input>-->
                                </div>
                            </div>
                            <input class="btn btn-outline-success my-1" id="add" value="Thêm Sản Phẩm">
                            </input>
                        </div>


                    </div>
                    <div class="d-flex align-items-center justify-content-between pr-lg-5 mb-3">
                        <label class="text-muted" for="payment_method">Hình thức thanh toán</label>
                        <select class="form-control w-50" id="payment_method" name="payment_method">
                            <option value="cod">Ship Cod</option>
                            <option value="banking">Đã chuyển khoản</option>
                        </select>
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
                </div>
                <div class="text-center w-100 ">
                    <input class="btn btn-warning m-auto text-center mt-3" type="submit" name="save" id="save" value="Lưu Đơn"></input>
                </div>

            </div>
        </form>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function () {
        var html = ' <div class="d-flex align-items-center"><select class="form-control" id="chonsp" name="chonsp[]">  <?php foreach ($products as $product):?><option value="<?php echo $product['id'] ?>"><?php echo $product['name']?></option><?php endforeach;?></select> <input class="form-control mx-2 w-25" id="amount" name="amount[]" placeholder=" số lượng" type="text"/> <button class="btn btn-outline-danger my-1" id="remove" value="Remove"> <i class="fa fa-times" aria-hidden="true"></i> </button> </div>';

        $("#add").click(function () {
            $("#pro_field").append(html);
        });

        $("#pro_field").on('click','#remove',function () {
           $(this).closest('div').remove()
        });
    })

</script>
</body>
<?php
require_once "included/footer.php";
?>