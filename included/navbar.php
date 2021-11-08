
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="index.php">
        <img src="assets/logo.png" width="250" alt="NotSauce">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Mã Đơn hàng">
                <a href="SearchResult.php" class="btn btn-outline-success my-2 my-sm-0" role="button">Tìm Kiếm</a>
            </form>
            <a href="NewOrder.php" class="btn btn-outline-primary my-2 my-sm-0 mx-4" role="button">Tạo Đơn Mới</a>
        </ul>
        <div class="dropdown">
            <a class="dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                <?php echo $_SESSION['fullname'] ?>
                <i class="fa fa-user mx-2" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Thông tin</a>
                <a class="dropdown-item" href="#">Đổi Mật Khẩu</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Đăng xuất</a>
            </div>
        </div>
    </div>
</nav>
