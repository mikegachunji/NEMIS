<?php
session_unset();
?>

<?php include 'header.php'; ?>
<form method="post" action="movie1.php">
	<p>Enter your username:
		<input type="text" name="user"/>
	</p>
	<p>Enter your password:
		<input type="password" name="pass"/>		
	</p>
	<p>
		<input type="submit" name="submit" value="Submit"/>
	</p>
</form>
<?php
include "footer.php";
?>