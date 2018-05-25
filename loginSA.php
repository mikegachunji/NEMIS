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

$qry = "SELECT * FROM schooladmins WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);

if(mysqli_num_rows($result) > 0)
{
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['userpass'] = $_POST['password'];
	$_SESSION['authuser'] = 0;
	$_SESSION["school_admin_id"] = $row["school_admin_id"];
	$_SESSION["school_id"] = $row["school_id"];
	$_SESSION['schupi'] = $row["schupi"];
	$_SESSION['access_level'] = $row["access_level"];
	$_SESSION["name"] = $row["username"];
	header("location:SchoolAdminIndex.php");
}
else 
{
	echo "<script>alert ('User Not Found') </script>";
	header("location:MainIndex.php");
	
}
mysqli_close($conn);
}
?>
