<?php
    include '../Conn.php';
    if(isset($_POST['name'])&&$_POST['name']!=''){
        $sql = "SELECT id,clientName,totalPrice FROM orders where id like '%".$_POST['name']."%' limit 7";
        $rs = mysqli_query($conn,$sql);
        if(mysqli_num_rows($rs)>0) {
            while ($row = mysqli_fetch_assoc($rs)) {
                echo "<p class='d-table-row table mx-5 px-0'><a class='text-light' href='OrderDetail.php?id=".$row['id']."'>".$row['id']." - ".$row['clientName']." - ".$row['totalPrice']." VND</a></p>";
            }
        }
    }

?>