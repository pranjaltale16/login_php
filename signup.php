<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/sign.css">
		<link rel="icon" href="images/favicon.ico" type="image/gif" sizes="16x16">
	<title>SIGN-UP</title>
	</head>

	<body  >
	<div class="all"   >
  <fieldset><legend>Hello</legend>
		<span class="top"><h2></h2></span>
		<div class="input">
<form action = "signup.php" method = "post">
		
			  Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  			<input type="text" name="name" placeholder = "Pranjal"><br><br>
        Mobile no:&nbsp&nbsp&nbsp&nbsp
        <input type="number" name="mobileno" placeholder = "9584752163"><br><br>
        E-mail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
        <input type= "text" name ="email" placeholder = "ptale16mail.com"><br><br>
		 	  User name:&nbsp&nbsp &nbsp
  			<input type="text" name="username" placeholder = "Pranjaltale16"><br><br>
  			Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  			<input type="password" name="passwrd1" placeholder = "**********" ><br><br>
        Re-Password:
                <input type="password" name="passwrd2" placeholder = "**********" >

	
		</div>
		<div class="rdo">
		
  			<input type="radio" name="gender" value="male"  selected> Male   
  			<input type="radio" name="gender" value="female"> Female
		
		</div>
		<div class="ddown"
		  name="year of birth">
			Year of birth:      
  			<select>
  				<option>Select Year</option>
  				<option value="first">1993</option>
    			<option value="second">1994</option>  
  				<option value="third">1995</option>
    			<option value="fourth">1996</option>
    			<option value="fifth">1997</option>
    			<option value="sixth">1998</option>
  			</select>
		
		
    </div>
		<div class="foot">
			<button type="button"><a href="login.php" target = "_blank">LOGIN</a></button>

      
			<input type="submit" value = "SIGN-UP">
     
    </form>
		</div>
    </fieldset>
	</div>

	</body>

</html>
