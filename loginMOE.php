<?php include 'header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3" >
			<div id="alert"></div>
			<form method="post" action="loginMOE1.php"onsubmit="btnCheckFormClick()" name="form1" id="form">
	<h3>Ministry of Education Login</h3>

	<div class="form-group">
		<label for="username">Username:</label>
		<input type="text" class="form-control" placeholder="Enter Username" id="username" name="username"/>
	</div>

	<div class="form-group">
		<label for="password">Password:</label>
		<input type="password" class="form-control" placeholder="Enter Password" id="password" name="password"/>
	</div>	
	</p>
	<div class="form-group">
		<input type="submit" class="btn  btn-primary form-control" name="submit" id="btn" value="submit"/>
	</div>
</form>
<script>
		var myForm = document.form1;

		function btnCheckFormClick(e) {
			var username = myForm.username;
			var password = myForm.password;
			
			if (username.value == "" || password.value == "") {
				alert("Please fill in all the fields");
				header('loginMOE.php');
			}			
						
		}
		
		myForm.submit.addEventListener("click", btnCheckFormClick);
	</script>
        </div>
    </div>
</div>
</body>
<?php
include "footer.php";
?>