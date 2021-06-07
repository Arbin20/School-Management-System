<?php require_once "includes/header.php"; ?> <!-- Në header i kam shënuar te gjithë linqet apo taget të cialt do te paraqiten në të gjitha faqet, 
dmth me qëllim që mos të shkruhet kodi shumë herë -->
<?php require_once "includes/banner.php" ?>
	<div class="about-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-about">
					<!-- Kërkimi prej databazës që të me jep tesktin e shkruar në page_contents -->
					<?php 
						$query = "SELECT * FROM page_contents WHERE page_name='about_page'";
						$result = mysqli_query($conn, $query);
						$row = mysqli_fetch_assoc($result);
						echo $row['page_text'];
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require_once "includes/footer.php"; ?>d