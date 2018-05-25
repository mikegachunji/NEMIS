<?php
include 'db.inc.php';
$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

$sql = 'SELECT * FROM students where student_id = ' . $_GET['id'];
	$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
	extract(mysqli_fetch_assoc($result));


?>


<?php 
include 'header.php';
$get="updateSchool.php?id=". $_GET['id']; 
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3" >
			<div id="alert"></div>
			<form method="post" action="<?php echo $get;?>"onsubmit="btnCheckFormClick()" name="form1" id="form">
	<h3>Vie</h3>

	<div class="form-group">
		<label for="stupi">Student UPI:</label>
		<input type="text" class="form-control" id="stupi" name="stupi" value="<?php echo $stupi; ?>"/>
	</div>

	<div class="form-group">
		<label for="schupi">School UPI:</label>
		<input type="text" class="form-control" id="schupi" name="schupi" value="<?php echo $schupi; ?>"/>
	</div>

	<div class="form-group">
		<label for="maths">Mathematics:</label>
		<input type="number" class="form-control" id="maths" name="maths" value="<?php echo $maths; ?>"/>
	</div>

	<div class="form-group">
		<label for="english">English:</label>
		<input type="number" class="form-control" id="english" name="english" value="<?php echo $english; ?>"/>
	</div>

	<div class="form-group">
		<label for="kiswahili">Kiswahili:</label>
		<input type="number" class="form-control" id="kiswahili" name="kiswahili" value="<?php echo $kiswahili; ?>"/>
	</div>

	<div class="form-group">
		<label for="science">Science:</label>
		<input type="number" class="form-control" id="science" name="science" value="<?php echo $science; ?>"/>
	</div>

	<div class="form-group">
		<label for="socialstudies">Social Studies:</label>
		<input type="number" class="form-control" id="socialstudies" name="socialstudies" value="<?php echo $socialstudies; ?>"/>
	</div>

	<div class="form-group">
		<label for="buses">Buses:</label>
		<input type="number" class="form-control" id="buses" name="buses" value="<?php echo $buses; ?>"/>
	</div>

	<div class="form-group">
		<label for="farmingland">Farming Land:</label>
		<input type="number" class="form-control" id="farmingland" name="farmingland" value="<?php echo $farmingland; ?>"/>
	</div>

	<div class="form-group">
		<label for="sciencelabs">Science Labs:</label>
		<input type="number" class="form-control" id="sciencelabs" name="sciencelabs" value="<?php echo $sciencelabs; ?>"/>
	</div>

	<div class="form-group">
		<label for="bookratio">Book Ratio:</label>
		<input type="text" class="form-control" id="bookratio" name="bookratio" value="<?php echo $bookratio; ?>"/>
	</div>
	
	<div class="form-group">
		<label for="email">School Email:</label>
		<input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>"/>
	</div>

	<div class="form-group">
		<label for="telephone1">Telephone 1:</label>
		<input type="number" class="form-control" id="telephone1" name="telephone1" value="<?php echo $telephone1; ?>"/>
	</div>
	
	<div class="form-group">
		<label for="telephone2">Telephone 2:</label>
		<input type="number" class="form-control" id="telephone2" name="telephone2" value="<?php echo $telephone2; ?>"/>
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
<?php
include "footer.php";
?>