<?php require_once "includes/header.php"; ?>
	<h1>Seksionet</h1>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					<?php delete_section(); ?>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Klasa</th>
								<th>Seksioni</th>
								<th>Grupi</th>
								<th>Fshij <input type="checkbox" class="delete-modify"></th>
							</tr>
						</thead>
						<tbody>
							<?php
								$query = "SELECT * FROM sections ORDER BY class_id, section ASC";
								$result = mysqli_query($conn, $query);
								if(!$result) {
									die(mysqli_error($conn));
								}
								while ($row = mysqli_fetch_assoc($result)) {
									echo "<tr>";
									echo "<td>".$row['id']."</td>";
									echo "<td>Class ".$row['class_id']."</td>";
									echo "<td>".$row['section']."</td>";
									echo "<td>".$row['group_name']."</td>";
									echo "<td><a href='sections.php?delete_section=".$row['id']."' class='btn btn-danger delete-hidden'>Delete</a><span class='text-danger shwo-text'>Për të fshirë, klikoni kutinë e zgjedhjes</span></td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
				<div class="col-md-6">
					<?php add_section(); ?>
					<form action="" method="post">
						<div class="form-group">
							<label for="">Klasa</label>
							<select name="class_id" id="" class="form-control">
								<?php
									$query = "SELECT * FROM class";
									$result = mysqli_query($conn, $query);
									while ($row = mysqli_fetch_assoc($result)) {
										$class_id = $row['id'];
										$class = $row['class'];
										echo "<option value='{$class}'>{$class}</option>";
									}
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Seksioni</label>
							<select name="section" id="" class="form-control">
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="F">F</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Grupi</label>
							<select name="group_name" id="" class="form-control">
								<option value="">Zgjidh</option>
								<option value="Science">Shkenca</option>
								<option value="Humanities">Shoqëror/Përgjithshëm</option>
								<option value="Commerce">Tregti</option>
							</select>
						</div>
						<div class="form-group">
							<input type="submit" name="section_submit" value="Shto Seksion" class="btn btn-info">
						</div>
					</form>
				</div>
			</div>
		</div>

<script>
	$(document).ready(function() {
		$(".delete-hidden").hide();
		$(".delete-modify").on('click', function() {
			var value = $(this).val();
			if($(this).prop('checked') == true) {
				$(".shwo-text").hide();
				$(".delete-hidden").show();
			} else {
				$(".delete-hidden").hide();
				$(".shwo-text").show();
			}
		});
	});
</script>
<?php require_once "includes/footer.php"; ?>