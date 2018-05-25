
<?php 
include 'header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3" >
			<div id="alert"></div>
			<form method="post" action="processSchoolAdmin.php"onsubmit="btnCheckFormClick()" name="form1" id="form">
	<h1>Register School Admin</h1>

	<div class="form-group">
		<label for="username">Username:</label>
		<input type="text" class="form-control" placeholder="Enter Username" id="username" name="username"/>
	</div>

	<div class="form-group">
		<label for="schupi">School UPI:</label>
		<input type="text" class="form-control" placeholder="Enter School UPI" id="schupi" name="schupi"/>
	</div>

	<div class="form-group">
		<label for="password">Password:</label>
		<input type="password" class="form-control" placeholder="Enter Password" id="password" name="password"/>
	</div>

	<div class="form-group">
		<label for="password2">Confirm Password:</label>
		<input type="password" class="form-control" placeholder="Confirm Password" id="password2" name="password2"/>
	</div>

	<div class="form-group">
		<label for="school_id">School ID:</label>
		<input type="number" class="form-control" placeholder="Enter School ID" id="school_id" name="school_id"/>
	</div>

	<div class="form-group">
		<label for="access_level">Access Level:</label>
		<select name="access_level" class="form-control">
 			<option value="0" selected="selected">Select</option>
 			<option value="2">2</option>
 			<option value="3">3</option>
 		</select>
	</div>


	<div class="form-group">
		<input type="submit" class="btn  btn-primary form-control" name="submit" id="btn"value="submit"/>
	</div>
</form>

<script>
		var myForm = document.form1;

		function btnCheckFormClick(e) {
			var username = myForm.username;
			var schupi = myForm.schupi;
			var password1 = myForm.password1;
			var password2 = myForm.password2;
			
			if (username.value == "" || schupi.value == "" || password1.value == "" || password2.value == "") {
				alert("Please complete the whole form");
			}

			if (password1.value != password2.value) {
				alert("Your passwords do not match");
			}			
		}
		
		myForm.submit.addEventListener("click", btnCheckFormClick);
	</script>
<?php
include "footer.php";
?>