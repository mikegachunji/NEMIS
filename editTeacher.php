<?php
include 'db.inc.php';
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

$sql = 'SELECT * FROM teachers where teacher_id = ' . $_GET['id'];
	$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
	extract(mysqli_fetch_assoc($result));


?>

<?php include 'header.php';
$get="updateTeacher.php?id=". $_GET['id'];
 ?>
 <div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3" >
			<div id="alert"></div>
			<form method="post" action="<?php echo $get;?>"onsubmit="btnCheckFormClick()" name="form1" id="form">
	
	<h3>Edit Teacher Information</h3>
	
	<div class="form-group">
		<label for="tscno">TSC Number:</label></td>
		<input type="text" id="tscno" name="tscno" value="<?php echo $tscno; ?>" class="form-control" />
	</div>

	<div class="form-group">
		<label for="sname">Surname:</label>
		<input type="text" id="sname" name="sname" value="<?php echo $sname; ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="lname">First Name:</label>
		<input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="dob">Date of Birth:</label>
		<input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="email">Email:</label>
		<input type="text" id="email" name="email" value="<?php echo $email; ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="phoneno">Last Name:</label>
		<input type="text" id="phoneno" name="phoneno" value="<?php echo $phoneno; ?>" class="form-control"/>
	</div>



	<div class="form-group">
		<label for="responsibilities">Responsibilities:</label>
		<input type="text" id="responsibilities" name="responsibilities" value="<?php echo $responsibilities; ?>" class="form-control"/>
	</div>


	<div class="form-group">
		<input type="submit" class="btn  btn-primary form-control" name="submit" id="btn"value="submit"/>
	</div>
	
</form>

