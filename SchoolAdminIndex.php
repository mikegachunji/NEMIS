<!DOCTYPE html>
<html lang="en">
<head>
	<title>School Admin Homepage</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/background.css">
</head>
<body>

<?php 
include 'header.php';
$school_id = $_SESSION['school_id'];
$get="editSchoolDetails1.php?id='$school_id'";

$sql = 'SELECT * FROM schooldetails';

?>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">


<a href="viewSchoolDetails1.php?action=edit&id=' . $row['school_id'] . '" type="button" class="btn btn-primary btn-lg btn-block">View School Details</a>

<a href="<?php echo $get;?>" type="button" class="btn btn-danger btn-lg btn-block">Edit School Details</a>

<a href="viewTeacherDetails.php" type="button" class="btn btn-success btn-lg btn-block">View Teachers</a>

<a href="viewStudentDetails.php" type="button" class="btn btn-warning btn-lg btn-block">View Students</a>

<a href="viewTeacherTSC.php" type="button" class="btn secondary btn-lg btn-block">Add New Teacher</a>

<a href="registerStudentSA.php" type="button" class="btn btn-info btn-lg btn-block">Add New Student</a>

<a href="viewpolicy.php" type="button" class="btn btn-success btn-lg btn-block">View MOE Policy Documents</a>
			</div>
		</div>
	</div>

	
<?php
include "footer.php";
?>