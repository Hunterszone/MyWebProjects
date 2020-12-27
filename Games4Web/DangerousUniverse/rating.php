<?php
	
    require('connection.php');
	
		//Create array to store validation errors
		$errmsg_arr = array();
	 
		//Validation error flag
		$errflag = false;
		
		$queryStar1 = "SELECT * FROM feedback AS f WHERE f.rating LIKE '%1/5%'";
        $resultStar1 = mysqli_query($conn,$queryStar1);
		$rowStar1 = mysqli_num_rows($resultStar1);
		
		$queryStar2 = "SELECT * FROM feedback AS f WHERE f.rating LIKE '%2/5%'";
        $resultStar2 = mysqli_query($conn,$queryStar2);
		$rowStar2= mysqli_num_rows($resultStar2);
		
		$queryStar3 = "SELECT * FROM feedback AS f WHERE f.rating LIKE '%3/5%'";
        $resultStar3 = mysqli_query($conn,$queryStar3);
		$rowStar3= mysqli_num_rows($resultStar3);
		
		$queryStar4 = "SELECT * FROM feedback AS f WHERE f.rating LIKE '%4/5%'";
        $resultStar4 = mysqli_query($conn,$queryStar4);
		$rowStar4= mysqli_num_rows($resultStar4);
		
		$queryStar5 = "SELECT * FROM feedback AS f WHERE f.rating LIKE '%5/5%'";
        $resultStar5 = mysqli_query($conn,$queryStar5);
		$rowStar5= mysqli_num_rows($resultStar5);
			
			
	$conn->close();

?>

<html>

<style>

form .redS {
  background: url("images/redStar.png");
  width: 125px;
  height: 125px;
  cursor: pointer;
}

form .orangeS {
  background: url("images/orangeStar.png");
  width: 125px;
  height: 125px;
  cursor: pointer;
}

form .yellowS {
  background: url("images/star.png");
  width: 125px;
  height: 125px;
  cursor: pointer;
}

form .greenS {
  background: url("images/greenStar.png");
  width: 125px;
  height: 125px;
  cursor: pointer;
}

form .darkGreenS {
  background: url("images/darkGreen.png");
  width: 125px;
  height: 125px;
  cursor: pointer;
}

</style>

<head><title>Please rate</title>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</head>

<body background="images/background.jpg">

<form id="ratingsForm" action="code_exec.php" method="post">
<center><table>
<tr>
	<th>
		<button class="redS" name="star" class="star-1" id="star-1" value="1/5" onclick="thankyou();" />
	</th>
	<th>
		<button class="orangeS" name="star" class="star-2" id="star-2" value="2/5" onclick="thankyou();" />
	</th>
	<th>
		<button class="yellowS" name="star" class="star-3" id="star-3" value="3/5" onclick="thankyou();" />
	</th>
	<th>
		<button class="greenS" name="star" class="star-4" id="star-4" value="4/5" onclick="thankyou();" />
	</th>	
	<th>
		<button class="darkGreenS" name="star" class="star-5" id="star-5" value="5/5" onclick="thankyou();" />
	</th>
		<span></span>
	</th>
</tr>
</form>

<canvas id="myChart" width="200" height="50"></canvas>

<script>

var counterS1 = parseInt("<?php echo $rowStar1 ?>");
var counterS2 = parseInt("<?php echo $rowStar2 ?>");
var counterS3 = parseInt("<?php echo $rowStar3 ?>");
var counterS4 = parseInt("<?php echo $rowStar4 ?>");
var counterS5 = parseInt("<?php echo $rowStar5 ?>");

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['1/5', '2/5', '3/5', '4/5', '5/5'],
        datasets: [{
            label: 'Total votes: ' + parseInt(counterS1 + counterS2 + counterS3 + counterS4 + counterS5),
            data: [counterS1, counterS2, counterS3, counterS4, counterS5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(11, 156, 49, 0.2)',
                'rgba(11, 156, 49, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 206, 86, 1)',
				'rgba(255, 159, 64, 1)',
                'rgba(11, 156, 49, 1)',
                'rgba(11, 156, 49, 0.2)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<p></br>
	<center><font size="6"><font color="yellow">Rate us using the stars below:</font></font></center>
</p>

</body>

</html>

