<?php
	ob_start();
	require_once "../functions.php";
	if(!is_admin()) {
		header("Location: ../login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>School Admin</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-datepicker.css" rel="stylesheet">
		<link href="css/sb-admin.css" rel="stylesheet">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<script src="js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="//www.gstatic.com/charts/loader.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Navigimi</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Ismail Qemali</a>
				</div>
				
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
						<li><a href="index.php"><i class="fa fa-dashboard"></i> Paneli Kryesor</a></li>
						<li><a href="class.php"><i class="fa fa-home"></i> Klasat</a></li>
						<li><a href="class_time.php"><i class="fa fa-home"></i> Orari</a></li>
						<li><a href="sections.php"><i class="fa fa-code-fork"></i> Seksioni</a></li>
						<li><a href="subjects.php"><i class="fa fa-book"></i> Lëndët</a></li>
						<li><a href="assign_teacher.php"><i class="fa fa-user"></i> Caktimi i Arsimtarëve</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Arsimtarët <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="teachers.php">Të gjithë Arsimtarët</a></li>
								<li><a href="teachers.php?action=add_new">Shto Arsimtar</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Nxënësit <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="students.php">Të gjithë Nxënësit</a></li>
								<li><a href="students.php?action=add_new">Shto Nxënës të ri</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Lajmërimet <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="notices.php">Të gjithë Lajmërimet</a></li>
								<li><a href="notices.php?action=add_new">Shto Lajmërim të ri</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calendar"></i> Ngjarjet <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="events.php">Të gjithë Ngjarjet</a></li>
								<li><a href="events.php?action=add_new">Shto Ngjarje të re</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i> Faqet <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="content_about.php">Rreth Shkollës</a></li>
								<li><a href="content_teacher.php">Faqja e Arsimtarëve</a></li>
								<li><a href="content_gallery.php">Faqja e Fotografive</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i> Informacionet e Shkollës  <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="content_school_name.php">Emri i Shkollës</a></li>
								<li><a href="content_school_address.php">Adresa e Shkollës</a></li>
								<li><a href="content_logo.php">Emblema e Shkollës</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right navbar-user">
						<li><a href="../index.php" target="_blank">Kthehu te Uebfaqja</a></li>
						<li class="dropdown user-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo get_name_by_session(); ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="admin_profile.php"><i class="fa fa-user"></i>  Profili</a></li>
								<li class="divider"></li>
								<li><a href="../logout.php"><i class="fa fa-power-off"></i> Çkyçu nga sistemi</a></li>
							</ul>
						</li>
					</ul>
					</div>
				</nav>

				<div id="page-wrapper">
					<div class="row">
						<div class="col-lg-12">