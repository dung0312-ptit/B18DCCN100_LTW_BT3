<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<?php
$title = 'Danh sach don hang';
require_once 'included/header.php';
?>
<body class="bg-light">
<?php
require_once 'included/navbar.php';
?>
    <section class="py-3">
        <div class="container px-1 py-5 mx-auto">
            <!-- tab -->
            <ul class="nav nav-pills bg-white justify-content-between">
                <li class="nav-item">
                    <a href="#tab1" data-toggle="tab" class="nav-link active">Tất Cả</a>
                </li>
                <li class="nav-item">
                    <a href="#tab2" data-toggle="tab" class="nav-link">Chờ Xác Nhận</a>
                </li>
                <li class="nav-item">
                    <a href="#tab3" data-toggle="tab" class="nav-link">Chuẩn Bị Hàng</a>
                </li>
                <li class="nav-item">
                    <a href="#tab4" data-toggle="tab" class="nav-link">Đang Giao </a>
                </li>
                <li class="nav-item">
                    <a href="#tab5" data-toggle="tab" class="nav-link">Thành Công</a>
                </li>
                <li class="nav-item">
                    <a href="#tab6" data-toggle="tab" class="nav-link">Đã Hủy</a>
                </li>
            </ul>

            <!-- Nội dung -->
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <?php
                        include 'Conn.php';

                    $sql = "SELECT * FROM orders";
                    $orders = mysqli_query($conn,$sql);
                    if(false===$orders){
                        echo "<script>alert('loi tum lum')</script>";
                    }
                    if(mysqli_num_rows($orders) >0 ){
                       while ($row = mysqli_fetch_array($orders)){
                           $id = $row['id'];
                           $name = $row['clientName'];
                           $status = $row['status'];
                           $totalPrice = $row['totalPrice'];

                           require 'components/OrderSumary.php';
                       }
                    }
                    ?>
                </div>
                <!--                tab2 - cho xac nhan-->
                    <div class="tab-pane container fade" id="tab2">
                        <?php
                        include 'Conn.php';

                        $sql = "SELECT * FROM orders WHERE status='0' ";
                        $orders = mysqli_query($conn,$sql);
                        if(false===$orders){
                            echo "<script>alert('loi tum lum')</script>";
                        }
                        if(mysqli_num_rows($orders) >0 ){
                            while ($row = mysqli_fetch_array($orders)){
                                $id = $row['id'];
                                $name = $row['clientName'];
                                $status = $row['status'];
                                $totalPrice = $row['totalPrice'];

                                require 'components/OrderSumary.php';
                            }
                        }
                        ?>
                    </div>

                <!--                tab 3 -  chuan bi hang-->
                <div class="tab-pane container fade" id="tab3">
                    <?php
                    include 'Conn.php';

                    $sql = "SELECT * FROM orders WHERE status='1' ";
                    $orders = mysqli_query($conn,$sql);
                    if(false===$orders){
                        echo "<script>alert('loi tum lum')</script>";
                    }
                    if(mysqli_num_rows($orders) >0 ){
                        while ($row = mysqli_fetch_array($orders)){
                            $id = $row['id'];
                            $name = $row['clientName'];
                            $status = $row['status'];
                            $totalPrice = $row['totalPrice'];

                            require 'components/OrderSumary.php';
                        }
                    }
                    ?>
                </div>

                <!--                tab4 - giao hang-->
                <div class="tab-pane container fade" id="tab4">
                    <?php
                    include 'Conn.php';

                    $sql = "SELECT * FROM orders WHERE status='2' ";
                    $orders = mysqli_query($conn,$sql);    if(mysqli_num_rows($orders) >0 ){
    while ($row = mysqli_fetch_array($orders)){
        $id = $row['id'];
        $name = $row['clientName'];
        $status = $row['status'];
        $totalPrice = $row['totalPrice'];

        require 'components/OrderSumary.php';
    }
                    if(false===$orders){
                        echo "<script>alert('ko tim thay order')</script>";
                    }

                    }
                    ?>
                </div>

                <!--                tab 5 - giao thanh cong-->
                <div class="tab-pane container fade" id="tab5">
                    <!--                    order 5-->
                    <?php
                    include 'Conn.php';

                    $sql = "SELECT * FROM orders WHERE status='3' ";
                    $orders = mysqli_query($conn,$sql);
                    if(false===$orders){
                        echo "<script>alert('loi tum lum')</script>";
                    }
                    if(mysqli_num_rows($orders) >0 ){
                        while ($row = mysqli_fetch_array($orders)){
                            $id = $row['id'];
                            $name = $row['clientName'];
                            $status = $row['status'];
                            $totalPrice = $row['totalPrice'];

                            require 'components/OrderSumary.php';
                        }
                    }
                    ?>

                </div>

                <!--                tab 6 - da huy-->
                <div class="tab-pane container fade" id="tab6">
                    <!--                    order 8-->
                    <?php
                    include 'Conn.php';

                    $sql = "SELECT * FROM orders WHERE status='4' ";
                    $orders = mysqli_query($conn,$sql);
                    if(false===$orders){
                        echo "<script>alert('loi tum lum')</script>";
                    }
                    if(mysqli_num_rows($orders) >0 ){
                        while ($row = mysqli_fetch_array($orders)){
                            $id = $row['id'];
                            $name = $row['clientName'];
                            $status = $row['status'];
                            $totalPrice = $row['totalPrice'];

                            require 'components/OrderSumary.php';
                        }
                    }
                    ?>
                </div>
            </div>

        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </button>
        </div>
    </section>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>
<?php require_once 'included/footer.php'; ?>