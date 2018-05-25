<?php
require_once 'db.inc.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

$tscno = (isset($_POST['tscno'])) ? $_POST['tscno'] : '';
$sname = (isset($_POST['sname'])) ? $_POST['sname'] : '';
$fname = (isset($_POST['fname'])) ? $_POST['fname'] : '';
$lname = (isset($_POST['lname'])) ? $_POST['lname'] : '';
$gender = (isset($_POST['gender'])) ? $_POST['gender'] : '';
$dob = (isset($_POST['dob'])) ? $_POST['dob'] : '';
$doemp = (isset($_POST['doemp'])) ? $_POST['doemp'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$phoneno = (isset($_POST['phoneno'])) ? $_POST['phoneno'] : '';
$specialization = (isset($_POST['specialization'])) ? $_POST['specialization'] : '';
$responsibilities = (isset($_POST['responsibilities'])) ? $_POST['responsibilities'] : '';
$schupi = (isset($_POST['schupi'])) ? $_POST['schupi'] : '';
$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewTeacher.php';

if (!empty($tscno) && !empty($sname) && !empty($fname) && !empty($lname) && !empty($gender) && !empty($dob) && !empty($dob) && !empty($email) && !empty($phoneno) && !empty($responsibilities) && !empty($schupi) && !empty($responsibilities))  {

$sql = 'INSERT INTO teachers
			(tscno, sname, fname, lname, gender, dob, doemp, email, phoneno, responsibilities, schupi, specialization)
		VALUES 
			("' . mysqli_real_escape_string($conn, $tscno) . '", "' . mysqli_real_escape_string($conn, $sname) . '", "' . mysqli_real_escape_string($conn, $fname) . '", "' . mysqli_real_escape_string($conn, $lname) . '", "' . mysqli_real_escape_string($conn, $gender) . '", "' . mysqli_real_escape_string($conn, $dob) . '", "' . mysqli_real_escape_string($conn, $doemp) . '","' . mysqli_real_escape_string($conn, $email) . '","' . mysqli_real_escape_string($conn, $phoneno) . '","' . mysqli_real_escape_string($conn, $responsibilities) . '", "' . mysqli_real_escape_string($conn, $schupi) . '" , "' . mysqli_real_escape_string($conn, $specialization) . '")';

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