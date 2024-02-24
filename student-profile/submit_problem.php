<?php require_once "includes/header.php"; ?>

<?php
	$username = $_SESSION['username'];
	if(isset($_POST['message_submit'])) {
		$subject= $_POST['subject'];
		$message= wordwrap($_POST['message'], 465);
		$done = mail("arbin.qazimi21@gmail.com",$subject,$message);
		if($done) {
			echo "<script>alert('Mesazhi juaj u dërgua me sukses!')</script>";
		}
	}
?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<?php require_once 'sidebar.php'; ?>
		</div>
		<div class="col-md-8">
			<form action="" method="post">
				<div class="form-group">
				<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-9e03d677-d1fe-46e7-bb20-cf926f482135" data-elfsight-app-lazy></div>
				</div>
				
			
		</div>
	</div>
</div>

<?php require_once "includes/footer.php"; ?>