<?php include('includes/header.php'); ?>
<?php include_once 'includes/Helper.php'; ?>
<?php function base_url()
{
  return "http://localhost/v10-customcharts/";
} ?>
<!-- <script src="<?= base_url() ?>assets/highcharts/highmaps.js"></script> -->
<script src="<?= base_url() ?>assets/highcharts/highcharts.js"></script>
<script src="<?= base_url() ?>assets/highcharts/highcharts-more.js"></script>
<script src="<?= base_url() ?>assets/highcharts/exporting.js"></script>
<script src="<?= base_url() ?>assets/highcharts/offline-exporting.js"></script>
<script src="<?= base_url() ?>assets/highcharts/accessibility.js"></script>

<style>
  .tab-content{
      max-height: 450px;
      overflow: auto;
  }
  #demo{
      border: 1px solid lightblue;
      border-radius: 5px;
  }
  .card-header{
      background-color: #212529;
      color: white;
      font-weight: bold;
  }
</style>

<div class="container-fluid mt-3">
  <h3>Create Charts</h3>
    <?php 
        $sum = new Helper();
        echo $sum->abc(2,2);
    ?>
  <div class="row">
    
    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">
              Chart -1  Single Variable
            </div>
            <div class="card-body">
              <div id="demo1"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -2 Single Variable </div>
            <div class="card-body">
                <div id="demo2"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -3 Single Variable</div>
            <div class="card-body">
                <div id="demo3"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -4 Single Variable </div>
            <div class="card-body">
                <div id="demo4"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -5 Single Variable </div>
            <div class="card-body">
                <div id="demo5"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -6 Two Variables <br> (column, line, spline, bar, area) </div>
            <div class="card-body">
                <div id="demo6"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -7 Two Variables </div>
            <div class="card-body">
                <div id="demo7"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -8 Two Variables </div>
            <div class="card-body">
                <div id="demo8"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -9 Two Variables </div>
            <div class="card-body">
                <div id="demo9"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -10 Two Variables </div>
            <div class="card-body">
                <div id="demo10"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -11 Two Variables <br> (line, spline, column, bar, area) </div>
            <div class="card-body">
                <div id="demo11"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -12 Two Variables </div>
            <div class="card-body">
                <div id="demo12"></div>
            </div>
        </div>
    </div>

  </div>

</div>

<?php include('includes/footer.php'); ?>

