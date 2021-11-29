<?php
include '../Conn.php';
if(isset($_POST['code'])&&$_POST['code']==1){
    $sql = "SELECT time,COUNT(id) 'tongso' FROM status WHERE status=0 GROUP BY YEAR(time), MONTH(time),DATE(time);";
    $rs = mysqli_query($conn,$sql);
    if(mysqli_num_rows($rs)>0) {
        while ($row = mysqli_fetch_assoc($rs)) {
           $output[] = $row;
        }
        echo json_encode($output);
    }
}
if(isset($_POST['code'])&&$_POST['code']==2){
    $sql = "SELECT s.time,SUM(o.totalPrice) as 'price' from orders as o, status as s WHERE o.id=s.ordersID AND o.status!=4 AND s.status=0 GROUP BY YEAR(time), MONTH(time),DATE(time)";
    $rs = mysqli_query($conn,$sql);
    if(mysqli_num_rows($rs)>0) {
        while ($row = mysqli_fetch_assoc($rs)) {
            $output[] = $row;
        }
        echo json_encode($output);
    }
}

if(isset($_POST['code'])&&$_POST['code']==11){
    $sql ="SELECT o.id,o.clientName,o.phoneNum,o.shippingAdd,o.totalPrice from orders as o, status as s WHERE o.id = s.ordersID AND s.status=0 AND s.time LIKE '%".$_POST['key']."%'";
    $rs = mysqli_query($conn,$sql);
    if(mysqli_num_rows($rs)>0) {
        while ($row = mysqli_fetch_assoc($rs)) {
//            echo "<a class='text-dark' href='OrderDetail.php?id=".$row['id']."'>".$row['id']." - ".$row['clientName']." - ".$row['totalPrice']." VND</a>";
            echo "<tr>
		          <td>".$row['id']."</td>
		          <td>".$row['clientName']."</td>
		          <td>".$row['phoneNum']."</td>
		          <td>".$row['shippingAdd']."</td>
		          <td>".$row['totalPrice']."</td>
		          <td><a href='OrderDetail.php?id=".$row['id']."'>Xem chi tiết</a></td>
		        </tr>";
        }
    }
}

if(isset($_POST['code'])&&$_POST['code']==12){
    $sql ="SELECT o.id,o.clientName,o.phoneNum,o.shippingAdd,o.totalPrice from orders as o, status as s WHERE o.id = s.ordersID AND o.status!=4 AND s.status=0 AND s.time LIKE '%".$_POST['key']."%'";
    $rs = mysqli_query($conn,$sql);
    if(mysqli_num_rows($rs)>0) {
        while ($row = mysqli_fetch_assoc($rs)) {
//            echo "<a class='text-dark' href='OrderDetail.php?id=".$row['id']."'>".$row['id']." - ".$row['clientName']." - ".$row['totalPrice']." VND</a>";
            echo "<tr>
		          <td>".$row['id']."</td>
		          <td>".$row['clientName']."</td>
		          <td>".$row['phoneNum']."</td>
		          <td>".$row['shippingAdd']."</td>
		          <td>".$row['totalPrice']."</td>
		          <td><a href='OrderDetail.php?id=".$row['id']."'>Xem chi tiết</a></td>
		        </tr>";
        }
    }
}

?>