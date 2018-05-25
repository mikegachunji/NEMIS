<?php
session_start();
include 'db.inc.php';
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

$sname = (isset($_POST['sname'])) ? $_POST['sname'] : '';
$fname = (isset($_POST['fname'])) ? $_POST['fname'] : '';
$lname = (isset($_POST['lname'])) ? $_POST['lname'] : '';
$dob = (isset($_POST['dob'])) ? $_POST['dob'] : '';
$year = (isset($_POST['year'])) ? $_POST['year'] : '';
$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewStudent.php';


if ($_POST['submit']){

	if (!empty($sname) && !empty($fname) && !empty($lname) && !empty($dob))
	{
		$sql = 'UPDATE students SET sname = "' . mysqli_real_escape_string($conn, $sname) . '", year = "' . mysqli_real_escape_string($conn, $year) . '",
					fname = "' . mysqli_real_escape_string($conn, $fname) . '", lname = "' . mysqli_real_escape_string($conn, $lname) . '", dob = "' . mysqli_real_escape_string($conn, $dob) . '"
					WHERE 
						student_id = ' . $_GET['id'];


			if (mysqli_query($conn, $sql)) {
			echo "Record updated successfully<br>";
			header('Refresh: 2; URL=' . $redirect);
			echo '<p>You will be redirected to your original page request.</p>';
			echo '<p>If your browser doesn\'t redirect you properly ' . 'automatically, <a href="' . $redirect . '">click here</a>.</p>';
	
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}
?>