<?php
session_start();
?>
<!DOCTYPE html>
<?php


?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/sign.css">
		<link rel="icon" href="images/favicon.ico" type="image/gif" sizes="16x16">
	<title>Edit-page</title>
	</head>

	<body  >
	<div class="all"   >
	<fieldset><legend>Profile edit</legend>
		
		<div class="input">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br> 
  			<input type="text" name="name" value ="<?php echo $name ?>"   > <br><br>
			User name:&nbsp&nbsp<br>
  			<input type="text" name="username"><br><br>
  			Mobile No:&nbsp&nbsp<br>
  			<input type="integer" name="mobileno"><br><br>
  			E-mail:&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp<br>
  			<input type="text" name="email"><br><br>
  			Profile pic:&nbsp&nbsp<br>
  			<input type="file" name="dp" size="40"><br><br>
	    	Cover pic:&nbsp&nbsp<br>
	    	<input type="file" name="cover" size="40"><br><br><br>
		<div class="rdo" align="center">	<!-- profile pic area and all to be updated here only  -->
		</div >
			<input type="submit" value="Update" >
		</form>
		</div>
	</fieldset>
	</div>
	</body>
</html>
