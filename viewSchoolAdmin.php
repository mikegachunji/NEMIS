<?php
include 'db.inc.php';
include 'header.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
?>

	<style type="text/css">
		th { background-color: #EEE; }
		.odd_row { background-color: #EEE; }
		.even_row { background-color: #FFF; }		
	</style>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<a href="registerSchoolAdmin.php?action=add" type="button" class="btn btn-primary btn-lg btn-block">Add New School Admin</a>
				<div class="col-sm-4 offset-sm-4">
				<h3>School Admins</h3>
			</div>
<table class="table">
	<thead>
	<tr>
		<tr><th>School Admin Name</th><th>School UPI</th><th>Action</th></tr>
	</tr>
</thead>
<tbody>
<?php
$sql = 'SELECT * FROM schooladmins';
$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

$odd = true;
while ($row = mysqli_fetch_assoc($result)) {
	echo ($odd == true) ? '<tr class="odd_row">' : '<tr class="even_row">';
	$odd = !$odd;
	echo '<td>';
	echo $row['username'];
	echo '</td><td>';
	echo $row['schupi'];
	echo '</td><td>';
	echo ' <a href="editSchoolAdmin.php?action=edit&id=' . $row['school_admin_id'] . '">[EDIT]</a>';
	echo ' <a href="deleteSchool.php?type=movie&id=' . $row['school_admin_id'] . '">[DELETE]</a>';
	echo '</td></tr>';
}
?>
</tbody>
</table>
</div>
</div>
</div>
