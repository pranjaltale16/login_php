<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/sign.css">
		<link rel="icon" href="images/favicon.ico" type="image/gif" sizes="16x16">
	<title>Password_update</title>
	</head>

	<body  >
	<div class="all"   >
	<fieldset><legend>Password edit</legend>
		
		<div class="input">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br> 
  			<input type="text" name="name"><br><br>
			User name:&nbsp&nbsp<br> 
  			<input type="text" name="username"><br><br>
  			Enter old password:&nbsp&nbsp<br> 
  			<input type="integer" name="passwrd"><br><br>
  			New Password:&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp<br> 
  			<input type="text" name="passwrd1"><br><br>
  			Confirm New Password:&nbsp&nbsp<br>
  			<input type="text" name="passwrd2" size="40"><br><br>
			<input type="submit" value="Update" >
		</form>
		</div>
	</fieldset>
	</div>
	</body>
</html>
