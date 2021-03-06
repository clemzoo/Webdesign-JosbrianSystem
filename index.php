<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<title>Home Page</title>
	<style>
		@media (min-width: 768px)
   .sidebar {
      position: fixed;
      top: 51px;
      bottom: 0;
      left: 0;
      z-index: 1000;
      display: block;
      padding: 20px;
      overflow-x: hidden;
      overflow-y: auto;
      background-color: #f5f5f5;
      border-right: 1px solid #eee;
   }
	</style>

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	<!-- NAVBAR -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a class="btn btn-inverse" href="index.html">
							<i class="glyphicon glyphicon-home"></i>
						</a>
					</li>
					<li>
						<a href="items.html">Items</a>
					</li>
					<li>
						<a href="promotions.html">Promotions</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
		<!-- END NAVBAR -->
		<!-- MAIN CONTENT -->
		<div style="padding-top: 90px" id="home-content">
			<div class="container-fluid">
				<!-- Screen Reader -->
				<h1 class="sr-only">Homepage</h1>
				<div>
					<?php
					 	include 'php/testingDisplay.php';
						echo display();
					 ?>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
		<div class="clearfix"></div>
	</div>
	<!-- END WRAPPER -->

</body>

</html>
