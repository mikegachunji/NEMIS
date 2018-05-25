<!DOCTYPE html>

<html>
    
<head>

<style type="text/css">
p {
	text-indent:60px;
	font-size:20px;
}
.text-center {
	text-align: center !important;
}
</style>

	<title>
		Search the Database
	</title>
		
<?php include('header.php'); ?>
		
</head>

<body>

<script type="text/javascript">
	$(function() {
		$("#search_file").focus();
	});
</script> 

<br /> 
<center>
<div class="alert alert-info"><center> <h3>Search Student</h3></center> </div>
</center>
<br>
<form method="post" action="" name="form1" id="form1">   
<p style="font-size:18px; margin-left:100px;">
	Type the First Name, Last Name, or UPI of the Student
</p>
<br />
<p style="font-size:18px; margin-left:100px;">Search User  <input type="text" autofocus="autofocus" name="search_file" id="search_file" style="width:230px; font-size:18px;" class="textboxclass" /> 
				<input type="submit" style="font-size:18px; margin-top:-9px;" class="btn btn-primary" name="submit" value="Filter"></p> 

</form>
	
	
<div class="container">
<div class="alert alert-success"><center> <h4>Record Results </h4></center> </div>
<br />

	<table class="table table-striped">
		<thead>
			<tr>
				<th class="text-center">Student UPI</th>
				<th class="text-center">Surname</th>
				<th class="text-center">First Name</th>
				<th class="text-center">Last Name</th>
				<th class="text-center">School UPI</th>
			</tr>
		</thead>
								
		<tbody>	
			<?php

			$conn = mysqli_connect('localhost','root','');
			mysqli_select_db($conn,'nemis')or die(mysqli_error());
			//error_reporting(0);
			if (isset($_POST['submit'])) {
			$search_file = $_POST['search_file'];
			$sql = mysqli_query($conn, "select * from students where fname = '$search_file' or lname = '$search_file' or stupi = '$search_file' Order by sname ASC") or die('Error in query : '.$sql.mysqli_error($conn));

				if (empty($search_file)) {
					echo '<script language="javascript">';
					echo 'alert("Text field cannot be empty. Please Try it again.")';
					echo '</script>';
					header( "refresh:2; url=index.php" ); 
				}
				else if (mysqli_num_rows($sql) > 0) 
				{            
					$i = 1;
					while ($row = mysqli_fetch_array($sql)) {
							// Print out the contents of the entry 
					echo '<tr>';
					echo '<td class="text-center">' . $row['stupi'] . '</td>';
					echo '<td class="text-center">' . $row['sname'] . '</td>';
					echo '<td class="text-center">' . $row['fname'] . '</td>';
					echo '<td class="text-center">' . $row['lname'] . '</td>';
					echo '<td class="text-center">' . $row['schupi'] . '</td>';
					$i++;
				}
			} 
			else 
			{
			echo '<div class="alert alert-danger" style="width:130px; float:right; margin-top:-142px;">No Results Found!!!</div>';
			}
			}
			?>       
		</tbody>
	</table>
</div>

</body>

</html>
