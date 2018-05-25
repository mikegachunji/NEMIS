<?php
include 'db.inc.php';
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

$sql = 'SELECT * FROM tsc where tscno = ' . $_GET['id'];
	$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
	extract(mysqli_fetch_assoc($result));


?>

<?php 
include 'header.php';
$schupi = $_SESSION['schupi'];
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3" >
			<div id="alert"></div>
			<form method="post" action="processTeacher.php"onsubmit="btnCheckFormClick()" name="form1" id="form">
	<h3>Register Teacher</h3>
	<div class="form-group">
		<label for="tscno">TSC Number:</label>
		<input type="number" class="form-control" value="<?php echo $tscno; ?>" id="tscno" name="tscno"/>
	</div>
	
	<div class="form-group">
		<label for="sname">Surname:</label>
		<input type="text" id="sname" name="sname" value="<?php echo $sname; ?>" class="form-control"/>
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
		<label for="gender">Gender:</label>
		<input type="text" id="gender" name="gender" value="<?php echo $gender; ?>" class="form-control"/>
 	</div>

 	<div class="form-group">
 		<label for="dob">Date of Birth:</label>
		<input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" class="form-control"/>
	</div>

	<div class="form-group">
 		<label for="doemp">Date of Employment:</label>
		<input type="date" id="doemp" name="doemp" value="<?php echo $doemp; ?>" class="form-control"/>
	</div>
	
	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="<?php echo $email; ?>" class="form-control"/>
	</div>
	
	<div class="form-group">
		<label for="phoneno">Phone Number:</label>
		<input type="number" id="phoneno" name="phoneno" value="<?php echo $phoneno; ?>" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="specialization">Specialization:</label>
		<input type="text" id="specialization" name="specialization" value="<?php echo $specialization; ?>" class="form-control"/>
	</div>



	<div class="form-group">
		<label for="responsibilities">Responsibilities:</label>
		<select name="responsibilities" class="form-control">
 			<option value="0" selected="selected">None</option>
 			<option value="headteacher">Head Teacher</option>
 			<option value="deputyheadteacher">Deputy Head Teacher</option>
 			<option value="hod">Head of Department</option>
 			<option value="seniorteacher">Senior Teacher</option>
 		</select>
 	</div>

 	<div class="form-group">
		<label for="schupi">School UPI:</label>
		<input type="text" id="schupi" name="schupi" value="<?php echo $schupi;?>" class="form-control"/>
	</div>

	
	
	<div class="form-group">
		<input type="submit" class="btn  btn-primary form-control" name="submit" id="btn"value="submit"/>
	</div>
	</form>

<script>
		var myForm = document.form1;

		function btnCheckFormClick(e) {
			var tscno = myForm.tscno;
			var sname = myForm.sname;
			var fname = myForm.fname;
			var lname = myForm.lname;
			var gender = myForm.gender;
			var dob = myForm.dob;
			var email = myForm.email;
			var phoneno = myForm.phoneno;
			var nid = myForm.nid;
			var schupi = myForm.schupi;

			if (tscno.value == "" || sname.value == "" || fname.value == "" || lname.value == "" || gender.value == "" || dob.value == "" || email.value == "" || phoneno.value == "" || nid.value == "" || schupi.value == "") {
				alert("Please complete the whole form");
			}			
		}
		
		myForm.submit.addEventListener("click", btnCheckFormClick);
	</script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<?php
include "footer.php";
?>