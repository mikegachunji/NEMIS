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
			<div class="col-sm-6 offset-sm-3">

<a href="viewSchool.php" type="button" class="btn btn-primary btn-lg btn-block">Schools</a>

<a href="viewStudent.php" type="button" class="btn btn-danger btn-lg btn-block">Students</a>

<a href="viewTeacher.php" type="button" class="btn btn-success btn-lg btn-block">Teachers</a>

<a href="viewTSCTeacher.php" type="button" class="btn btn-success btn-lg btn-block">View TSC Teachers</a>

<a href="viewSchoolAdmin.php" type="button" class="btn btn-warning btn-lg btn-block">School Admins</a>

<a href="viewKNECAdmin.php" type="button" class="btn btn-warning btn-lg btn-block">KNEC</a>

<a href="registerTeacherTSC.php" type="button" class="btn btn-primary btn-lg btn-block">Register TSC Teacher</a>

<a href="uploadpolicy.php" type="button" class="btn btn-danger btn-lg btn-block">Upload Policy Documents</a>

<a href="viewpolicy.php" type="button" class="btn btn-success btn-lg btn-block">View Policy Documents</a>

<a href="allocateresource.php" type="button" class="btn btn-danger btn-lg btn-block">Allocate Resources</a>

			</div>
		</div>
	</div>

	
