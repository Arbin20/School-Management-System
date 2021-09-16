<?php
	$teacher_data = showTeachersData();
	updateTeacherById();
?>
<?php 
	if(isset($_GET['message']) && $_GET['message'] == "success") {
		echo "<p class='bg-success'>Teacher updated! <a href='teachers.php'>Shiko të gjithë Arsimtarët</a></p>";
	}
?>
<form action="" method="post" enctype="multipart/form-data">
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Emri</label>
			<input type="text" name="teacher_first_name" class="form-control" value="<?php echo $teacher_data['teacher_first_name']; ?>">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Qazimi</label>
			<input type="text" name="teacher_last_name" class="form-control" value="<?php echo $teacher_data['teacher_last_name']; ?>">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Përcaktimi</label>
			<?php
				$t_id = $_GET['t_id'];
				$query = "SELECT teacher_designation FROM teachers WHERE id=$t_id";
				$result = mysqli_query($conn, $query);
				$row = mysqli_fetch_assoc($result);

				$teacherDesignation = $row['teacher_designation'];
			?>
			<select name="teacher_designation" class="form-control" id="">
				<option value="">Zgjedheni njërin prej opcioneve</option>
				<option value="Assistant Teacher" <?php echo $teacherDesignation == "Assistant Teacher"? "selected" : ""; ?>>Asistent</option>
				<option value="Senior Teacher" <?php echo $teacherDesignation == "Senior Teacher"? "selected" : ""; ?>>Mësues i Lartë</option>
				<option value="Junior Teacher" <?php echo $teacherDesignation == "Junior Teacher"? "selected" : ""; ?>>Praktikant</option>
				<option value="Headmaster" <?php echo $teacherDesignation == "Headmaster"? "selected" : ""; ?>>Drejtor</option>
				<option value="Assistant Headmaster" <?php echo $teacherDesignation == "Assistant Headmaster"? "selected" : ""; ?>>Asistent Drejtor</option>
				<option value="Sports Teacher" <?php echo $teacherDesignation == "Sports Teacher"? "selected" : ""; ?>>Mësues Sporti</option>
				<option value="Proxy Teacher" <?php echo $teacherDesignation == "Proxy Teacher"? "selected" : ""; ?>>Mësues Perfaqësues</option>
			</select>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Gjinia</label>
			<?php
				$t_id = $_GET['t_id'];
				$query = "SELECT teacher_gender FROM teachers WHERE id=$t_id";
				$result = mysqli_query($conn, $query);
				$row = mysqli_fetch_assoc($result);

				$teacherGender = $row['teacher_gender'];
			?>
			<select name="teacher_gender" class="form-control" id="">
				<option value="">Zgjedheni Gjininë</option>
				<option value="Male" <?php echo $teacherGender == "Male"? "selected" : ""; ?>>Mashkull</option>
				<option value="Female" <?php echo $teacherGender == "Female"? "selected" : ""; ?>>Femër</option>
			</select>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" name="teacher_email" class="form-control" value="<?php echo $teacher_data['teacher_email']; ?>" disabled="disabled">
		</div>
	</div>
	<div class="col-md-12">
		<img src="../assets/images/teacher-images/<?php echo $teacher_data['teacher_image']; ?>" width="100" height="70" alt="">
		<div class="form-group">
			<label for="">Fotografi</label>
			<input type="file" name="teacher_image" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Kualifikimet</label>
			<textarea name="teacher_qualification" class="form-control" id="" cols="30" rows="6"><?php echo $teacher_data['teacher_qualification']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="">Adresa</label>
			<textarea name="teacher_address" class="form-control" id="" cols="30" rows="6"><?php echo $teacher_data['teacher_address']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="">Kontakti</label>
			<input type="text" name="teacher_contact" class="form-control" value="<?php echo $teacher_data['teacher_contact']; ?>">
		</div>
		<div class="form-group">
			<label for="">Fjalëkalimi</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" Value="Ndrysho të Dhënat" class="btn btn-info" name="update_teacher_btn">
		</div>
	</div>
</form>