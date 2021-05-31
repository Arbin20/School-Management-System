<?php require_once "includes/header.php"; ?>

<div class="home-banner section-padding text-center text-light home-banner-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="display-table banner-min-height">
						<div class="display-table-cell">
						<span style="background-color:black; font-size:30px">Mirë se vini në <?php echo get_school_name(); ?></span>
						<br />
							<?php if(!is_user_logged_in()) { ?>
							<a href="login.php" class="btn btn-success">Kyçu në sistem</a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about-section section-padding">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<div class="single-about">
						<CENTER><h3>HISTORIA E SHKOLLËS</h3></CENTER>
						<img src="assets/images/banner-1.jpg" alt="">
						<?php
						$query = "SELECT * FROM page_contents WHERE page_name='about_page'";
						$result = mysqli_query($conn, $query);
						$row = mysqli_fetch_assoc($result);
						$page_text = $row['page_text'];
						$first_para = substr($page_text, strpos($page_text, "<p"), strpos($page_text, "</p>")+4);
						echo $first_para;
						?>
						<a href="about.php" class="btn btn-success">Lexo më shumë</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-about">
						<center><h3>ARSIMTARËT</h3></center>
						<img src="assets/images/banner-3.jpg" alt="">
						<?php
						$query = "SELECT * FROM page_contents WHERE page_name='teacher_page'";
						$result = mysqli_query($conn, $query);
						$row = mysqli_fetch_assoc($result);
						echo $row['page_text'];
						?>
						<br />
						<br />
						<p><a href="teachers.php" class="btn btn-success">Shiko Arsimtarët</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about-section section-padding theme-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="single-about single-notice">
						<h3>Njoftimet</h3>
						<?php 
							$query = "SELECT * FROM notice ORDER BY id DESC LIMIT 5";
							$result = mysqli_query($conn, $query);
							while($row = mysqli_fetch_assoc($result)) {
								$notice_id = $row['id'];
								$notice_title = $row['notice_title'];
								echo "<p><i class='fa fa-hand-o-right'><a href='notice.php?id=$notice_id'>$notice_title</a></i></p>";
							}
						?>
						
						<a href="notice.php" class="btn btn-success">Shiko më shumë</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-about single-notice">
						<h3>Ngjarjet</h3>
						<?php 
							$query = "SELECT * FROM event ORDER BY id DESC LIMIT 5";
							$result = mysqli_query($conn, $query);
							while($row = mysqli_fetch_assoc($result)) {
								$event_id = $row['id'];
								$event_title = $row['event_title'];
								echo "<p><i class='fa fa-hand-o-right'><a href='event.php?id=$event_id'>$event_title</a></i></p>";
							}
						?>
						<a href="event.php" class="btn btn-success">Shiko më shumë</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-padding section-count">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					

				</div>
			</div>
		</div>
	</div>
<?php require_once "includes/footer.php"; ?>