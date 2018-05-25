<?php
include 'db.inc.php';
include 'header.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewStudent.php';

if (!isset($_GET['do']) || $_GET['do'] != 1) {
	echo 'Are you sure you want to delete this student?<br/>';
	echo '<a href="' . $_SERVER['REQUEST_URI'] . '&do=1">yes</a> ';
	echo 'or <a href="viewStudent.php">no</a>';
} else {
	$sql = 'DELETE FROM students
				WHERE
					student_id = ' . $_GET['id'];
			$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

			echo "Student deleted successfully<br>";
			header('Refresh: 3; URL=' . $redirect);
			echo '<p>You will be redirected to your original page request.</p>';
			echo '<p>If your browser doesn\'t redirect you properly ' . 'automatically, <a href="' . $redirect . '">click here</a>.</p>';
}
?>
