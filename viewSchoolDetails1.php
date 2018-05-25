<?php
include 'db.inc.php';
include 'header.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
?>

	<style type="text/css">
		th { background-color: #FFF; }
		.odd_row { background-color: #EEE; }
		.even_row { background-color: #FFF; }		
	</style>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				<div class="col-sm-4 offset-sm-4">
				<h3>School Details</h3>
			</div>
<table class= "table">
	<thead>
	<tr>
		<th>Teachers</th>
		<tr><th>School Name</th><th>Category</th><th>County</th><th>Classes</th><th>Playing Fields</th><th>Halls</th><th>Dormitories</th><th>Buses</th><th>Farming Land</th><th>Science Labs</th><th>Book Ratio</th><th>Email</th><th>Telephone</th></tr>
	</tr>
</thead>
<tbody>
<?php
$schupi = $_SESSION['schupi'];
$sql = "SELECT * FROM schooldetails WHERE schupi = '$schupi'";
$result = mysqli_query($conn, $sql);

$odd = true;
while ($row = mysqli_fetch_assoc($result)) {
	echo ($odd == true) ? '<tr class="odd_row">' : '<tr class="even_row">';
	$odd = !$odd;
	echo '<td>';
	echo $row['name'];
	echo '</td><td>';
	echo $row['category'];
	echo '</td><td>';
	echo $row['county'];
	echo '</td><td>';
	echo $row['classes'];
	echo '</td><td>';
	echo $row['playingfields'];
	echo '</td><td>';
	echo $row['halls'];
	echo '</td><td>';
	echo $row['dormitories'];
	echo '</td><td>';
	echo $row['buses'];
	echo '</td><td>';
	echo $row['farmingland'];
	echo '</td><td>';
	echo $row['sciencelabs'];
	echo '</td><td>';
	echo $row['bookratio'];
	echo '</td><td>';
	echo $row['email'];
	echo '</td><td>';
	echo $row['telephone1'];
	echo '</td><td>';
	echo '</td></tr>';
}
?>
</tbody>
</table>
</div>
</div>
</div>