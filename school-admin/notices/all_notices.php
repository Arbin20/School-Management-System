<table class="table table-centered table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Titulli</th>
			<th>Përshkrimi</th>
			<th>Data</th>
			<th>Ndrysho</th>
			<th>Fshij</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$query = "SELECT * FROM notice";
			$result = mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)) {
				$id = $row['id'];
				$notice_title = $row['notice_title'];
				$notice_desc = $row['notice_desc'];
				$notice_date = $row['notice_date'];

				echo "<tr>";
					echo "<td>$id</td>";
					echo "<td>$notice_title</td>";
					echo "<td>$notice_desc</td>";
					echo "<td width=8%>$notice_date</td>";
					echo "<td><a class='btn btn-info' href='notices.php?action=edit_notice&n_id=$id'>Ndrysho</a></td>";
					echo "<td><a class='btn btn-danger' href='notices.php?action=delete_notice&n_id=$id'>Fshij</a></td>";
				echo "</tr>";
			}

		?>
	</tbody>
</table>