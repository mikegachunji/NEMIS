<?php
session_start();

$username = "";
$password = "";

if(isset($_POST["submit"]))
{
	$username = $_POST["username"];
	$password = $_POST["password"];

	$conn = mysqli_connect("localhost", "root", "");

	if(!$conn)
	{
		die("An Error Occured" . mysqli_error());
	}
	else {
		mysqli_select_db($conn, "nemis");
	}

$qry = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);

if(mysqli_num_rows($result) > 0)
{
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['userpass'] = $_POST['password'];
	$_SESSION['authuser'] = 0;
	$_SESSION['access_level'] = $row["access_level"];
	$_SESSION["name"] = $row["username"];
	header("location:SchoolAdminIndex.php");
	$_SESSION["user_id"] = $row["user_id"];
	$_SESSION["name"] = $row["fname"] . " " . $row["lname"];
	header("location:MOEindex.php");
}
else 
{
	echo "<script>alert ('User Not Found') </script>";
	header('loginMOE.php'); 
}
mysqli_close($conn);
}
?>