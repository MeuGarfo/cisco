<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
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
            data: [{
                type:"line",
                name: "Google",
                dataPoints: [
                    { x: new Date(2018,11,30), y: 6 },
                    { x: new Date(2018,11,31), y: 6 }
                ]
            },
            {
                type: "line",
                name: "Microsoft",
                dataPoints: [
                    { x: new Date(2018,11,30), y: 7 },
                    { x: new Date(2018,11,31), y: 8 }
                ]
            }]
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
</head>
<body>
    <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
    <script src="js/canvasjs.min.js"></script>
</body>
</html>
