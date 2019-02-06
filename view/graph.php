<script>
window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
        title: {
            text: "Ranking de Sites"
        },
        axisX: {
            valueFormatString: "MMMM DD"
        },
        axisY: {
            title: "Posição",
            prefix: "",
            suffix: "",
            reversed: true
        },
        toolTip: {
            shared: true
        },
        legend: {
    cursor: "pointer",
    verticalAlign: "top",
    horizontalAlign: "center",
    dockInsidePlotArea: true,
    itemclick: toogleDataSeries
},
        data: [
            <?php
            print $sitea.','.PHP_EOL.PHP_EOL;
            print $siteb;
            ?>
        ]
    });
    chart.render();

    function toogleDataSeries(e){
        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        } else{
            e.dataSeries.visible = true;
        }
        chart.render();
    }

}
</script>
<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<script src="js/canvasjs.min.js"></script>
