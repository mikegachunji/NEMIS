<?php
include 'db.inc.php';
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

$sql = 'SELECT * FROM students where student_id = ' . $_GET['id'];
	$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
	extract(mysqli_fetch_assoc($result));


?>

<?php include 'header.php';
$get="updateStudent.php?id=". $_GET['id'];
 ?>
 <div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3" >
			<div id="alert"></div>
			<form method="post" action="<?php echo $get;?>"onsubmit="btnCheckFormClick()" name="form1" id="form">
	
	<h3>Edit Student Information</h3>
	
	<div class="form-group">
		<label for="sname">Surname:</label></td>
		<input type="text" id="sname" name="sname" value="<?php echo $sname; ?>" class="form-control" />
	</div>

	<div class="form-group">
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="year">Year:</label>
		<input type="text" id="year" name="year" value="<?php echo $year; ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="schupi">School UPI:</label>
		<input type="text" id="schupi" name="schupi" value="<?php echo $schupi; ?>" class="form-control"/>
	</div>


	<div class="form-group">
		<label for="dob">Date of Birth:</label>
		<input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<input type="submit" class="btn  btn-primary form-control" name="submit" id="btn"value="submit"/>
	</div>
	
</form>

