var customChartOptions = {
    colors: ['#fa8d9b','#7a4153','#5e3840','#a8fd79','#2dab03','#df9410','#40d62f','#b93a64','#e127d4'],
    chart: {
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y} ({point.percentage:.0f}%)</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Total',
        data: [{ name: 'Zone-1 (UP)', y: 27 },{ name: 'Zone-2 (UP)', y: 34 },{ name: 'Zone-3 (UP)', y: 39 },{ name: 'Zone-4 (UP)', y: 38 },{ name: 'Zone-5 (UP)', y: 42 },{ name: 'Zone-6 (UP)', y: 60 },{ name: 'Zone-7 (Bihar)', y: 29 },{ name: 'Zone-8 (Bihar)', y: 37 },{ name: 'Zone-9 (Bihar)', y: 43 }, ]
    }]
}