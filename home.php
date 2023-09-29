<?php
session_start();
include "config.php";

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
  	<div class="container">
  		<?php include "header.php"; ?>
  		<div class="border">
  		<br><br><h1>hellow <?php echo $_SESSION['fname']." ".$_SESSION['lname']?></h1><br>
  		</div><br>
  		<div class="row border">
  			<h2>users</h2>
  			
  			<?php
  			$sql = "SELECT * FROM Register";
  			$result = mysqli_query($conn,$sql);
  			if(mysqli_num_rows($result) > 0){
  			while($row = mysqli_fetch_assoc($result)){
  				echo "<p>".$row['fname']." ".$row['lname']."</p><br>";
  				}
  			}
  			?>
  		</div>
  	</div>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>