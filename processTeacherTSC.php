<?php
require_once 'db.inc.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

$sname = (isset($_POST['sname'])) ? $_POST['sname'] : '';
$fname = (isset($_POST['fname'])) ? $_POST['fname'] : '';
$lname = (isset($_POST['lname'])) ? $_POST['lname'] : '';
$gender = (isset($_POST['gender'])) ? $_POST['gender'] : '';
$dob = (isset($_POST['dob'])) ? $_POST['dob'] : '';
$doemp = (isset($_POST['doemp'])) ? $_POST['doemp'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$phoneno = (isset($_POST['phoneno'])) ? $_POST['phoneno'] : '';
$specialization = (isset($_POST['specialization'])) ? $_POST['specialization'] : '';
$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewTeacherTSC.php';

if (!empty($sname) && !empty($fname) && !empty($lname) && !empty($gender) && !empty($dob) && !empty($doemp) && !empty($email) && !empty($phoneno) && !empty($specialization))  {

$sql = 'INSERT INTO tsc
			(sname, fname, lname, gender, dob, doemp, email, phoneno, specialization)
		VALUES 
			("' . mysqli_real_escape_string($conn, $sname) . '", "' . mysqli_real_escape_string($conn, $fname) . '", "' . mysqli_real_escape_string($conn, $lname) . '", "' . mysqli_real_escape_string($conn, $gender) . '", "' . mysqli_real_escape_string($conn, $dob) . '", "' . mysqli_real_escape_string($conn, $doemp) . '","' . mysqli_real_escape_string($conn, $email) . '","' . mysqli_real_escape_string($conn, $phoneno) . '","' . mysqli_real_escape_string($conn, $specialization) . '")';

		if (mysqli_query($conn, $sql)) {
			echo "New Teacher registered successfully<br>";
			header('Refresh: 3; URL=' . $redirect);
			echo '<p>You will be redirected to your original page request.</p>';
			echo '<p>If your browser doesn\'t redirect you properly ' . 'automatically, <a href="' . $redirect . '">click here</a>.</p>';
	
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
else {
	header('Refresh: 0.1; URL=' . $redirect);	
}
mysqli_close($conn);
?>