function createCharts(chartId, chart)
{   
    if(chart==''){
        chart={
            colors: ['#b98cfd','#69b2e1','#6bd8f5','#2e6d5a','#5fb16c','#48cf5a','#f240a8','#f6e4d2','#072fce'],
            chart: {
                backgroundColor:'#eee',
                type: 'column' // line, bar, column, area
            },
            title: {
                text: 'Custom Chart'
            },
            subtitle: {
                text: 'you can create custom charts'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total '
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Total: <b>{point.y:.0f} </b>'
            },
            series: []
        };
    }
    var SSCHARTS = Highcharts.chart(chartId, chart);
}


$(document).ready(function () {
    let chartOptions = {};
    $("#titles-maintitle").on("blur", function() {
        let titles={};

        let titlesMainTitle = $("#titles-maintitle").val();
        titles['text'] = titlesMainTitle;
        chartOptions['title'] = titles;
        
        
        console.log(chartOptions);
        createCharts('demo', chartOptions);
    });

    console.log(chartOptions);
    createCharts('demo', chartOptions);
});