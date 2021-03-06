

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
        echo"<script>alert('khong có sản phẩm')</script>";
    }
    ?>
    <table class="table">
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
                    <td><?php echo $pro['name'] ?></td>
                    <td><?php echo $item['amount'] ?></td>
                    <td><?php echo number_format($item['totalPrice'])?></td>
                </tr>
        <?php
            endforeach;
        ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <form action="<?php echo "actions/UpdateStatus.php?id=".$id."&status=".$status ?>" method="post" id="update-form">
            <button class="mx-x" type="submit" name="update" id="update"
                <?php
                switch ($status){
                    case "0":
                        echo '>Xác nhận đơn hàng' ;
                        break;
                    case "1":
                        echo '>Hoàn tất đóng gói' ;
                        break;
                    case "2":
                        echo '>Giao hàng thành công' ;
                        break;
                    case "4":
                    case "3":
                        echo 'hidden>';
                        break;
                    default:
                }
                ?>
            </button>
        </form>
        <button class="mx-2">Liên Hệ Người Mua</button>

        <form action="<?php echo "actions/Cancel.php?id=".$id ?>" method="post">
            <button class="mx-x bg-warning" type="submit" name="cancel" id="cancel"
            <?php
            switch ($status){
                case "1":
                case "2":
                case "0":
                    echo '>Hủy đơn' ;
                    break;
                case "4":
                case "3":
                    echo 'hidden>';
                    break;
                default:
            }
            ?>
            </button>
        </form>
    </div>
</div>
