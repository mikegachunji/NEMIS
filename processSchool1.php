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

$name = (isset($_POST['name'])) ? $_POST['name'] : '';
$category = (isset($_POST['category'])) ? $_POST['category'] : '';
$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'viewSchool.php';
$schupi = randomString(2, 'BCDFGHJKLMNPQRSUVWXZ'); 

if (!empty($name) && !empty($category)) {
	$sql = 'INSERT INTO schooldetails
			(name, category, schupi)
			VALUES 
			("' . mysqli_real_escape_string($conn, $name) . '", "' . mysqli_real_escape_string($conn, $category) . '", "' . mysqli_real_escape_string($conn, $schupi) . '")';

			if (mysqli_query($conn, $sql)) {
			echo "New School registered successfully<br>";
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
