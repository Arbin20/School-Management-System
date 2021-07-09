<?php
	ob_start();
	require_once "../functions.php";
	if(!is_teacher()) {
		header("Location: ../login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profili i Mësuesit</title>
	<!-- stylesheet -->
	<link rel="stylesheet" tpe="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" tpe="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" tpe="text/css" href="assets/css/bootstrap-datepicker.css">
	<link rel="stylesheet" tpe="text/css" href="style.css">
	<script src="assets/js/jquery-1.12.4.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Navigimi</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		</div>
	
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav side-nav">
				<li><a href="index.php"><i class="fa fa-dashboard"></i> Paneli</a></li>
				<li><a href="my_classes.php"><i class="fa fa-book"></i> Klasat</a></li>
				<li><a href="profile.php"><i class="fa fa-user"></i> Profili</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i> Rezultatet <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="add_result.php">Shto Rezultat</a></li>
						<li class="divider"></li>
						<li><a href="edit_result.php">Shiko/Ndrysho Rezultatet</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-graduation-cap"></i> Prezenca <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="take_attendance.php">Merr Prezencën</a></li>
						<li class="divider"></li>
						<li><a href="update_attendance.php">Shiko/Ndrysho Prezencën</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right navbar-user">
				<li><a href="../index.php" target="_blank">Kthehu në Uebfaqe</a></li>
				<li class="dropdown user-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo get_name_by_session(); ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="profile.php"><i class="fa fa-user"></i> Profili</a></li>
						<li class="divider"></li>
						<li><a href="../logout.php"><i class="fa fa-power-off"></i> Çkyçu</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-12">