<?php
require_once 'db.inc.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

$username = (isset($_POST['username'])) ? $_POST['username'] : '';
$schupi = (isset($_POST['schupi'])) ? $_POST['schupi'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$password2 = (isset($_POST['password2'])) ? $_POST['password2'] : '';
$school_id = (isset($_POST['school_id'])) ? $_POST['school_id'] : '';
$access_level = (isset($_POST['access_level'])) ? $_POST['access_level'] : '';
$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewSchoolAdmin.php';

if (!empty($username) && !empty($schupi) && !empty($password) && !empty($password2) && !empty($access_level) && !empty($school_id)) {

	if($password != $password2) {
		header('Refresh: 0.1; URL=' . $redirect);
	} else {

	$sql = 'INSERT INTO schooladmins
			(username, schupi, password, access_level, school_id)
		VALUES 
			("' . mysqli_real_escape_string($conn, $username) . '", "' . mysqli_real_escape_string($conn, $schupi) . '", "' . mysqli_real_escape_string($conn, $password) . '", "' . mysqli_real_escape_string($conn, $access_level) . '", "' . mysqli_real_escape_string($conn, $school_id) . '")';

		if (mysqli_query($conn, $sql)) {
			echo "New SchoolAdmin registered successfully<br>";
			header('Refresh: 3; URL=' . $redirect);
			echo '<p>You will be redirected to your original page request.</p>';
			echo '<p>If your browser doesn\'t redirect you properly ' . 'automatically, <a href="' . $redirect . '">click here</a>.</p>';
	
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}
else {
	header('Refresh: 0.1; URL=' . $redirect);	
}
mysqli_close($conn);
?>