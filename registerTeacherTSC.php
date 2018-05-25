
<?php 
include 'header.php';
if (($_SESSION['username'] == 'admin') and ($_SESSION['userpass'] == 'admin')) {
	$_SESSION['authuser'] = 1;
} else {
	echo 'Sorry, but you don\'t have permission to view this page!';
	exit();
} ?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3" >
			<div id="alert"></div>
			<form method="post" action="processTeacherTSC.php"onsubmit="btnCheckFormClick()" name="form1" id="form">
	<h3>Register TSC Teacher</h3>
		
	<div class="form-group">
		<label for="sname">Surname:</label>
		<input type="text" id="sname" name="sname" placeholder="Enter Your Surname" class="form-control"/>
	</div>
	
	<div class="form-group">
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" placeholder="Enter Your First Name" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname"  placeholder="Enter Your Last Name" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="gender">Gender:</label>
		<select name="gender" class="form-control">
 			<option value="0" selected="selected">Select</option>
 			<option value="male">Male</option>
 			<option value="female">Female</option>
 		</select>
 	</div>

 	<div class="form-group">
 		<label for="dob">Date of Birth:</label>
		<input type="date" id="dob" name="dob" class="form-control"/>
	</div>

	<div class="form-group">
 		<label for="doemp">Date of Employment:</label>
		<input type="date" id="doemp" name="doemp" class="form-control"/>
	</div>
	
	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" placeholder="Enter Your Email Address" class="form-control"/>
	</div>
	
	<div class="form-group">
		<label for="phoneno">Phone Number:</label>
		<input type="number" id="phoneno" name="phoneno" placeholder="Enter Your Phone Number" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="specialization">Teaching Specialization:</label>
		<select name="specialization" class="form-control">
 			<option value="maths" selected="selected">Maths</option>
 			<option value="english">English</option>
 			<option value="kiswahili">Kiswahili</option>
 			<option value="chemistry">Chemistry</option>
 			<option value="physics">Physics</option>
 			<option value="biology">Biology</option>
 			<option value="geography">Geography</option>
 			<option value="history">History</option>
 			<option value="computer">Computer Studies</option>
 		</select>
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