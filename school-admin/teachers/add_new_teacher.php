<?php $error = register_teacher(); ?>
<?php 
	if(isset($_GET['message']) && $_GET['message'] == "success") {
		echo "<p class='bg-success'>Arsimtari u shtua me sukses! <a href='teachers.php'>Shiko të gjithë Arsimtarët</a></p>";
	}
	if(!empty($error)) {
		echo "<p class='bg-danger'>$error</p>";
	}
?>
<form action="" method="post" enctype="multipart/form-data">
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Emri</label>
			<input type="text" name="teacher_first_name" class="form-control">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Mbiemri</label>
			<input type="text" name="teacher_last_name" class="form-control">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Përcaktimi</label>
			<select name="teacher_designation" class="form-control" id="">
				<option value="">Zgjedheni një prej opcioneve</option>
				<option value="Assistant Teacher">Asistent</option>
				<option value="Senior Teacher">Mësues i Lartë</option>
				<option value="Junior Teacher">Praktikant</option>
				<option value="Headmaster">Drejtor</option>
				<option value="Assistant Headmaster">Asistent Drejtor</option>
				<option value="Sports Teacher">Mësues Sporti</option>
				<option value="Proxy Teacher">Mësues Përfaqësues</option>
			</select>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Gjinia</label>
			<select name="teacher_gender" class="form-control" id="">
				<option value="">Zgjedheni Gjininë</option>
				<option value="Male">Mashkull</option>
				<option value="Female">Femër</option>
				<!--<option value="Other">Other</option> -->
			</select>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" name="teacher_email" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Fotografi</label>
			<input type="file" name="teacher_image" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Kualifikimi</label>
			<textarea name="teacher_qualification" class="form-control" id="" cols="30" rows="6"></textarea>
		</div>
		<div class="form-group">
			<label for="">Adresa</label>
			<textarea name="teacher_address" class="form-control" id="" cols="30" rows="6"></textarea>
		</div>
		<div class="form-group">
			<label for="">Kontakti</label>
			<input type="text" name="teacher_contact" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Fjalëkalimi</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" Value="Regjistro Mësuesin" class="btn btn-info" name="add_teacher_btn">
		</div>
	</div>
</form>