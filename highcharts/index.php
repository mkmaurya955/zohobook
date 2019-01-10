<!DOCTYPE html>
<html>
<head>
	<title>Highcharts</title>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	</head>
<body>


<!-- Temperature Chart-->

	<div id="container" style="width:40%; height:400px;"></div>

	<script type="text/javascript">
		$(document).ready(function(){
			// for refreshing the page by using jquery
			setInterval(function(){
				$('#container').load('index.php')
			}, 3000);
			var options={
				chart:{
					renderTo:'container',
					type:'column'
				},
				title: {
            		text: 'Temperature'
        		},
        		xAxis: {
            		categories: []
        		},
        		yAxis: {
            		title: {
               			text: 'Temperature'
            		}
        		},
				series:[
				{
					name: 'Temperature With Respect To Time',
				}]
			};
			$.getJSON('data.php',function(data){
				options.series[0].data=data;
				var chart=new Highcharts.Chart(options);

			});
			// for refreshing the chart
			//setInterval(function() {
    		//	$.getJSON('test2.json', function(data) {
        	//		var chart = $('#container').highcharts();
        	//	$.each(data, function(pos, serie) {
            //		chart.series[pos].setData(serie, false);
        	//});
        	//chart.redraw();
    		//});
			//}, 300000);
			
		});

			
	</script>

	<!--Humidity Charts-->

	<div id="containers" style="width:40%; height:400px;"></div>

	<script type="text/javascript">
		$(document).ready(function(){
			// for refreshing the page by using jquery
			// setInterval(function(){
			//	$('#containers').load('index.php')
			//}, 3000);
			var options={
				chart:{
					renderTo:'containers',
					type:'column'
				},
				title: {
            		text: 'Humidity'
        		},
        		xAxis: {
            		categories: []
        		},
        		yAxis: {
            		title: {
               			text: 'Humidity'
            		}
        		},
				series:[
				{
					name: 'Humidity With Respect To Time',
				}]
			};
			$.getJSON('data1.php',function(data){

				options.series[0].data=data;
				var chart=new Highcharts.Chart(options);
			});
		});
	</script>
</body>
</html>