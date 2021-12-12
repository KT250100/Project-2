@include('admin.layouts.header')
<title>Chi tiết biểu đồ</title>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            <?php
                echo $charData;
            ?>
        ]);
        var options = {
          title: 'Thống kê tình trạng đi học của sinh viên'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
<div class="container">
    <div id="piechart" style="width: 100%; height: 82vh;"></div>
</div>
@include('admin.layouts.footer')