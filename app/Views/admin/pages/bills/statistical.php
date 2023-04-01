<?php ipView("admin.component.header") ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="piechart_3d" style="margin: auto ;width: 900px; height: 500px;"></div>
            </div>



        </div>
    </div>
</div>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // handle get data from db and convert arr php to arr js
    const data = <?= json_encode($data) ?>;
    const domainPage = <?= json_encode($GLOBALS['domainPage']) ?>;

    data.forEach(element => {
        for (let i in element) {
            if (!isNaN(Number(i))) {
                delete element[i];
            }
        }
    });

    // convert data to data of chart
    const infoChart = [...data].map(item => [item.name, item.bought])


    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ...infoChart
        ]);

        var options = {
            title: 'Biểu đồ thống kế lượt mua',
            is3D: true,

        };

        console.log(options)

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
</script>
<?php ipView("admin.component.footer") ?>