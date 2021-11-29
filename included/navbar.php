<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="index.php">
        <img src="assets/logo.png" width="250" alt="NotSauce">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <form class="d-flex" id="form" action="SearchResult.php" method="get">
                <li class="dropdown">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Mã Đơn hàng" id="search">
                    <div id="output" class="text-light position-absolute rounded table mt-3 " style="min-width: 350px;z-index:1000; background-color: #95999c;">
                    </div>
                </li>

                <button class="btn btn-outline-success my-2 my-sm-0 mx-2" type="submit" id="searchBtn">Tìm kiếm</button>
            </form>

            <a href="NewOrder.php" class="btn btn-outline-primary my-2 my-sm-0 mx-2" role="button">Tạo Đơn Mới</a>
            <a href="Statistic.php" class="btn btn-outline-warning my-2 my-sm-0" role="button">Xem Thống kê</a>
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
<script>
    $(document).ready(function () {
            $("#search").keyup(function () {
                $.ajax({
                    type:'POST',
                    url:'http://localhost/B18DCCN100_LTW_BT3/actions/LiveSearch.php',
                    data: {
                        name: $("#search").val(),
                    },
                    success: function (data) {
                        if(data.length>0){
                            $("#output").empty();
                            $("#output").append(data);
                        }else {
                            $("#output").empty();
                        }
                    }
                })
            })
    })
</script>