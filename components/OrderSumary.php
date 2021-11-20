<div class="bg-white order">
    <div class="justify-content-between d-flex  font-weight-bold">
        <div class="d-flex">
            <p class="mx-2"><?php echo  $name ?></p>
            <h3 class="mx-2">#<?php echo $id?></h3>
            <a href="<?php echo "OrderDetail.php?id=".$id ?>">Xem chi tiết</a>

        </div>

        <div class="d-flex text-primary">
            <i class="fa fa-hand-o-left mx-2" aria-hidden="true"></i>
            <p><?php

                switch ($status){
                    case "0":
                        echo "Chờ xác nhận";
                        break;
                    case "1":
                        echo "Đang chuẩn bị hàng";
                        break;
                    case "2":
                        echo "Đang giao";
                        break;
                    case "3":
                        echo "Giao hàng thành công";
                        break;
                    case "4";
                        echo "Đã hủy";
                        break;
                }
                ?></p>
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
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <form action="">
            <button class="mx-x">Hoàn tất đóng gói</button>
        </form>
        <button class="mx-2">Liên Hệ Người Mua</button>
        <button class="bg-warning">Hủy Đơn</button>
    </div>
</div>
