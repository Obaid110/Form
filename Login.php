<?php
include "config.php";

	$warning = "";
	if(isset($_POST['sub'])){
		$email = $_POST['email'];
		$pass = md5($_POST['pass']);
	
	$sql = "SELECT * FROM Register WHERE email = '{$email}' AND pass = '{$pass}'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){
	$row = mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['id'] = $row['id'];
	$_SESSION['fname'] = $row['fname'];
	$_SESSION['lname'] = $row['lname'];
	$_SESSION['email'] = $row['email'];
		echo "<script>window.location.href='home.php'</script>";
	}else{
		$warning = '<div class="alert alert-warning" role="alert">invalid account</div>';
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registertion From</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark  div-h-2">
  	<div class="container-fluid">
  		<p class="h1 h1-2">Login Form</p>
  	</div>
  	</div>
  	</nav>
  	<div class="container">
  	<?php echo $warning; ?>
  		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	  		<div class="mb-3 row">
	  		<label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
	  		<div class="col-sm-10">
	  		<input type="email" class="form-control" id="inputPassword" name="email">
	  		</div>
	  		</div>
	  		<div class="mb-3 row">
	  		<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
	  		<div class="col-sm-10">
	  		<input type="password" class="form-control" id="inputPassword" name="pass">
	  		</div>
	  		</div>
	  		<div class="col-sm-10">
	  		<input type="submit" class="btn btn-dark btn-2" id="inputPassword" name="sub">
	  		</div>
	  	</form>
  	</div>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>