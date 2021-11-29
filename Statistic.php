<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<?php
$title = 'Thống kê';
require_once "included/header.php";
?>

<body class="bg-light">
<?php
require_once 'included/navbar.php';
?>
<link rel="stylesheet" href="css/statistic.css">
<section>
    <div class="container px-1 my-4 mx-auto row">
        <div class="col-2 rounded">
            <ul class="nav nav-pills bg-white flex-column my-4">
                <li class="nav-item my-1">
                    <a href="#tab1" data-toggle="tab" class="nav-link active">Số đơn theo ngày</a>
                </li>
                <li class="nav-item my-1">
                    <a href="#tab2" data-toggle="tab" class="nav-link">Số tiền theo ngày</a>
                </li>
            </ul>
        </div>

        <div class="tab-content col-10 my-4">
            <div class="tab-pane active" id="tab1">
                <div id="barchart_date_orders" class="rounded" style="width: 900px; height: 500px;"></div>
                <div class="my-3">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ giao hàng</th>
                            <th>Số tiền</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="order_list_1">

                        </tbody>
                    </table>
                </div>
            </div>
            <!--                tab2 - cho xac nhan-->
            <div class="tab-pane fade" id="tab2">
                <div id="barchart_date_price" class="rounded" style="width: 900px; height: 500px;"></div>
                <div class="my-3">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ giao hàng</th>
                            <th>Số tiền</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="order_list_2">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
</section>
<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(load_data);

    function load_data(){
        load_date_order();
        load_date_price();
    }
    function load_date_price() {
        $.ajax({
            url:'http://localhost/B18DCCN100_LTW_BT3/actions/getStatistic.php',
            method: "POST",
            data:{code:2},
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                drawChart2(data,"THỐNG KÊ DOANH THU HẰNG NGÀY");
            }
        })
    }
    function load_date_order() {
        $.ajax({
            url:'http://localhost/B18DCCN100_LTW_BT3/actions/getStatistic.php',
            method: "POST",
            data:{code:1},
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                drawChart1(data,"THỐNG KÊ SỐ ĐƠN HẰNG NGÀY");
            }
        })
    }
    //CHART SỐ ĐƠN
    function drawChart1(chart_data, chart_main_title) {
        var jsonData = chart_data;
        console.log(jsonData);
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Date');
        data.addColumn('number', 'order');
        $.each(jsonData, function(i, jsonData){
            var date = jsonData.time;
            date = date.substring(0,10);
            var orders = parseInt($.trim(jsonData.tongso));
            data.addRows([[date, orders]]);
        });
        var options = {
            chart: {
                title: chart_main_title,
            },
            bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_date_orders'));
        function selectHandler() {
            var selectedItem = chart.getSelection()[0];
            console.log(selectedItem);
            if (selectedItem) {
                console.log("addan");
                $.ajax({
                    url:'http://localhost/B18DCCN100_LTW_BT3/actions/getStatistic.php',
                    method: "POST",
                    data:{
                        code:11,
                        key: data.getValue(selectedItem.row, 0)
                    },
                    success: function (data) {
                        console.log(data);
                        $("#order_list_1").empty();
                        $("#order_list_1").append(data);
                    }
                })
            }
        }
        google.visualization.events.addListener(chart, 'select', selectHandler);
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }

    // chart doanh thu
    function drawChart2(chart_data, chart_main_title) {
        var jsonData = chart_data;
        console.log(jsonData);
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Date');
        data.addColumn('number', 'Income');
        $.each(jsonData, function(i, jsonData){
            var date = jsonData.time;
            date = date.substring(0,10);
            var price = parseInt($.trim(jsonData.price));
            data.addRows([[date, price]]);
        });
        var options = {
            chart: {
                title: chart_main_title,
            },
            bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_date_price'));
        function selectHandler() {
            var selectedItem = chart.getSelection()[0];
            console.log(selectedItem);
            if (selectedItem) {
                console.log("addan");
                $.ajax({
                    url:'http://localhost/B18DCCN100_LTW_BT3/actions/getStatistic.php',
                    method: "POST",
                    data:{
                        code:12,
                        key: data.getValue(selectedItem.row, 0)
                    },
                    success: function (data) {
                        console.log(data);
                        $("#order_list_2").empty();
                        $("#order_list_2").append(data);
                    }
                })
            }
        }
        google.visualization.events.addListener(chart, 'select', selectHandler);
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>

</body>
<?php

require_once "included/footer.php";
?>
