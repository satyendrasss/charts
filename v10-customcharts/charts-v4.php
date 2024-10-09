<?php include('includes/header.php'); ?>
<?php include_once 'includes/Helper.php'; ?>
<?php function base_url()
{
  return "http://localhost/v10-customcharts/";
} ?>
<!-- <script src="<?= base_url() ?>assets/highcharts/highmaps.js"></script> -->
<script src="<?= base_url() ?>assets/highcharts/highcharts.js"></script>
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
    .nav-tabs .nav-link.active {
        background-color: #212529;
        color: white;
        font-weight: bold;
    }
    .vcenter{
        text-align: center;
        vertical-align: middle;
    }
    .rmseriesColor{
        cursor: pointer;
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
                Chart -1 
                <a href="javascript:" class="customModal" data-id="demo1charts" data-bs-toggle="modal" data-bs-target="#chartCustomiseModal" >Customise</a> 
            </div>
            <div class="card-body">
                <div id="demo1"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -2</div>
            <div class="card-body">
                <div id="demo2"></div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card mt-3">
            <div class="card-header">Chart -3</div>
            <div class="card-body">
                <div id="demo3"></div>
            </div>
        </div>
    </div>

  </div>

</div>

<?php include('custom_modal.php'); ?>

<?php include('includes/footer.php'); ?>


<script type="text/javascript">

$(document).ready(function() {
    $("#chartCustomiseModal").modal({
        show: false,
        backdrop: 'static'
    });
});


    let demo1charts = {
        colors: ['#7c502f','#43f67e','#7fc4ba','#820416','#4fea10','#c021fd','#f1ae68','#8f9b6c','#2360f9'],
        chart: {
            type: 'column' // line, bar, column, area
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
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
        series: [{
            name: 'Total',
            data: [ ['Zone-1 (UP)', 27],['Zone-2 (UP)', 34],['Zone-3 (UP)', 39],['Zone-4 (UP)', 38],['Zone-5 (UP)', 42],['Zone-6 (UP)', 60],['Zone-7 (Bihar)', 29],['Zone-8 (Bihar)', 37],['Zone-9 (Bihar)', 43], ],
            dataLabels: {
                enabled: true,
                //rotation: -90,
                color: '#FFFFFF',
                align: 'center',
                format: '{point.y:.0f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    };

    Highcharts.chart('demo1', demo1charts);
</script>


<script type="text/javascript">
    Highcharts.chart('demo2', {
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
        series: [{ name: 'Female',  data: [ 15,17,32,21,30,43,15,27,30,] },{ name: 'Male',  data: [ 12,17,7,17,12,17,14,10,13,] },]		});
</script>

<script>
    Highcharts.chart('demo3', {
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
    });
</script>

<script src="cchart1.js"></script>

<script>
$(".customModal").on("click", function(){
    customChartOptions['xAxis']={};
    customChartOptions['xAxis']['title']={};
    createCharts(customChartOptions);
});

$(document).ready(function () {
    //let chartOptions = {};
    $("#titles-maintitle").on("blur", function() {
        let titles={};
        let titlesMainTitle = $("#titles-maintitle").val();
        titles['text'] = titlesMainTitle;
        customChartOptions['title'] = titles;
        createCharts(customChartOptions);
    });
    $("#titles-subtitle").on("blur", function() {
        let subTitles={};
        subTitles['text'] = $(this).val();
        customChartOptions['subtitle'] = subTitles;
        createCharts(customChartOptions);
    });

    // GENERALS 
    $("#general-chartwidth").on("blur", function() {
        customChartOptions.chart['width'] = $(this).val();
        createCharts(customChartOptions);
    });
    $("#general-chartheight").on("blur", function() {
        customChartOptions.chart['height'] = $(this).val();
        createCharts(customChartOptions);
    });

    // APPEARANCE
    let chartStyles = {};
    $("#appearanceFontFamily").on("change", function(){
        chartStyles['fontFamily'] = $(this).val();
        customChartOptions.chart['style'] = chartStyles;
        createCharts(customChartOptions);
    });
    $("#appearanceFontSize").on("change", function(){
        chartStyles['fontSize'] = $(this).val();
        customChartOptions.chart['style'] = chartStyles;
        createCharts(customChartOptions);
    });
    
    $("#appearanceFontBold").on("click", function(){
        let apfw = 'normal';
        if ($(this).is(':checked')) {
            apfw = $(this).val();
        }
        chartStyles['fontWeight'] = apfw;
        customChartOptions.chart['style'] = chartStyles;
        createCharts(customChartOptions);
    });
    $("#appearanceFontItalic").on("click", function(){
        let apfs = '';
        if ($(this).is(':checked')) {
            apfs = $(this).val();
        }
        chartStyles['fontStyle'] = apfs;
        customChartOptions.chart['style'] = chartStyles;
        createCharts(customChartOptions);
    });
    $("#appearanceFontColor").on("change", function(){
        chartStyles['color'] = $(this).val();
        customChartOptions.chart['style'] = chartStyles;
        createCharts(customChartOptions);
    });


    /// APPEARANCE TITLE STYLE
    let titleStyles = {};
    $("#appearanceTitleFont").on("change", function(){
        titleStyles['fontFamily'] = $(this).val();
        customChartOptions.title['style'] = titleStyles;
        createCharts(customChartOptions);
    });
    $("#appearanceTitleFontSize").on("change", function(){
        titleStyles['fontSize'] = $(this).val();
        customChartOptions.title['style'] = titleStyles;
        createCharts(customChartOptions);
    });

    $("#appearanceTitleFontBold").on("click", function(){
        let aptitlefw = 'normal';
        if ($(this).is(':checked')) {
            aptitlefw = $(this).val();
        }
        titleStyles['fontWeight'] = aptitlefw;
        customChartOptions.title['style'] = titleStyles;
        createCharts(customChartOptions);
    });
    $("#appearanceTitleFontItalic").on("click", function(){
        let aptitleitlc = 'normal';
        if ($(this).is(':checked')) {
            aptitleitlc = $(this).val();
        }
        titleStyles['fontStyle'] = aptitleitlc;
        customChartOptions.title['style'] = titleStyles;
        createCharts(customChartOptions);
    });
    
    $("#appearanceTitleFontColor").on("change", function(){
        titleStyles['color'] = $(this).val();
        customChartOptions.title['style'] = titleStyles;
        createCharts(customChartOptions);
    });
    

    /// APPEARANCE SUB TITLE STYLE
    let subTitleStyles = {};
    $("#appearanceSubTitleFont").on("change", function(){
        subTitleStyles['fontFamily'] = $(this).val();
        customChartOptions.subtitle['style'] = subTitleStyles;
        createCharts(customChartOptions);
    });
    $("#appearanceSubTitleFontSize").on("change", function(){
        subTitleStyles['fontSize'] = $(this).val();
        customChartOptions.subtitle['style'] = subTitleStyles;
        createCharts(customChartOptions);
    });

    $("#appearanceSubTitleFontBold").on("click", function(){
        let apsubtitlefw = 'normal';
        if ($(this).is(':checked')) {
            apsubtitlefw = $(this).val();
        }
        subTitleStyles['fontWeight'] = apsubtitlefw;
        customChartOptions.subtitle['style'] = subTitleStyles;
        createCharts(customChartOptions);
    });
    $("#appearanceSubTitleFontItalic").on("click", function(){
        let apsubtitleitlc = 'normal';
        if ($(this).is(':checked')) {
            apsubtitleitlc = $(this).val();
        }
        subTitleStyles['fontStyle'] = apsubtitleitlc;
        customChartOptions.subtitle['style'] = subTitleStyles;
        createCharts(customChartOptions);
    });
    
    $("#appearanceSubTitleFontColor").on("change", function(){
        subTitleStyles['color'] = $(this).val();
        customChartOptions.subtitle['style'] = subTitleStyles;
        createCharts(customChartOptions);
    });



    /// SERIES COLORS
    // $(".seriesColors").on("blur", function(){
    $(document).on("blur",'.seriesColors', function(){
        let scolors = $('.seriesColors').map((_,el) => el.value).get();
        customChartOptions['colors'] = scolors;
        createCharts(customChartOptions);
    })

    /// CHART AREA

    $("#chartAreaBgColor").on("change", function(){
        customChartOptions.chart['backgroundColor'] = $(this).val();
        createCharts(customChartOptions);
    });
    $("#chartAreaBorderWidth").on("change", function(){
        customChartOptions.chart['borderWidth'] = $(this).val();
        createCharts(customChartOptions);
    });
    $("#chartAreaBorderRadius").on("change", function(){
        customChartOptions.chart['borderRadius'] = $(this).val();
        createCharts(customChartOptions);
    });
    $("#chartAreaBorderColor").on("blur", function(){
        customChartOptions.chart['borderColor'] = $(this).val();
        createCharts(customChartOptions);
    });
    
    /// PLOT AREA
    $("#plotAreaBgColor").on("blur", function(){
        customChartOptions.chart['plotBackgroundColor'] = $(this).val();
        createCharts(customChartOptions);
    });
    
    $("#plotAreaBgImage").on("blur", function(){
        customChartOptions.chart['plotBackgroundImage'] = $(this).val();
        createCharts(customChartOptions);
    });
    $("#plotAreaBorderWidth").on("blur", function(){
        customChartOptions.chart['plotBorderWidth'] = $(this).val();
        createCharts(customChartOptions);
    });
    $("#plotAreaBorderColor").on("blur", function(){
        customChartOptions.chart['plotBorderColor'] = $(this).val();
        createCharts(customChartOptions);
    });

    /// AXES

    
    $("#AxesInverted").on("click", function(){
        let apInv = false;
        if ($(this).is(':checked')) {
            apInv = true;
        }
        customChartOptions.chart['inverted'] = apInv;
        createCharts(customChartOptions);
    });

    
    $("#xAxesFontFamily").on("blur", function(){
        customChartOptions.chart['plotBorderColor'] = $(this).val();
        createCharts(customChartOptions);
    });

    /// X-AXIS STYLE

    let xAxisTitles = {};
    xAxisTitles['style']={};
    $("#xAxesText").on("blur", function(){
        xAxisTitles['text'] = $(this).val();
        customChartOptions.xAxis['title'] = xAxisTitles;
        createCharts(customChartOptions);
    });


    $("#xAxesFontFamily").on("change", function(){
        xAxisTitles['style']['fontFamily'] = $(this).val();
        customChartOptions.xAxis['title'] = xAxisTitles;
        createCharts(customChartOptions);
    });

    $("#xAxesFontSize").on("change", function(){
        xAxisTitles['style']['fontSize'] = $(this).val();
        customChartOptions.xAxis['title'] = xAxisTitles;
        createCharts(customChartOptions);
    });

    $("#xAxesFontBold").on("click", function(){
        let xAxisBold = 'normal';
        if ($(this).is(':checked')) {
            xAxisBold = $(this).val();
        }
        xAxisTitles['style']['fontWeight'] = xAxisBold;
        customChartOptions.title['title'] = xAxisTitles;
        createCharts(customChartOptions);
    });
    $("#xAxesFontItalic").on("click", function(){
        let xAxisItalic = 'normal';
        if ($(this).is(':checked')) {
            xAxisItalic = $(this).val();
        }
        xAxisTitles['style']['fontStyle'] = xAxisItalic;
        customChartOptions.title['title'] = xAxisTitles;
        createCharts(customChartOptions);
    });
    
    $("#xAxesFontColor").on("change", function(){
        xAxisTitles['style']['color'] = $(this).val();
        customChartOptions.xAxis['title'] = xAxisTitles;
        createCharts(customChartOptions);
    });

    $("#xAxesType").on("change", function(){
        customChartOptions.xAxis['type'] = $(this).val();
        createCharts(customChartOptions);
    });
    

    
    $("#xAxesOpposite").on("click", function(){
        let isopposite = false;
        if ($(this).is(':checked')) { isopposite = true; }
        customChartOptions.xAxis['opposite'] = isopposite;
        createCharts(customChartOptions);
    });

    $("#xAxesDirection").on("click", function(){
        let isreversed = false;
        if ($(this).is(':checked')) { isreversed = true; }
        customChartOptions.xAxis['reversed'] = isreversed;
        createCharts(customChartOptions);
    });

    /// Y-AXIS STYLE

    let yAxisTitles = {};
    yAxisTitles['style']={};
    $("#yAxesText").on("blur", function(){
        yAxisTitles['text'] = $(this).val();
        customChartOptions.yAxis['title'] = yAxisTitles;
        createCharts(customChartOptions);
    });


    $("#yAxesFontFamily").on("change", function(){
        yAxisTitles['style']['fontFamily'] = $(this).val();
        customChartOptions.yAxis['title'] = yAxisTitles;
        createCharts(customChartOptions);
    });

    $("#yAxesFontSize").on("change", function(){
        yAxisTitles['style']['fontSize'] = $(this).val();
        customChartOptions.yAxis['title'] = yAxisTitles;
        createCharts(customChartOptions);
    });

    $("#yAxesFontBold").on("click", function(){
        let yAxisBold = 'normal';
        if ($(this).is(':checked')) { yAxisBold = $(this).val(); }
        yAxisTitles['style']['fontWeight'] = yAxisBold;
        customChartOptions.title['title'] = yAxisTitles;
        createCharts(customChartOptions);
    });
    $("#yAxesFontItalic").on("click", function(){
        let yAxisItalic = 'normal';
        if ($(this).is(':checked')) { yAxisItalic = $(this).val(); }
        yAxisTitles['style']['fontStyle'] = yAxisItalic;
        customChartOptions.title['title'] = yAxisTitles;
        createCharts(customChartOptions);
    });
    
    $("#yAxesFontColor").on("change", function(){
        yAxisTitles['style']['color'] = $(this).val();
        customChartOptions.yAxis['title'] = yAxisTitles;
        createCharts(customChartOptions);
    });

    $("#yAxesType").on("change", function(){
        customChartOptions.yAxis['type'] = $(this).val();
        createCharts(customChartOptions);
    });
    

    
    $("#yAxesOpposite").on("click", function(){
        let yisopposite = false;
        if ($(this).is(':checked')) { yisopposite = true; }
        customChartOptions.yAxis['opposite'] = yisopposite;
        createCharts(customChartOptions);
    });

    $("#yAxesDirection").on("click", function(){
        let yisreversed = false;
        if ($(this).is(':checked')) { yisreversed = true; }
        customChartOptions.yAxis['reversed'] = yisreversed;
        createCharts(customChartOptions);
    });

    

    /// VALUE LABELS
    customChartOptions['plotOptions']={};
    customChartOptions['plotOptions']['series']={};
    customChartOptions['plotOptions']['series']['dataLabels']={};
    customChartOptions['plotOptions']['series']['dataLabels']['style']={};
    var dataLabels = {};
    $("#valuesEnableDataLabels").on("click", function(){
        let valueDataLabels = false;
        if ($(this).is(':checked')) { valueDataLabels = true; }
        dataLabels['enabled'] = valueDataLabels;
        customChartOptions['plotOptions']['series']['dataLabels'] = dataLabels;
        createCharts(customChartOptions);
    });

    let dataLabelsStyles = {};
    $("#valuesTextColor").on("change", function(){
        dataLabelsStyles['color'] = $(this).val();
        customChartOptions['plotOptions']['series']['dataLabels']['style'] = dataLabelsStyles;
        createCharts(customChartOptions);
    });

    $("#valuesFontSize").on("blur", function(){
        dataLabelsStyles['fontSize'] = $(this).val()+'px';
        customChartOptions['plotOptions']['series']['dataLabels']['style'] = dataLabelsStyles;
        createCharts(customChartOptions);
    });
    $("#valuesFontWeight").on("change", function(){
        dataLabelsStyles['fontWeight'] = $(this).val();
        customChartOptions['plotOptions']['series']['dataLabels']['style'] = dataLabelsStyles;
        createCharts(customChartOptions);
    });
    
    $("#valuesOutline").on("blur", function(){
        dataLabelsStyles['textOutline'] = $(this).val();
        customChartOptions['plotOptions']['series']['dataLabels']['style'] = dataLabelsStyles;
        createCharts(customChartOptions);
    });

    /// LEGEND 
    customChartOptions['legend'] = {};
    var legendDetails = {};
    $("#legendEnabled").on("click", function(){
        let isLegend = false;
        if ($(this).is(':checked')) { isLegend = true; }
        legendDetails['enabled'] = isLegend;
        customChartOptions['legend'] = legendDetails;
        createCharts(customChartOptions);
    });

    $("#legendLayout").on("change", function(){
        legendDetails['layout'] = $(this).val();
        customChartOptions['legend'] = legendDetails;
        createCharts(customChartOptions);
    });
    $("#legendHrAlignment").on("change", function(){
        legendDetails['align'] = $(this).val();
        customChartOptions['legend'] = legendDetails;
        createCharts(customChartOptions);
    });
    $("#legendHrOffset").on("change", function(){
        legendDetails['x'] = $(this).val();
        customChartOptions['legend'] = legendDetails;
        createCharts(customChartOptions);
    });

    $("#legendVrAlignment").on("change", function(){
        legendDetails['verticalAlign'] = $(this).val();
        customChartOptions['legend'] = legendDetails;
        createCharts(customChartOptions);
    });
    $("#legendVrOffset").on("change", function(){
        legendDetails['y'] = $(this).val();
        customChartOptions['legend'] = legendDetails;
        createCharts(customChartOptions);
    });

    $("#legendFloating").on("click", function(){
        let legendfloat = false;
        if ($(this).is(':checked')) { legendfloat = true; }
        legendDetails['floating'] = legendfloat;
        customChartOptions['legend'] = legendDetails;
        createCharts(customChartOptions);
    });


    /// LEGEND APPEARANCE
    var legendItemStyle = {};
    $("#legendAppFont").on("change", function(){
        legendItemStyle['fontFamily'] = $(this).val();
        customChartOptions['legend']['itemStyle'] = legendItemStyle;
        createCharts(customChartOptions);
    });
    $("#legendAppFontSize").on("change", function(){
        legendItemStyle['fontSize'] = $(this).val();
        customChartOptions['legend']['itemStyle'] = legendItemStyle;
        createCharts(customChartOptions);
    });
    $("#legendAppFontBold").on("change", function(){
        let legendBold = 'normal';
        if ($(this).is(':checked')) { legendBold = 'bold'; }
        legendItemStyle['fontWeight'] = legendBold;
        customChartOptions['legend']['itemStyle'] = legendItemStyle;
        createCharts(customChartOptions);
    });
    $("#legendAppFontItalic").on("change", function(){
        let legendItalic = 'normal';
        if ($(this).is(':checked')) { legendItalic = 'italic'; }
        legendItemStyle['fontStyle'] = legendItalic;
        customChartOptions['legend']['itemStyle'] = legendItemStyle;
        createCharts(customChartOptions);
    });

    $("#legendAppFontItalic").on("change", function(){
        let legendItalic = 'normal';
        if ($(this).is(':checked')) { legendItalic = 'italic'; }
        legendItemStyle['fontStyle'] = legendItalic;
        customChartOptions['legend']['itemStyle'] = legendItemStyle;
        createCharts(customChartOptions);
    });
    $("#legendAppFontColor").on("change", function(){
        legendItemStyle['color'] = $(this).val();
        customChartOptions['legend']['itemStyle'] = legendItemStyle;
        createCharts(customChartOptions);
    });
    

    // var legendItemHiddenStyle = {};
    // $("#legendHiddenFontSize").on("change", function(){
    //     legendItemHiddenStyle['fontSize'] = $(this).val();
    //     customChartOptions['legend']['itemHiddenStyle'] = legendItemHiddenStyle;
    //     createCharts(customChartOptions);
    // });

    
    $("#legendBgColor").on("change", function(){
        legendDetails['backgroundColor'] = $(this).val();
        customChartOptions['legend'] = legendDetails;
        createCharts(customChartOptions);
    });
    
    $("#legendBorderWidth").on("change", function(){
        legendDetails['borderWidth'] = $(this).val();
        customChartOptions['legend'] = legendDetails;
        createCharts(customChartOptions);
    });
    
    $("#legendBorderRadius").on("change", function(){
        legendDetails['borderRadius'] = $(this).val();
        customChartOptions['legend'] = legendDetails;
        createCharts(customChartOptions);
    });
    $("#legendBorderColor").on("change", function(){
        legendDetails['borderColor'] = $(this).val();
        customChartOptions['legend'] = legendDetails;
        createCharts(customChartOptions);
    });

    /// TOOLTIP 
    customChartOptions['tooltip'] = {};
    var tooltipDetails = {};
    $("#tooltipEnabled").on("click", function(){
        let isTooltip = false;
        if ($(this).is(':checked')) { isTooltip = true; }
        tooltipDetails['enabled'] = isTooltip;
        customChartOptions['tooltip'] = tooltipDetails;
        createCharts(customChartOptions);
    });

    $("#tooltipShared").on("click", function(){
        let isShared = false;
        if ($(this).is(':checked')) { isShared = true; }
        tooltipDetails['shared'] = isShared;
        customChartOptions['tooltip'] = tooltipDetails;
        createCharts(customChartOptions);
    });

    $("#tooltipBgColor").on("change", function(){
        tooltipDetails['backgroundColor'] = $(this).val();
        customChartOptions['tooltip'] = tooltipDetails;
        createCharts(customChartOptions);
    });
    $("#tooltipBgColor").on("change", function(){
        tooltipDetails['backgroundColor'] = $(this).val();
        customChartOptions['tooltip'] = tooltipDetails;
        createCharts(customChartOptions);
    });
    
    $("#tooltipBorderWidth").on("blur", function(){
        tooltipDetails['borderWidth'] = $(this).val();
        customChartOptions['tooltip'] = tooltipDetails;
        createCharts(customChartOptions);
    });
    $("#tooltipBorderRadius").on("blur", function(){
        tooltipDetails['borderRadius'] = $(this).val();
        customChartOptions['tooltip'] = tooltipDetails;
        createCharts(customChartOptions);
    });
    $("#tooltipBorderColor").on("blur", function(){
        tooltipDetails['borderColor'] = $(this).val();
        customChartOptions['tooltip'] = tooltipDetails;
        createCharts(customChartOptions);
    });

    /// EXPORTING
    customChartOptions['exporting']={};
    $("#exportEnabled").on("click", function(){
        let isExport = false;
        if ($(this).is(':checked')) { isExport = true; }
        customChartOptions['exporting']['enabled'] = isExport;
        createCharts(customChartOptions);
    });

    $("#exportWidth").on("blur", function(){
        customChartOptions['exporting']['sourceWidth'] = $(this).val();
        createCharts(customChartOptions);
    });

    $("#exportScalingFactor").on("blur", function(){
        customChartOptions['exporting']['scale'] = $(this).val();
        createCharts(customChartOptions);
    });

    $("#advanceChartType").on("change", function(){
        customChartOptions.chart['type']= $(this).val();
        createCharts(customChartOptions);
    });
    
});



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
    console.log(options);
    var SSCHARTS = Highcharts.chart('customdemo', options);
}
</script>