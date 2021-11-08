<?php
    include 'Conn.php';

session_start();

    if(isset($_SESSION['username'])){
        header("Location:index.php");
    }

    if(isset($_POST['submit'])){
        echo"<script>alert('submit')</script>";
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $user = mysqli_query($conn,$sql);
        if(false===$user){
            echo "<script>alert('loi tum lum')</script>";
        }
        if(mysqli_num_rows($user) >0 ){
            $row = mysqli_fetch_assoc($user);
            $_SESSION['username'] = $row['username'];
            $_SESSION['fullname'] = $row['fullname'];
            header("Location:index.php");
        }else{
            echo"<script>alert('Sai tài khoản hoặc mật khẩu')</script>";
        }
    }
?>

<?php
$title = 'Login';
require_once "included/header.php";
?>


<body>
<div class="d-flex min-vh-100 min-vw-100 justify-content-center align-items-center" style="background: url(https://cdn.shopify.com/s/files/1/1576/5007/files/Yai_s_Thai_-_New_Coconut_Lime_Marinade_-_Prik_Khing_Curry_2048x.png?v=1631668365)">
        <div class="p-3 rounded w-25" style="background: rgba(254,248,134,0.6)">
            <form action="" method="post">
                <div class=" text-center">
                    <h3 class="font-weight-bolder">Đăng nhập</h3> <span class="text-white font-italic font-weight-light">Đây là trang dành cho <span class="initialism">quản lý</span><br>Bạn cần đăng nhập để sử dụng</span>
                    <div class="mt-3 inputbox d-flex align-items-center"> <i class="fa fa-user fa-2x"></i><input type="text" class="form-control mx-3" name="username" placeholder="Tên đăng nhập">  </div>
                    <div class="mt-3 inputbox d-flex align-items-center"><i class="fa fa-lock fa-2x"></i> <input type="password" class="form-control mx-3" name="password" placeholder="Mật khẩu">  </div>
                </div>
                <div class="mt-3 mx-5 justify-content-center d-flex"> <button class="btn btn-outline-dark" name="submit">Đăng nhập</button> </div>
            </form>
        </div>
</div>

</body>

<?php
require_once "included/footer.php";
?>
