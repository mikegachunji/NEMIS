<?php
session_start();
include 'db.inc.php';
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
$schupi = $_SESSION['schupi'];
$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewSchoolDetails1.php';



if ($_POST['submit']){

		$sql = 'UPDATE schooldetails SET name = "' . mysqli_real_escape_string($conn, $name) . '", category = "' . mysqli_real_escape_string($conn, $category) . '",
					county = "' . mysqli_real_escape_string($conn, $county) . '", classes = "' . mysqli_real_escape_string($conn, $classes) . '", playingfields = "' . mysqli_real_escape_string($conn, $playingfields) . '", halls = "' . mysqli_real_escape_string($conn, $halls) . '", dormitories = "' . mysqli_real_escape_string($conn, $dormitories) . '", buses = "' . mysqli_real_escape_string($conn, $buses) . '", farmingland = "' . mysqli_real_escape_string($conn, $farmingland) . '", sciencelabs = "' . mysqli_real_escape_string($conn, $sciencelabs) . '", bookratio = "' . mysqli_real_escape_string($conn, $bookratio) . '", email = "' . mysqli_real_escape_string($conn, $email) . '", telephone1 = "' . mysqli_real_escape_string($conn, $telephone1) . '"
					WHERE 
						school_id = '. $_GET['id'];


			if (mysqli_query($conn, $sql)) {
			echo "Record updated successfully<br>";
			header('Refresh: 2; URL=' . $redirect);
			echo '<p>You will be redirected to your original page request.</p>';
			echo '<p>If your browser doesn\'t redirect you properly ' . 'automatically, <a href="' . $redirect . '">click here</a>.</p>';
	
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

?>