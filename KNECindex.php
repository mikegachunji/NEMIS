<!DOCTYPE html>
<html lang="en">
<head>
	<title>KNEC Homepage</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/background.css">
</head>
<body>

<?php 
include 'header.php';

$sql = 'SELECT * FROM schooldetails';
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">


<a href="viewSchoolKNEC.php?action=edit&id=' . $row['schupi'] . '" type="button" class="btn btn-primary btn-lg btn-block">View Schools</a>

<a href="viewKCPE.php" type="button" class="btn btn-danger btn-lg btn-block">View KCPE Candidates</a>

<a href="viewKCSE.php" type="button" class="btn btn-success btn-lg btn-block">View KCSE Candidates</a>

<a href="viewKCPEResults.php" type="button" class="btn btn-warning btn-lg btn-block">View KCPE Results</a>

<a href="viewKCSEResults.php" type="button" class="btn secondary btn-lg btn-block">View KCSE Results</a>

<a href="viewpolicy.php" type="button" class="btn btn-success btn-lg btn-block">View MOE Policy Documents</a>
			</div>
		</div>
	</div>


<?php
include "footer.php";
?>