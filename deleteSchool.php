<?php
include 'db.inc.php';
include 'header.php';
if (($_SESSION['username'] == 'admin') and ($_SESSION['userpass'] == 'admin')) {
	$_SESSION['authuser'] = 1;
} else {
	echo 'Sorry, but you don\'t have permission to view this page!';
	exit();
}

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewSchool.php';

if (!isset($_GET['do']) || $_GET['do'] != 1) {
	echo 'Are you sure you want to delete this school?<br/>';
	echo '<a href="' . $_SERVER['REQUEST_URI'] . '&do=1">yes</a> ';
	echo 'or <a href="viewSchool.php">no</a>';
} else {
	$sql = 'DELETE FROM schooldetails
				WHERE
					school_id = ' . $_GET['id'];
			$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

			echo "School deleted successfully<br>";
			header('Refresh: 3; URL=' . $redirect);
			echo '<p>You will be redirected to your original page request.</p>';
			echo '<p>If your browser doesn\'t redirect you properly ' . 'automatically, <a href="' . $redirect . '">click here</a>.</p>';
}
?>
