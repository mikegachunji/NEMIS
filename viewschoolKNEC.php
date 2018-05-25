<?php
include 'db.inc.php';
include 'header.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-4 offset-sm-4">
				<h3>Schools</h3>
			</div>
<table class="table">
	<thead>
	<tr>
		<tr><th>School Name</th><th>School UPI</th></tr>
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
	echo '</td></tr>';
}
?>
</tbody>
</table>
</div>
</div>
</div>
