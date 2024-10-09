(function($){

	$.fn.sschart=function(options){
		var settings=$.extend({
		    chartId:'sss',
		    chartType:'column', // column, line, spline, bar, area, pie
		    colors:['#507eab'],
		    bgColor:'',
		    title:'',
		    subtitle:'',
		    xAxisTitle:'',
		    yAxisTitle:'Y Title',
		    tooltipMsg:'Total',
		    dataLabelsEnabled:true,
		    legend:true,

			xAxisColor:'#fff',
			xAxisFontSize:'13',
			xAxisFontWeight:'normal',


		    seriesData:[
				{'name':'Zone-1 (UP)', 'y':5,'color':'red'},
				{'name':'Zone-2 (UP)', 'y':9},
				{'name':'Zone-3 (UP)', 'y':7},
				{'name':'Zone-4 (UP)', 'y':8},
				{'name':'Zone-5 (UP)', 'y':6},
				{'name':'Zone-6 (UP)', 'y':5},
				{'name':'Zone-7 (Bihar)', 'y':3},
				{'name':'Zone-8 (Bihar)', 'y':9},
				{'name':'Zone-9 (Bihar)', 'y':1},
			],

		},options);

		let dtLbls = {
				enabled: settings.dataLabelsEnabled,
				rotation: -90,
				color: '#FFFFFF',
				align: 'center',
				format: '{point.y:.0f}',
				y: 10, // 10 pixels down from the top
				style: {
					fontSize: '12px',
					fontFamily: 'Verdana, sans-serif'
				}
			}
		if(settings.chartType=="pie"){
			dtLbls = {
				enabled: settings.dataLabelsEnabled,
				//rotation: -90,
				distance: 5,
				color: '#FFFFFF',
				align: 'center',
				style: {
					fontSize: '12px',
					// fontFamily: 'Verdana, sans-serif'
					fontFamily: 'Railway'
				}
			}
		}

		var SSCHARTS = Highcharts.chart(settings.chartId, {
			colors: settings.colors,
			chart: {
				backgroundColor:settings.bgColor,
				type: settings.chartType ///'column' // line, bar, column, area
			},
			title: {
				text: settings.title,
				style: {
					color: '#fff'
				 }
			},
			subtitle: {
				text: settings.subtitle,
				style: {
					color: '#fff'
				 }
			},
			xAxis: {
				type: 'category',
				labels: {
					rotation: -45,
					style: {
						fontSize: settings.xAxisFontSize+'px',
						fontFamily: 'Verdana, sans-serif',
						color: settings.xAxisColor,
						fontWeight: settings.xAxisFontWeight
					}
				},
				title: {
					enabled: true,
					text: settings.xAxisTitle,
					style: {
						// width: 200,
						fontWeight: 'bold',
						fontSize:'25px',
						color: 'white'
					}
				}
			},
			yAxis: {
				min: 0,
				title: {
					enabled: true,
					text: settings.yAxisTitle,
					style: {
						// width: 200,
						fontWeight: 'bold',
						fontSize:'25px',
						color: 'white'
					}
				}
			},
			// legend: {
			// 	enabled: settings.legend
			// },
			tooltip: {
				pointFormat: settings.tooltipMsg+': <b>{point.y:.0f} </b>'
			},

			plotOptions: {
	            pie: {
	                allowPointSelect: true,
	                cursor: 'pointer',
	                showInLegend: settings.legend,
	                // dataLabels: {
	                //     enabled: false,                        
	                //     formatter: function() {
	                //         return this.percentage.toFixed(2) + '%';
	                //     }
	                // }                                   
	            }
	        },
			legend: {
	            enabled: settings.legend,
	            // layout: 'vertical',
	            // align: 'right',
	            // width: 200,
	            // verticalAlign: 'middle',
	            useHTML: true,
	            labelFormatter: function() {
	                return '<div style="">' + this.name + '</div>';
	            }
	        },
			
			series: [{
				// name: 'Total',
				data: settings.seriesData,
				// dataLabels:{
			    //     distance: 5
			    //   },
				dataLabels: dtLbls
			}]
		});
	};
}($));