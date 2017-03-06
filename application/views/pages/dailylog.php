<!DOCTYPE html>
<html>
<head>
	<title>Daily Log</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid text-center">
		<h1>Tasks for Date</h1>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th style="text-align:center;">Status</th>
						<th style="text-align:center;">Task</th>
					</tr>
				</thead>

				<tr>
					<td><input type="radio" name="task_1" ></td>
					<td>
						<h5>Apply to 5 Jobs</h5>
						<ul style="list-style-type: none;">
							<li><input type="text" name="one" placeholder="1."></li>
							<li><input type="text" name="two" placeholder="2."></li>
							<li><input type="text" name="three" placeholder="3."></li>
							<li><input type="text" name="four" placeholder="4."></li>
							<li><input type="text" name="five" placeholder="5."></li>
						</ul>
					</td>
				</tr>

				<tr>
					<td><input type="radio" name="task_2"></td>
					<td>
						<h5>Workout For 30 Minutes</h5>
						<ul style="list-style-type: none;">
							<li>20 x 3 Pushups</li>
							<li>12 x 3 Dumbbell Curls</li>
							<li>20 min Cycle</li>
							<li>12 x 3 Dumbbell Shoulder Press</li>
						</ul>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>