<?php
require_once 'db.inc.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);


$sname = (isset($_POST['sname'])) ? $_POST['sname'] : '';
$fname = (isset($_POST['fname'])) ? $_POST['fname'] : '';
$lname = (isset($_POST['lname'])) ? $_POST['lname'] : '';
$stupi = (isset($_POST['stupi'])) ? $_POST['stupi'] : '';
$schupi = (isset($_POST['schupi'])) ? $_POST['schupi'] : '';
$maths = (isset($_POST['maths'])) ? $_POST['maths'] : '';
$english = (isset($_POST['english'])) ? $_POST['english'] : '';
$kiswahili = (isset($_POST['kiswahili'])) ? $_POST['kiswahili'] : '';
$science = (isset($_POST['science'])) ? $_POST['science'] : '';
$socialstudies = (isset($_POST['socialstudies'])) ? $_POST['socialstudies'] : '';
$total = $maths + $english + $kiswahili + $science + $socialstudies;

$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewStudentKCPEResult.php';

if (!empty($stupi) && !empty($schupi) && !empty($maths) && !empty($english) && !empty($kiswahili) && !empty($science) && !empty($socialstudies) && !empty($sname) && !empty($fname) && !empty($lname))  {

$sql = 'INSERT INTO kcperesult
			(stupi, schupi, maths, english, kiswahili, science, socialstudies, total, sname, fname, lname)
		VALUES 
			("' . mysqli_real_escape_string($conn, $stupi) . '", "' . mysqli_real_escape_string($conn, $schupi) . '", "' . mysqli_real_escape_string($conn, $maths) . '", "' . mysqli_real_escape_string($conn, $english) . '","' . mysqli_real_escape_string($conn, $kiswahili) . '", "' . mysqli_real_escape_string($conn, $science) . '", "' . mysqli_real_escape_string($conn, $socialstudies) . '", "' . mysqli_real_escape_string($conn, $total) . '", "' . mysqli_real_escape_string($conn, $sname) . '", "' . mysqli_real_escape_string($conn, $fname) . '", "' . mysqli_real_escape_string($conn, $lname) . '")';


		if (mysqli_query($conn, $sql)) {
			echo "Student KCPE Result stored successfully<br>";
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