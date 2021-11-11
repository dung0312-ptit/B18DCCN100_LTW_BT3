<div class="bg-white order">
    <div class="justify-content-between d-flex  font-weight-bold">
        <div class="d-flex">
            <p class="mx-2"><?php echo  $name ?></p>
            <h3 class="mx-2">#<?php echo $id?></h3>
            <a href="OrderDetail.html">Xem Chi Tiết</a>
        </div>

        <div class="d-flex text-primary">
            <i class="fa fa-hand-o-left mx-2" aria-hidden="true"></i>
            <p><?php echo $status ?></p>
        </div>
    </div>
    <?php
    include 'Conn.php';

    $sql = "SELECT * FROM ordersdetails WHERE ordersID='$id'";
    $result = mysqli_query($conn,$sql);
    $items = array();
    if(false===$result){
        echo "<script>alert('loi tum lum')</script>";
    }
    if(mysqli_num_rows($result) >0 ){
       while($row = mysqli_fetch_assoc($result)){
           $items[] = $row;
       }
    }else{
        echo"<script>alert('Sai tài khoản hoặc mật khẩu')</script>";
    }
    ?>
    <table class="table">
        <tbody>
        <?php
            foreach ($items as $item):
        ?>
            <?php
                include 'Conn.php';

                $proID = $item['id'];
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
                    echo"<script>alert('Sai tài khoản hoặc mật khẩu')</script>";
                }
                ?>
                <tr>
                    <th scope="row">
                        <img src=<?php echo $pro['image'] ?> width="50" alt="NotSauce">
                    </th>
                    <td><?php echo $pro['name'] ?></td>
                    <td><?php echo $item['amount'] ?></td>
                    <td><?php echo $item['totalPrice'] ?></td>
                </tr>
        <?php
            endforeach;
        ?>
<!--        <tr>-->
<!--            <th scope="row">-->
<!--                <img src="assets/order1/Yai_sThaiPrikKhingCurry_720x.png" width="50" alt="NotSauce">-->
<!--            </th>-->
<!--            <td colspan="2">Cà ri Prik Khing<br>x1</td>-->
<!--            <td>50.000</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th scope="row">-->
<!--                <img src="assets/order1/6_720x.png" width="50" alt="NotSauce">-->
<!--            </th>-->
<!--            <td colspan="2">Cà ri PaNang<br>x2</td>-->
<!--            <td>30.000</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th scope="row">-->
<!--                <img src="assets/order1/7_720x.png" width="50" alt="NotSauce">-->
<!--            </th>-->
<!--            <td colspan="2">Cà ri Massaman<br>x1</td>-->
<!--            <td>35.000</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th scope="row" colspan="3">Tổng Tiền</th>-->
<!--            <td>--><?php //echo $totalPrice ?><!--</td>-->
<!--        </tr>-->
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <button class="mx-x">Hoàn tất đóng gói
        </button>
        <button class="mx-2">Liên Hệ Người Mua</button>
        <button class="bg-warning">Hủy Đơn</button>
    </div>
</div>
