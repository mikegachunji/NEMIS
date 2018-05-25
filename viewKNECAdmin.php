<?php
include 'db.inc.php';
include 'header.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<a href="registerKNECAdmin.php?action=add" type="button" class="btn btn-primary btn-lg btn-block">Add New KNEC Admin</a>
				<div class="col-sm-4 offset-sm-4">
				<h3>KNEC Admins</h3>
			</div>
<table class="table">
	<thead>
	<tr>
		<tr><th>KNEC Admin Name</th><th>School UPI</th><th>Action</th></tr>
	</tr>
</thead>
<tbody>
<?php
$sql = 'SELECT * FROM knecadmin';
$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

$odd = true;
while ($row = mysqli_fetch_assoc($result)) {
	echo ($odd == true) ? '<tr class="odd_row">' : '<tr class="even_row">';
	$odd = !$odd;
	echo '<td>';
	echo $row['username'];
	echo '</td><td>';
	echo $row['password'];
	echo '</td><td>';
	echo ' <a href="editKNECAdmin.php?action=edit&id=' . $row['knec_admin_id'] . '">[EDIT]</a>';
	echo ' <a href="deleteKNECAdmin.php?type=movie&id=' . $row['knec_admin_id'] . '">[DELETE]</a>';
	echo '</td></tr>';
}
?>
</tbody>
</table>
</div>
</div>
</div>
