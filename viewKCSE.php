<?php
include 'db.inc.php';
include 'header.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-4 offset-sm-4">
				<h3>KCSE Candidates</h3>
			</div>
<table class = "table">
	<thead>
	<tr>
		
		<tr><th>Student Name</th><th>Student UPI</th><th>Action</th></tr>
	</tr>
</thead>
<tbody>
<?php
$sql = 'SELECT * FROM students WHERE year = 4';
$result = mysqli_query($conn, $sql);

$odd = true;
while ($row = mysqli_fetch_assoc($result)) {
	echo ($odd == true) ? '<tr class="odd_row">' : '<tr class="even_row">';
	$odd = !$odd;
	echo '<td>';
	echo $row['sname'] . " " . $row['fname'] . " " . $row['lname'];
	echo '</td><td>';
	echo $row['stupi'];
	echo '</td><td>';
	echo ' <a href="inputKCSE.php?action=edit&id=' . $row['student_id'] . '">[INPUT MARKS]</a>';
	echo ' <a href="uploadcertificate.php?id=' . $row['student_id'] . '">[UPLOAD CERTIFICATE]</a>';
	echo '</td></tr>';
}
?>
</tbody>
</table>
</div>
</div>
</div>
