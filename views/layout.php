<!DOCTYPE html>
<html lang="en">
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1" http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	 <style>
 body{text-align:center;}
.footer {
    position: relative;
    bottom: 0;
	margin-bottom:0;
    width: 100%;
    min-height: 10vh;
    background-color: #f5f5f5;
	display:block;
}
.container-fluid{
	text-align:left;
}
.main{
	min-height:90vh;
}
.panel-default{
	width: 40vh;
}
  </style>
  </head>

  <body>
	<div class="main">

		<header>
			<ul class="nav nav-pills navbar-default">
				<li><a href='/todo'>Hem</a></li>
				<li><a href='?controller=tasks&action=index'>Uppdrag</a></li>
			</ul>
		</header>
		<div class="container-fluid">
			<?php require_once('routes.php'); ?>
		</div>
	</div>
    <footer class="footer container-fluid">
	    <div class="panel-body text-center">
			<p>Copyright © Mikael Fehrm</p>
		</div>
    </footer>
  <body>
<html>
