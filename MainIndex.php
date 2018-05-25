
<?php 
include 'header.php'; 
?> 

<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				
<p>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    KNEC Login
 </button>

<div class="collapse" id="collapseExample">
  <div class="card card-body">
  	<form method="post" action="loginKNEC.php" name="KNECform1">
		<div class="form-group">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" class="form-control"/>
	</div>
	<div class="form-group">
		<input type="submit" class="btn  btn-primary form-control" name="submit" id="btn"value="submit"/>
	</div>
</form>
  </div>
</div>

<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
    School Admin Login
 </button>

<div class="collapse" id="collapseExample2">
  <div class="card card-body">
  	<form method="post" action="loginSA.php" name="form1">
		<div class="form-group">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" class="form-control"/>
	</div>

	<div class="form-group">
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" class="form-control"/>
	</div>
	<div class="form-group">
		<input type="submit" class="btn  btn-primary form-control" name="submit" id="btn" value="submit"/>
	</div>
</form>
</p>
  </div>
<script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="./js/popper.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>

