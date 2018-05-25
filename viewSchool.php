<?php
include 'db.inc.php';
include 'header.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
?>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<a href="registerSchool.php?action=add" type="button" class="btn btn-primary btn-lg btn-block">Add New School</a>
				<div class="col-sm-4 offset-sm-4">
				<h3>Schools</h3>
			</div>
<table class="table">
	<thead>
	<tr>
		<tr><th>School Name</th><th>School UPI</th><th>Action</th></tr>
	</tr>
</thead>
<tbody>
<?php
$sql = 'SELECT * FROM schooldetails';
$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

$odd = true;
while ($row = mysqli_fetch_assoc($result)) {
	echo ($odd == true) ? '<tr class="odd_row">' : '<tr class="even_row">';
	$odd = !$odd;
	echo '<td>';
	echo $row['name'];
	echo '</td><td>';
	echo $row['schupi'];
	echo '</td><td>';
	
	echo ' <a href="deleteSchool.php?type=movie&id=' . $row['schupi'] . '">[DELETE]</a>';
	echo '</td></tr>';
}
?>
</tbody>
</table>
</div>
</div>
</div>
