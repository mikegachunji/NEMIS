<?php
include 'db.inc.php';

$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

$sql = 'SELECT * FROM schooldetails where school_id = ' . $_GET['id'];
	$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
	extract(mysqli_fetch_assoc($result));
?>

<?php
include 'header.php';
$get="updateSchool.php?id= ". $_GET['id'];
?>


<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3" >
			<div id="alert"></div>
			<form method="post" action="<?php echo $get;?>"onsubmit="btnCheckFormClick()" name="form1" id="form">
	<h3>Edit School Details</h3>

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
		<select name="county" class="form-control">
 			<option value="0" selected="selected">Select</option>
 			<option value="mombasa">Mombasa</option>
 			<option value="kwale">Kwale</option>
 			<option value="kilifi">Kilifi</option>
 			<option value="tanariver">Tana River</option>
 			<option value="lamu">Lamu</option>
 			<option value="taitataveta">Taita Taveta</option>
 			<option value="garissa">Garissa</option>
 			<option value="wajir">Wajir</option>
 			<option value="mandera">Mandera</option>
 			<option value="marsabit">Marsabit</option>
 			<option value="isiolo">Isiolo</option>
 			<option value="meru">Meru</option>
 			<option value="tharakanithi">Tharaka Nithi</option>
 			<option value="embu">Embu</option>
 			<option value="kitui">Kitui</option>
 			<option value="machakos">Machakos</option>
 			<option value="makueni">Makueni</option>
 			<option value="nyandarua">Nyandarua</option>
 			<option value="nyeri">Nyeri</option>
 			<option value="kirinyaga">Kirinyaga</option>
 			<option value="muranga">Muranga</option>
 			<option value="kiambu">Kiambu</option>
 			<option value="turkana">Turkana</option>
 			<option value="westpokot">West Pokot</option>
 			<option value="samburu">Samburu</option>
 			<option value="transnzoia">Trans-Nzoia</option>
 			<option value="uasingishu">Uasin Gishu</option>
 			<option value="elgeyomarakwet">Elgeyo-Marakwet</option>
 			<option value="nandi">Nandi</option>
 			<option value="baringo">Baringo</option>
 			<option value="laikipia">Laikipia</option>
 			<option value="nakuru">Nakuru</option>
 			<option value="narok">Narok</option>
 			<option value="kajiado">Kajiado</option>
 			<option value="kericho">Kericho</option>
 			<option value="bomet">Bomet</option>
 			<option value="kakamega">Kakamega</option>
 			<option value="vihiga">Vihiga</option>
 			<option value="bungoma">Bungoma</option>
 			<option value="busia">Busia</option>
 			<option value="siaya">Siaya</option>
 			<option value="kisumu">Kisumu</option>
 			<option value="homabay">HomaBay</option>
 			<option value="migori">Migori</option>
 			<option value="kisii">Kisii</option>
 			<option value="nyamira">Nyamira</option>
 			<option value="nairobi">Nairobi</option>
 		</select>
		</div>

	<div class="form-group">
		<label for="classes">Classes:</label>
		<input type="number" class="form-control" id="classes" name="classes" value="<?php echo $classes; ?>"/>
	</div>

	<div class="form-group">
		<label for="playingfields">Playing Fields:</label>
		<input type="number" class="form-control" id="playingfields" name="playingfields" value="<?php echo $playingfields; ?>"/>
	</div>

	<div class="form-group">
		<label for="halls">Halls:</label>
		<input type="number" class="form-control" id="halls" name="halls" value="<?php echo $halls; ?>"/>
	</div>

	<div class="form-group">
		<label for="dormitories">Dormitories:</label>
		<input type="number" class="form-control" id="dormitories" name="dormitories" value="<?php echo $dormitories; ?>"/>
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
		<input type="submit" class="btn  btn-primary form-control" name="submit" id="btn" value="submit"/>
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