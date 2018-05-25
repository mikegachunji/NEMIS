<?php
include 'db.inc.php';
include 'header.php';
if (($_SESSION['username'] == 'admin') and ($_SESSION['userpass'] == 'admin')) {
	$_SESSION['authuser'] = 1;
} else {
	echo 'Sorry, but you don\'t have permission to view this page!';
	exit();
}

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-4 offset-sm-4">
				<h3>List of School with Inadequate Resources</h3>
			</div>
<table class = "table">
	<thead>
	<tr>
		
		<tr><th>School Name</th><th>Book Ratio</th></tr>
	</tr>
</thead>
<tbody>
<?php
$sql = 'SELECT * FROM schooldetails WHERE bookratio != "1:1"';
$result = mysqli_query($conn, $sql);

$odd = true;
while ($row = mysqli_fetch_assoc($result)) {
	echo ($odd == true) ? '<tr class="odd_row">' : '<tr class="even_row">';
	$odd = !$odd;
	echo '<td>';
	echo $row['name'];
	echo '</td><td>';
	echo $row['bookratio'];
	echo '</td><td>';
	
	echo '</td></tr>';
}
?>
</tbody>
</table>
</div>
</div>
</div>
