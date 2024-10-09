var customChartOptions = {
    colors:  ['#a50b9f','#427ed8'],
    chart: {
        //type: 'column' //spline, line, bar, column, area
        type: 'column', 
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Zone-1 (UP)','Zone-2 (UP)','Zone-3 (UP)','Zone-4 (UP)','Zone-5 (UP)','Zone-6 (UP)','Zone-7 (Bihar)','Zone-8 (Bihar)','Zone-9 (Bihar)'],
        crosshair: true,
        title: {
            text: ' Zone name '
        },
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
            text: ' Gender of respondent '
        }
    },
    
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },

    plotOptions: { column: { pointPadding: 0.2, borderWidth: 0 } },
    series: [{ name: 'Female',  data: [ 15,17,32,21,30,43,15,27,30,] },{ name: 'Male',  data: [ 12,17,7,17,12,17,14,10,13,] },]		}