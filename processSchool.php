<?php
require_once 'db.inc.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);



$name = (isset($_POST['name'])) ? $_POST['name'] : '';
$category = (isset($_POST['category'])) ? $_POST['category'] : '';
$county = (isset($_POST['county'])) ? $_POST['county'] : '';
$classes = (isset($_POST['classes'])) ? $_POST['classes'] : '';
$playingfields = (isset($_POST['playingfields'])) ? $_POST['playingfields'] : '';
$halls = (isset($_POST['halls'])) ? $_POST['halls'] : '';
$dormitories = (isset($_POST['dormitories'])) ? $_POST['dormitories'] : '';
$buses = (isset($_POST['buses'])) ? $_POST['buses'] : '';
$farmingland = (isset($_POST['farmingland'])) ? $_POST['farmingland'] : '';
$sciencelabs = (isset($_POST['sciencelabs'])) ? $_POST['sciencelabs'] : '';
$bookratio = (isset($_POST['bookratio'])) ? $_POST['bookratio'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$telephone1 = (isset($_POST['telephone1'])) ? $_POST['telephone1'] : '';
$telephone2 = (isset($_POST['telephone2'])) ? $_POST['telephone2'] : '';
$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewSchool.php';


if (!empty($name) && !empty($category) && !empty($county) && !empty($classes) && !empty($playingfields) && !empty($halls) && !empty($dormitories) && !empty($buses) && !empty($farmingland) && !empty($sciencelabs) && !empty($bookratio) && !empty($email) && !empty($telephone1) && !empty($telephone2))  {

$sql = 'INSERT INTO schooldetails
			(name, category, county, classes, playingfields, halls, dormitories, buses, farmingland, sciencelabs, bookratio, email, telephone1, telephone2)
		VALUES 
			("' . mysqli_real_escape_string($conn, $name) . '", "' . mysqli_real_escape_string($conn, $category) . '", "' . mysqli_real_escape_string($conn, $county) . '", "' . mysqli_real_escape_string($conn, $classes) . '", "' . mysqli_real_escape_string($conn, $playingfields) . '", "' . mysqli_real_escape_string($conn, $halls) . '", "' . mysqli_real_escape_string($conn, $dormitories) . '", "' . mysqli_real_escape_string($conn, $buses) . '", "' . mysqli_real_escape_string($conn, $farmingland) . '", "' . mysqli_real_escape_string($conn, $sciencelabs) . '", "' . mysqli_real_escape_string($conn, $bookratio) . '", "' . mysqli_real_escape_string($conn, $email) . '", "' . mysqli_real_escape_string($conn, $telephone1) . '", "' . mysqli_real_escape_string($conn, $telephone2) . '")';

		if (mysqli_query($conn, $sql)) {
			echo "School Details edited successfully<br>";
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