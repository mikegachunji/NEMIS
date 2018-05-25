<?php
require_once 'db.inc.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

function randomString($len, $charSet) {
        $randomString = '';
      
        $charSetLength = strlen($charSet);
        for ($i = 0; $i < $len; $i++) {
            $randomString .= $charSet[rand(0, $charSetLength - 1)];
        }
       return $randomString;
}

$sname = (isset($_POST['sname'])) ? $_POST['sname'] : '';
$fname = (isset($_POST['fname'])) ? $_POST['fname'] : '';
$lname = (isset($_POST['lname'])) ? $_POST['lname'] : '';
$gender = (isset($_POST['gender'])) ? $_POST['gender'] : '';
$year = (isset($_POST['year'])) ? $_POST['year'] : '';
$dob = (isset($_POST['dob'])) ? $_POST['dob'] : '';
$schupi = (isset($_POST['schupi'])) ? $_POST['schupi'] : '';
$preHyphen = randomString(2, 'BCDFGHJKLMNPQRSVWXYZ');
$postHyphen = randomString(2, '0123456789');
$mid =randomString(2, 'BCDFGHJKLMNPQRSVWXYZ');
$stupi= $preHyphen."-".$mid."-".$postHyphen;     	

$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewStudentDetails.php';

if (!empty($sname) && !empty($fname) && !empty($lname) && !empty($gender) && !empty($dob) && !empty($stupi) && !empty($schupi))  {

$sql = 'INSERT INTO students
			(sname, fname, lname, gender, year, dob, stupi, schupi)
		VALUES 
			("' . mysqli_real_escape_string($conn, $sname) . '", "' . mysqli_real_escape_string($conn, $fname) . '", "' . mysqli_real_escape_string($conn, $lname) . '", "' . mysqli_real_escape_string($conn, $gender) . '","' . mysqli_real_escape_string($conn, $year) . '", "' . mysqli_real_escape_string($conn, $dob) . '", "' . mysqli_real_escape_string($conn, $stupi) . '", "' . mysqli_real_escape_string($conn, $schupi) . '")';


		if (mysqli_query($conn, $sql)) {
			echo "New Student registered successfully<br>";
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