<?php
include 'db.inc.php';
include 'header.php';
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

$schupi = $_SESSION['schupi'];
$sql = "SELECT * FROM schooldetails WHERE schupi = '$schupi'";
	$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
	extract(mysqli_fetch_assoc($result));
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3" >

			<div id="alert"></div>
			<form method="post" action="updateSchool.php"onsubmit="btnCheckFormClick()" name="form1" id="form">
	<h3>View School Details</h3>

	<div class="form-group">
		<label for="name">School Name:</label>
		<input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>"/>
	</div>

	<div class="form-group">
		<label for="category">Category:</label>
		<input type="text" class="form-control" id="category" name="category" value="<?php echo $category; ?>"/>
	</div>

	<div class="form-group">
		<label for="county">County:</label>
		<input type="text" class="form-control" id="county" name="county" value="<?php echo $county; ?>"/>
	</div>

	<div class="form-group">
		<label for="classes">Classes:</label>
		<input type="text" class="form-control" id="classes" name="classes" value="<?php echo $classes; ?>"/>
	</div>

	<div class="form-group">
		<label for="playingfields">Playing Fields:</label>
		<input type="text" class="form-control" id="playingfields" name="playingfields" value="<?php echo $playingfields; ?>"/>
	</div>

	<div class="form-group">
		<label for="halls">Halls:</label>
		<input type="text" class="form-control" id="halls" name="halls" value="<?php echo $halls; ?>"/>
	</div>

	<div class="form-group">
		<label for="dormitories">Dormitories:</label>
		<input type="text" class="form-control" id="dormitories" name="dormitories" value="<?php echo $dormitories; ?>"/>
	</div>

	<div class="form-group">
		<label for="buses">Buses:</label>
		<input type="text" class="form-control" id="buses" name="buses" value="<?php echo $buses; ?>"/>
	</div>

	<div class="form-group">
		<label for="farmingland">Farming Land:</label>
		<input type="text" class="form-control" id="farmingland" name="farmingland" value="<?php echo $farmingland; ?>"/>
	</div>

	<div class="form-group">
		<label for="sciencelabs">Science Labs:</label>
		<input type="text" class="form-control" id="sciencelabs" name="sciencelabs" value="<?php echo $sciencelabs; ?>"/>
	</div>

	<div class="form-group">
		<label for="bookratio">Book Ratio:</label>
		<input type="text" class="form-control" id="bookratio" name="bookratio" value="<?php echo $bookratio; ?>"/>
	</div>
	
	<div class="form-group">
		<label for="email">School Email:</label>
		<input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>"/>
	</div>

	<div class="form-group">
		<label for="telephone1">Telephone 1:</label>
		<input type="text" class="form-control" id="telephone1" name="telephone1" value="<?php echo $telephone1; ?>"/>
	</div>
	
	<div class="form-group">
		<label for="telephone2">Telephone 2:</label>
		<input type="text" class="form-control" id="telephone2" name="telephone2" value="<?php echo $telephone2; ?>"/>
	</div>
	
	<div class="form-group">
		<input type="submit" class="btn  btn-primary form-control" name="submit" id="btn"value="submit"/>
	</div>
</tr>
</table>
</form>

<script>
		var myForm = document.form1;
		
		function btnCheckFormClick(e) {
			var schupi = myForm.schupi;
			var name = myForm.name;
			var category = myForm.category;
			var county = myForm.county;
			var classes = myForm.classes; 
			var playingfields = myForm.playingfields;
			var halls = myForm.halls;
			var dormitories = myForm.dormitories;
			var buses = myForm.buses;
			var farmingland = myForm.farmingland;
			var sciencelabs = myForm.sciencelabs;
			var bookratio = myForm.bookratio;
			var email = myForm.email;
			var telephone1 = myForm.telephone1;
			var telephone2 = myForm.telephone2;

 		      	
			
			if (schupi.value == "" || name.value == "" || category.value == "" || county.value == "" || classes.value == "" || playingfields.value == "" || halls.value == "" || dormitories.value == "" || buses.value == "" || farmingland.value == "" || sciencelabs.value == "" || bookratio.value == "" || email.value == "" || telephone1.value == "" || telephone2.value == "") {
				alert("Please complete the whole form");
			}			
       		
		}
		
		myForm.submit.addEventListener("click", btnCheckFormClick);
	</script>
