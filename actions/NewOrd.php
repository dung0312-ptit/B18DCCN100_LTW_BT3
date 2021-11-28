<?php
// lay danh sach san pham
include '../Conn.php';
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
// xu ly don moi
if(isset($_POST['save'])){
//     lay du lieu
    $date = new \DateTime();
    $orderid = $date -> getTimestamp();
    $stadate = $date -> format("Y-m-d H:i:s");
    $pro = $_POST['chonsp'];
    $amo = $_POST['amount'];
    $paymethod = $_POST['payment_method'];
    $clientname = $_POST['customer'];
    $add = $_POST['address'];
    $phonenum = $_POST['tel'];
    $total = 0;
    $price[] = array();

//    tinh toan
    foreach ($pro as $item => $value){
        $p = $products[$value-1];
        $price[$item] = $amo[$item] * $p['price'];
    }
    foreach ($price as $item => $value){
        $total = $total + $value;
    }


//    luu don moi
    $done = true;
    $sql = "INSERT INTO `orders` (`id`, `clientName`, `phoneNum`, `shippingAdd`, `paymentMethod`, `shippingFee`, `clientCharge`, `totalPrice`, `intendTime`, `status`) VALUES ('$orderid', '$clientname', '$phonenum', '$add', '$paymethod', '50000', '1', '$total', '2021-11-23 10:44:13.000000', '0')";
    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        $done = false;
    }

    $sql ="INSERT INTO `status` (`id`, `ordersID`, `time`, `status`) VALUES (NULL, '$orderid', '$stadate', '0')";
    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        $done = false;
    }

    foreach ($pro as $item => $value){
        $p = $products[$value-1];
        $sql = "INSERT INTO `ordersdetails` (`id`, `ordersID`, `productID`, `amount`, `totalPrice`) VALUES (NULL, '$orderid', '$p[id]', '$amo[$item]', '$price[$item]')";
        if (mysqli_query($conn, $sql)) {
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            $done= false;
        }
    }

    if($done){
        header("Location: ../index.php");
    }
}
?>
