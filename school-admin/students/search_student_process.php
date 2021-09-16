<?php
require_once '../../functions.php';

if(isset($_POST['search_value'])) {
	$value = $_POST['search_value'];

	$query = "SELECT * FROM students WHERE student_email LIKE '%$value%'";
	$result = mysqli_query($conn, $query);

	$output = '<table class="table table-centered table-bordered">
		<thead>
			<tr>
				<th>Emri</th>
				<th>Mbiemri</th>
				<th>Email</th>
				<th>Klasa</th>
				<th>Seksioni</th>
				<th>Grupi</th>
				<th>Nr</th>
				<th>Ndrysho</th>
				<th>Fshij</th>
			</tr>
		</thead>
			<tbody>';
	while($row = mysqli_fetch_assoc($result)) {
		$student_email = $row['student_email'];


		$id 					= $row['id'];
		$student_email 			= $row['student_email'];
		$student_class 			= $row['student_class'];
		$student_section 		= $row['student_section'];
		$student_group 			= $row['student_group'];
		$student_roll 			= $row['student_roll'];

		$query_2 = "SELECT * FROM user WHERE username='$student_email' LIMIT 1";
		$result_2 = mysqli_query($conn, $query_2);
		$row_2 = mysqli_fetch_assoc($result_2);

		$student_first_name = $row_2['user_firstname'];
		$student_last_name = $row_2['user_lastname'];

		$output .= "<tr>";
		$output .= "<td>$student_first_name</td>";
		$output .= "<td>$student_last_name</td>";
		$output .= "<td>$student_email</td>";
		$output .= "<td>$student_class</td>";
		$output .= "<td>$student_section</td>";
		$output .= "<td>$student_group</td>";
		$output .= "<td>$student_roll</td>";
		$output .= "<td><a class='btn btn-info' href='students.php?action=edit_student&s_id=$id'>Ndrysho</a></td>";
		$output .= "<td><a class='btn btn-danger' href='students.php?action=delete_student&s_id=$id'>Fshij</a></td>";
		$output .= "</tr>";

	}
	$output .="</tbody>";
	echo $output;
} else {
	echo "nothing";
}