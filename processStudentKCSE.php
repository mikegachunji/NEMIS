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
$chemistry = (isset($_POST['chemistry'])) ? $_POST['chemistry'] : '';
$physics = (isset($_POST['physics'])) ? $_POST['physics'] : '';
$biology = (isset($_POST['biology'])) ? $_POST['biology'] : '';
$geography = (isset($_POST['geography'])) ? $_POST['geography'] : '';
$history = (isset($_POST['history'])) ? $_POST['history'] : '';
$computer = (isset($_POST['computer'])) ? $_POST['computer'] : '';
$total = $maths + $english + $kiswahili + $chemistry + $physics + $biology + $geography + $history + $computer;



$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewKCSEResults.php';

if (!empty($stupi) && !empty($schupi) && !empty($maths) && !empty($english) && !empty($kiswahili) && !empty($chemistry) && !empty($physics) && !empty($biology) && !empty($geography) && !empty($history) && !empty($computer))  {

$sql = 'INSERT INTO kcseresult
			(sname, fname, lname, stupi, schupi, maths, english, kiswahili, chemistry, physics, biology, geography, history, computer, total)
		VALUES 
			("' . mysqli_real_escape_string($conn, $sname) . '","' . mysqli_real_escape_string($conn, $fname) . '","' . mysqli_real_escape_string($conn, $lname) . '","' . mysqli_real_escape_string($conn, $stupi) . '", "' . mysqli_real_escape_string($conn, $schupi) . '", "' . mysqli_real_escape_string($conn, $maths) . '", "' . mysqli_real_escape_string($conn, $english) . '","' . mysqli_real_escape_string($conn, $kiswahili) . '", "' . mysqli_real_escape_string($conn, $chemistry) . '", "' . mysqli_real_escape_string($conn, $physics) . '", "' . mysqli_real_escape_string($conn, $biology) . '", "' . mysqli_real_escape_string($conn, $geography) . '", "' . mysqli_real_escape_string($conn, $history) . '", "' . mysqli_real_escape_string($conn, $computer) . '", "' . mysqli_real_escape_string($conn, $total) . '")';


		if (mysqli_query($conn, $sql)) {
			echo "Student KCSE Result stored successfully<br>";
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