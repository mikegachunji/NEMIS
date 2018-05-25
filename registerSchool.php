<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register School</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/background.css">
</head>
<body>
<?php 
include 'header.php'; 
if (($_SESSION['username'] == 'admin') and ($_SESSION['userpass'] == 'admin')) {
	$_SESSION['authuser'] = 1;
} else {
	echo 'Sorry, but you don\'t have permission to view this page!';
	exit();
}
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3" >
			<div id="alert"></div>
			<form method="post" action="processSchool1.php"onsubmit="btnCheckFormClick()" name="form1" id="form">
	<h3>Register School</h3>
	
	<div class="form-group">
		<label for="name">Enter School Name:</label>
		<input type="text" class="form-control" placeholder="Enter School Name" id="name" name="name"/>
	</div>
	
	<div class="form-group">
		<label for="category">Choose School Category:</label>
		<select name="category" class="form-control">
 			<option value="0" selected="selected">Select</option>
 			<option value="ecde">ECDE</option>
 			<option value="primary">Primary</option>
 			<option value="secondary">Secondary</option>
 			<option value="tertiary">Tertiary</option>
 		</select>
 	</div>		
	<div class="form-group">
		<input type="submit" class="btn  btn-primary form-control" name="submit" id="btn"value="submit"/>
	</div>
</form>

<script>
		var myForm = document.form1;

		function btnCheckFormClick(e) {
			var name = myForm.name;
			var category = myForm.category;
			
			if (name.value == "" || category.value == "") {
				alert("Please complete the whole form");
			}			
		}
		
		myForm.submit.addEventListener("click", btnCheckFormClick);
	</script>
<?php
include "footer.php";
?>