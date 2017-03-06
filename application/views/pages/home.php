<!doctype html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css"/>
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container contents">

			<div class="jumbotron main-title">
				<div class="container text-center">
					<h1> Orgnzr. </h1>
					<p> welcome to your personalized organizer.</p>
					<ul class="list-inline main-nav">
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li>|</li>
						<li><a href="#">Calendar</a></li>
						<li>|</li>
						<li><a href="#">About</a></li>
					</ul>
				</div>
			</div>

			<div class="container-fluid bg-3 text-center">
				<div class="plan-title">
					<h2>Matt's Plan</h2>
					<p>Add +</p>
				</div>
				
				<br>
				<div class="row">
					<div class="col-sm-3 col-md-3 main-item">
						<p>Daily Tasks</p>
					</div>
					<div class="col-sm-3 col-md-3 main-item">
						<p>Monthly Tasks</p>
					</div>
					<div class="col-sm-3 col-md-3 main-item">
						<p>Most Urgent</p>
					</div>
					<div class="col-sm-3 col-md-3 main-item">
						<p>Events</p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3 col-md-3 main-item">
						<p>Work</p>
					</div>
					<div class="col-sm-3 col-md-3 main-item">
						<p>Ideas</p>
					</div>
					<div class="col-sm-3 col-md-3 main-item">
						<p>Notes</p>
					</div>
					<div class="col-sm-3 col-md-3 main-item">
						<p>Blog Entries</p>
					</div>
				</div>
			</div>

			<footer class="container-fluid">Matthew Hart. 2017.</footer>

		</div>
	</body>
	<script src="<?php echo base_url(); ?>/assets/js/home.js"></script>
</html>