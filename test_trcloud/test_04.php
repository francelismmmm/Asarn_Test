<!DOCTYPE html>
<html>
<head>
<title>Database</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.min.js"></script>
<meta charset=utf-8 />

</head>
<body>
<div>
<table style="width:100%;">
<tr>
	<td style="width:60%;">
		<canvas id="myChart"></canvas>
	</td>
	<td style="width:25;">
		<canvas id="myChart2"></canvas>
	</td>
</tr>
</table>




  <script>

$.ajax({ 
				url: "https://www.trcloud.co/test/api.php" ,
				type: "POST",
				data: ''
			})
			.success(function(result) {
                var city = [];
                var people = [];
				var obj = jQuery.parseJSON(result);
					if(obj != '')
					{
						  //$("#myTable tbody tr:not(:first-child)").remove();
						  
						  $.each(obj, function(key, val) {
								city.push(val.City);
                                people.push(val.Population);
						  });
					}

			




var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: city,
        datasets: [{
            label: 'Range by country',
            data: people,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: {
                beginAtZero: true
            }
        }
    }
});


var ctx = document.getElementById('myChart2');

var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: city,
        datasets: [{
            label: 'Range by country',
            data: people,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: {
                beginAtZero: true
            }
        }
    }
});});


</script>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.0/chart.min.js" integrity="sha512-yadYcDSJyQExcKhjKSQOkBKy2BLDoW6WnnGXCAkCoRlpHGpYuVuBqGObf3g/TdB86sSbss1AOP4YlGSb6EKQPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>