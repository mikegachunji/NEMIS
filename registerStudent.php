
<?php 
include 'header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3" >
			<div id="alert"></div>
			<form method="post" action="processStudent.php"onsubmit="btnCheckFormClick()" name="form1" id="form">
	<h3>Register Student</h3>
	<div class="form-group">
		<label for="sname">Surname:</label>
		<input type="text" class="form-control" placeholder="Enter Surname" id="sname" name="sname"/>
	</div>
	
	<div class="form-group">
	<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" placeholder="Enter Your First Name" class="form-control" />
	</div>
	
	<div class="form-group">
	<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" placeholder="Enter Your Last Name" class="form-control"/>
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
	<label for="year">Year:</label>
		<select name="year" class="form-control">
 			<option value="0" selected="selected">Select</option>
 			<option value="8">Class 8</option>
 			<option value="4">Form 4</option>
 			<option value="tertiary">Tertiary</option>
 			<option value="ecde">ECDE</option>
 		</select>
 	</div>


 	
 	<div class="form-group">
	<label for="dob">Date of Birth:</label>
		<input type="date" id="dob" name="dob"class="form-control"/>
	</div>

	<div class="form-group">
	<label for="schupi">School UPI:</label>
		<input type="text" id="schupi" name="schupi" placeholder="Enter Your School UPI" class="form-control"/>
	</div>
	
	<div class="form-group">
		<input type="submit" class="btn  btn-primary form-control" name="submit" id="btn"value="submit"/>
	</div>
	
</form>

		</div>
	</div>
</div>

<script>
		var myForm = document.form1;
		
		function btnCheckFormClick(e) {

			var sname = myForm.sname;
			var fname = myForm.fname;
			var lname = myForm.lname;
			var gender = myForm.gender;
			var dob = myForm.dob; 
			var stupi = myForm.stupi;
 		      	
			
			if (sname.value == "" || fname.value == "" || lname.value == "" || gender.value == "" || dob.value == "" || stupi.value == "") {
				alert("Please complete the whole form");
			}

		}
		
		myForm.submit.addEventListener("click", btnCheckFormClick);
	</script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<?php
include "footer.php";
?>