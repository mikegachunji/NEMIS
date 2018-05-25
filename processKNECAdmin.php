<?php
include 'header.php';
require_once 'db.inc.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

$username = (isset($_POST['username'])) ? $_POST['username'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$password2 = (isset($_POST['password2'])) ? $_POST['password2'] : '';
$access_level = (isset($_POST['access_level'])) ? $_POST['access_level'] : '';
$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewKNECAdmin.php';

if (!empty($username) && !empty($password) && !empty($password2) && !empty($access_level)) {

	if($password != $password2) {
		header('Refresh: 0.1; URL=' . $redirect);
	} else {

	$sql = 'INSERT INTO knecadmin
			(username, password, access_level)
		VALUES 
			("' . mysqli_real_escape_string($conn, $username) . '", "' . mysqli_real_escape_string($conn, $password) . '", "' . mysqli_real_escape_string($conn, $access_level) . '")';

		if (mysqli_query($conn, $sql)) {
			echo "New KNEC Administrator registered successfully<br>";
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