<script>
  Highcharts.chart('demo1', {
      colors: ['#fa8d9b','#7a4153','#5e3840','#a8fd79','#2dab03','#df9410','#40d62f','#b93a64','#e127d4'],
      chart: {
          type: 'pie',
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
  });
</script>

<script>
  Highcharts.chart('demo2', {
    colors: ['#2765e0','#4e91b8','#184629','#71f54d','#1b973c','#ed903c','#7db80c','#4a56b7','#193db5'],
    chart: {
      type: 'column', // line, bar, column, area
      // width: '200',
      zoomType: 'xy'
    },
    title: { text: '' },
    subtitle: { text: '' },
    xAxis: {
      type: 'category',
      scrollbar: {
          enabled: true
      },
    },
    yAxis: {},
    legend: {
      enabled: false
    },
    tooltip: {
      pointFormat: 'Total: <b>{point.y:.0f} </b>'
    },
    series: [{
      name: 'Total',
      data: [ ['Zone-1 (UP)', 27],['Zone-2 (UP)', 34],['Zone-3 (UP)', 39],['Zone-4 (UP)', 38],['Zone-5 (UP)', 42],['Zone-6 (UP)', 60],['Zone-7 (Bihar)', 29],['Zone-8 (Bihar)', 37],['Zone-9 (Bihar)', 43], ],
    }]
  });
</script>

<script>
  Highcharts.chart('demo3', {
    colors: ['#2765e0','#4e91b8','#184629','#71f54d','#1b973c','#ed903c','#7db80c','#4a56b7','#193db5'],
    chart: {
      type: 'line' // line, bar, column, area
    },
    title: { text: '' },
    subtitle: { text: '' },
    xAxis: {
      type: 'category',
    },
    yAxis: {},
    legend: {
      enabled: false
    },
    tooltip: {
      pointFormat: 'Total: <b>{point.y:.0f} </b>'
    },
    series: [{
      name: 'Total',
      data: [ ['Zone-1 (UP)', 27],['Zone-2 (UP)', 34],['Zone-3 (UP)', 39],['Zone-4 (UP)', 38],['Zone-5 (UP)', 42],['Zone-6 (UP)', 60],['Zone-7 (Bihar)', 29],['Zone-8 (Bihar)', 37],['Zone-9 (Bihar)', 43], ],
    }]
  });
</script>

<script>
  Highcharts.chart('demo4', {
    colors: ['#2765e0','#4e91b8','#184629','#71f54d','#1b973c','#ed903c','#7db80c','#4a56b7','#193db5'],
    chart: {
      type: 'bar' // line, bar, column, area
    },
    title: { text: '' },
    subtitle: { text: '' },
    xAxis: {
      type: 'category',
    },
    yAxis: {},
    legend: {
      enabled: false
    },
    tooltip: {
      pointFormat: 'Total: <b>{point.y:.0f} </b>'
    },
    plotOptions: {
      series: {
        dataLabels: {
          enabled: true,
          inside: true,
        },
      },
    },
    series: [{
      name: 'Total',
      data: [ ['Zone-1 (UP)', 27],['Zone-2 (UP)', 34],['Zone-3 (UP)', 39],['Zone-4 (UP)', 38],['Zone-5 (UP)', 42],['Zone-6 (UP)', 60],['Zone-7 (Bihar)', 29],['Zone-8 (Bihar)', 37],['Zone-9 (Bihar)', 43], ],
    }]
  });
</script>

<script>
  Highcharts.chart('demo5', {
    colors: ['#2765e0','#4e91b8','#184629','#71f54d','#1b973c','#ed903c','#7db80c','#4a56b7','#193db5'],
    chart: {
      type: 'area' // line, bar, column, area
    },
    title: { text: '' },
    subtitle: { text: '' },
    xAxis: {
      type: 'category',
    },
    yAxis: {},
    legend: {
      enabled: false
    },
    tooltip: {
      pointFormat: 'Total: <b>{point.y:.0f} </b>'
    },
    series: [{
      name: 'Total',
      data: [ ['Zone-1 (UP)', 27],['Zone-2 (UP)', 34],['Zone-3 (UP)', 39],['Zone-4 (UP)', 38],['Zone-5 (UP)', 42],['Zone-6 (UP)', 60],['Zone-7 (Bihar)', 29],['Zone-8 (Bihar)', 37],['Zone-9 (Bihar)', 43], ],
    }]
  });
</script>

<script type="text/javascript">
  Highcharts.chart('demo6', {
    colors:  ['#32b9f7','#304c25'],
    chart: {
      //type: 'column' //spline, line, bar, column, area
      type: 'column', 
    },
    title: { text: '' },
    subtitle: { text: '' },
    xAxis: {
      categories: ['Zone-1 (UP)','Zone-2 (UP)','Zone-3 (UP)','Zone-4 (UP)','Zone-5 (UP)','Zone-6 (UP)','Zone-7 (Bihar)','Zone-8 (Bihar)','Zone-9 (Bihar)'],
    },
    yAxis: {
        title: {
					text: ''
				}
      },
    legend: {
      enabled: true
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {},
    series: [{ name: 'Female',  data: [ 15,17,32,21,30,43,15,27,30,] },{ name: 'Male',  data: [ 12,17,7,17,12,17,14,10,13,] },]		
  });
</script>

<script type="text/javascript">
		Highcharts.chart('demo7', {
			colors:  ['#1eb85c','#6b2de1'],
			chart: {
				//type: 'column' //spline, line, bar, column, area
				type: 'column',
			},
			title: { text: '' },
			subtitle: { text: '' },
			xAxis: {
				categories: ['Zone-1 (UP)','Zone-2 (UP)','Zone-3 (UP)','Zone-4 (UP)','Zone-5 (UP)','Zone-6 (UP)','Zone-7 (Bihar)','Zone-8 (Bihar)','Zone-9 (Bihar)'],
			},
			yAxis: {
        title: {
					text: ''
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

			plotOptions: {
				column: {
				  stacking: 'normal',  //"normal", "overlap", "percent", "stream" /// IF UN-COMMENT THIS LINE THEN ITS DISPLAY IN STACK, ** IF STACKING IS percent THEN DISPLAY 100% IN STACK 
				  dataLabels: {
					enabled: true
				  }
				}
			},
			series: [{ name: 'Female',  data: [ 15,17,32,21,30,43,15,27,30,] },{ name: 'Male',  data: [ 12,17,7,17,12,17,14,10,13,] },]		
  });
</script>

<script>
  Highcharts.chart('demo8', {
    colors: ['#5b06a9','#f716e4'],
    chart: {
      type: 'packedbubble',
    },
    title: {
      text: '',
      align: 'left'
    },
    tooltip: {
      useHTML: true,
      pointFormat: '<b>{point.name}:</b> {point.value}'
    },
    plotOptions: {
      packedbubble: {
        minSize: '20%',
        maxSize: '100%',
        zMin: 0,
        zMax: 1000,
        layoutAlgorithm: {
          gravitationalConstant: 0.05,
          splitSeries: true,
          seriesInteraction: false,
          dragBetweenSeries: true,
          parentNodeLimit: true
        },
        dataLabels: {
          enabled: true,
          format: '{point.name}',
          filter: {
            property: 'y',
            operator: '>',
            value: 250
          },
          style: {
            color: 'black',
            textOutline: 'none',
            fontWeight: 'normal'
          }
        }
      }
    },
    series: [
      {
        name: 'Female', 
        data: [
        {
          name: 'Zone-1 (UP)',
          value: 15
        },{
          name: 'Zone-2 (UP)',
          value: 17
        },{
          name: 'Zone-3 (UP)',
          value: 32
        },{
          name: 'Zone-4 (UP)',
          value: 21
        },{
          name: 'Zone-5 (UP)',
          value: 30
        },{
          name: 'Zone-6 (UP)',
          value: 43
        },{
          name: 'Zone-7 (Bihar)',
          value: 15
        },{
          name: 'Zone-8 (Bihar)',
          value: 27
        },{
          name: 'Zone-9 (Bihar)',
          value: 30
        },] 
      },
      {
        name: 'Male', 
        data: [
        {
          name: 'Zone-1 (UP)',
          value: 12
        },{
          name: 'Zone-2 (UP)',
          value: 17
        },{
          name: 'Zone-3 (UP)',
          value: 7
        },{
          name: 'Zone-4 (UP)',
          value: 17
        },{
          name: 'Zone-5 (UP)',
          value: 12
        },{
          name: 'Zone-6 (UP)',
          value: 17
        },{
          name: 'Zone-7 (Bihar)',
          value: 14
        },{
          name: 'Zone-8 (Bihar)',
          value: 10
        },{
          name: 'Zone-9 (Bihar)',
          value: 13
        },] 
      },
    ]
  });
</script>


<script>
  Highcharts.chart('demo9', {
    colors: ['#49a8f7','#5b49a2'],
    chart: {
      type: 'column', //bar,column
      inverted: true,
      polar: true
    },
    title: {
      text: '',
      align: 'left'
    },
    subtitle: {
      text: '',
      align: 'left'
    },
    tooltip: {
      outside: true
    },
    pane: {
      size: '85%',
      innerSize: '20%',
      endAngle: 270
    },
    xAxis: {
      tickInterval: 1,
      labels: {
        align: 'right',
        useHTML: true,
        allowOverlap: true,
        step: 1,
        y: 3,
        style: {
          fontSize: '13px'
        }
      },
      lineWidth: 0,
      categories: ['Zone-1 (UP)','Zone-2 (UP)','Zone-3 (UP)','Zone-4 (UP)','Zone-5 (UP)','Zone-6 (UP)','Zone-7 (Bihar)','Zone-8 (Bihar)','Zone-9 (Bihar)']
    },
    yAxis: {
      crosshair: {
        enabled: true,
        color: '#333'
      },
      lineWidth: 0,
      tickInterval: 25,
      reversedStacks: false,
      endOnTick: true,
      showLastLabel: true
    },
    plotOptions: {
      column: {
        stacking: 'normal',
        borderWidth: 0,
        pointPadding: 0,
        groupPadding: 0.15
      }
    },
    series: [{
    name: 'Female', 
    data: [
    15,17,32,21,30,43,15,27,30,] },{
    name: 'Male', 
    data: [
    12,17,7,17,12,17,14,10,13,] },]
  });
</script>

<script>
  Highcharts.chart('demo10', {
    colors: ['#7a42b3','#ca1028'],
    chart: {
      type: 'bar', //bar,column
      inverted: true,
      polar: true
    },
    title: {
      text: '',
      align: 'left'
    },
    subtitle: {
      text: '',
      align: 'left'
    },
    tooltip: {
      outside: true
    },
    pane: {
      size: '85%',
      innerSize: '20%',
      endAngle: 270
    },
    xAxis: {
      tickInterval: 1,
      labels: {
        align: 'right',
        useHTML: true,
        allowOverlap: true,
        step: 1,
        y: 3,
        style: {
          fontSize: '13px'
        }
      },
      lineWidth: 0,
      categories: ['Zone-1 (UP)','Zone-2 (UP)','Zone-3 (UP)','Zone-4 (UP)','Zone-5 (UP)','Zone-6 (UP)','Zone-7 (Bihar)','Zone-8 (Bihar)','Zone-9 (Bihar)']
    },
    yAxis: {
      crosshair: {
        enabled: true,
        color: '#333'
      },
      lineWidth: 0,
      tickInterval: 25,
      reversedStacks: false,
      endOnTick: true,
      showLastLabel: true
    },
    plotOptions: {
      column: {
        stacking: 'normal',
        borderWidth: 0,
        pointPadding: 0,
        groupPadding: 0.15
      }
    },
    series: [{
    name: 'Female', 
    data: [
    15,17,32,21,30,43,15,27,30,] },{
    name: 'Male', 
    data: [
    12,17,7,17,12,17,14,10,13,] },]
  });
</script>

<script>
  Highcharts.chart('demo11', {
    colors: ['#036472','#618b5d'],
    chart: {
      polar: true,
      type: 'line' ///line, spline, column, bar, area
    },
    accessibility: {
      description: ' '
    },
    title: {
      text: '',
      x: -80
    },
    pane: {
      size: '80%'
    },
    xAxis: {
      categories: ['Zone-1 (UP)','Zone-2 (UP)','Zone-3 (UP)','Zone-4 (UP)','Zone-5 (UP)','Zone-6 (UP)','Zone-7 (Bihar)','Zone-8 (Bihar)','Zone-9 (Bihar)'],
      tickmarkPlacement: 'on',
      lineWidth: 0
    },
    yAxis: {
      gridLineInterpolation: 'polygon',
      lineWidth: 0,
      min: 0
    },
    tooltip: {
      shared: true,
      pointFormat: '<span style="color:{series.color}">{series.name}: <b> {point.y:,.0f}</b><br/>'
    },
    legend: {
      align: 'right',
      verticalAlign: 'middle',
      layout: 'vertical'
    },
    series: [{
    name: 'Female', 
    data: [
    15,17,32,21,30,43,15,27,30,] },{
    name: 'Male', 
    data: [
    12,17,7,17,12,17,14,10,13,] },],
    responsive: {
    rules: [{
        condition: {
          maxWidth: 500
        },
        chartOptions: {
          legend: {
            align: 'center',
            verticalAlign: 'bottom',
            layout: 'horizontal'
          },
          pane: {
            size: '70%'
          }
        }
      }]
    }
  });
</script>




<script>
// $(".customModal").on("click", function(){
//     createCharts(customChartOptions);
// });

$(document).ready(function(){
    let scolorheadNo=3;
    $(".addMoreSeriesColor").on("click", function(){
        scolorheadNo++;
        let newRow = `<tr>
                    <td>
                        <input type="color" class="form-control seriesColors"  />
                    </td>
                    <td>
                        <i class="fa fa-trash-o rmseriesColor"></i>
                    </td>
                </tr>`;
        $("#addSeriesColor").append(newRow);
        $(".scolorhead").attr('rowspan',scolorheadNo);
    });

    $(document).on("click",'.rmseriesColor', function(){
        $(this).parent().parent().remove();
    });
});


function createCharts(options)
{   
  var SSCHARTS = Highcharts.chart('customdemo', options);
}
</script>