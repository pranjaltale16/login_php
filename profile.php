<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/sign.css">
		<link rel="icon" href="images/favicon.ico" type="image/gif" sizes="16x16">
	<title>Profile</title>
	</head>

	<body  >
	<div class="all"   >
	<fieldset><legend>Profile</legend>
		
		<div class="input">
		
			Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br> 
  			
			User name:&nbsp&nbsp<br> 
  			
  			Mobile No:&nbsp&nbsp<br> 
  			
  			E-mail:&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp<br> 
  			
		<div class="rdo" align="center">	<!-- profile pic area and all to be updated here only  -->
		Profile pic:&nbsp&nbsp<br>
		<img src="" height="150" width="150" alt="Please update pics first"><br>
		Cover pic:&nbsp&nbsp<br>
		<img src="" height="150" width="300" alt="Please update pics first">  
		</div >
		<form method = "post" action="profile_update.php" target="_blank">
			<input type="submit" value="Update_profile" >
			<br><br	>
		</form>
		<form method = "post" action="password_update.php" target="_blank" >
			<input type="submit" value="Update_password" >
			
		</form>
		</div>
	</fieldset>
	</div>
	</body>
</html>
