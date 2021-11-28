
<div class="bg-white condition">
    <div class="row d-flex justify-content-between px-3 top">
        <div class="d-flex font-weight-bolder">
            <h5>Đơn Hàng <span class="text-primary font-weight-bold"><?php echo $order['id']?></span></h5>
        </div>
        <div class="d-flex flex-column text-sm-right font-weight-bolder font-italic">
            <p class="mb-0">Giao hàng dự kiến <span><?php echo $order['intendTime'] ?></span></p>
        </div>
    </div>
    <!-- Add class 'active' to progress -->
    <div class="mt-5 mx-5">
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?php
                    switch ($order['status']){
                        case '0':
                            echo '25%';
                            break;
                        case '1':
                            echo '50%';
                            break;
                        case '2':
                            echo '75%';
                            break;
                        case '3':
                            echo '100%';
                            break;
                    }
            ?>"></div>
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
        <h6 class="mt-3 font-weight-light"><?php echo $order['clientName']?></h6>
        <h6 class="mt-3 font-weight-bolder text-warning"><?php echo $order['phoneNum']?></h6>
        <h6 class="mt-3 font-weight-light font-italic"><?php echo $order['shippingAdd']?></h6>
    </div>
    <div class="col-7 bg-white condition">
        <h5 class="mt-3 font-weight-bold">Hành Trình Đơn Hàng</h5>

        <table class="table">
            <tbody>
            <?php
                foreach ($orderSta as $sta):
            ?>
                    <tr>
                        <th scope="row" class="text-primary">
                            <?php echo $sta['time']?>
                        </th>
                        <td colspan="2"><?php
                            switch ($sta['status']){
                                case "0":
                                    echo "Chờ xác nhận";
                                    break;
                                case "1":
                                    echo "Kho xác nhận, bắt đầu đóng gói";
                                    break;
                                case "2":
                                    echo "Hoàn tất đóng gói, chuyển cho đơn vị vận chuyển";
                                    break;
                                case "3":
                                    echo "Giao hàng thành công";
                                    break;
                                case "4";
                                    echo "Đã hủy";
                                    break;
                            }
                            ?></td>
                    </tr>
            <?php
                endforeach;
            ?>

            </tbody>
        </table>

    </div>
</div>