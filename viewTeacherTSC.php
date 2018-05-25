<?php
include 'db.inc.php';
include 'header.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-4 offset-sm-4">
				<h3>List of TSC Registered Teachers</h3>
			</div>
<table class= "table">
	<thead>
	<tr>
		<th>Teachers</th>
		<tr><th>Teacher Name</th><th>TSC Number</th><th>Action</th></tr>
	</tr>
</thead>
<tbody>
<?php
$schupi = $_SESSION['schupi'];
$sql = "SELECT * FROM tsc ";
$result = mysqli_query($conn, $sql);

$odd = true;
while ($row = mysqli_fetch_assoc($result)) {
	echo ($odd == true) ? '<tr class="odd_row">' : '<tr class="even_row">';
	$odd = !$odd;
	echo '<td>';
	echo $row['sname'] . " " . $row['fname'] . " " . $row['lname'];
	echo '</td><td>';
	echo $row['tscno'];
	echo '</td><td>';
	echo ' <a href="registerTeacherSA.php?action=edit&id=' . $row['tscno'] . '">[ADD TEACHER TO SCHOOL]</a>';
	echo '</td></tr>';
}
?>
</tbody>
</table>
</div>
</div>
</div>