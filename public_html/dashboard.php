<?php


?>


<h1>Dashboard</h1>
<div class="ct-chart ct-golden-section" id="chart1"></div>

<script>
	$(document).ready(function(){
		new Chartist.Line('#chart1', {
		    labels: [1, 2, 3, 4],
		    series: [[100, 120, 180, 200]]
	  	});
	});
</script>