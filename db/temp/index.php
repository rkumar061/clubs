<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:dodgerblue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}




.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  
}
</style>
</head>
<body>

<img src="adypulogo.png">
<?php include("errors.php"); ?>
	<form action="auth.php" method="post">
  <div class="imgcontainer">
    
  <div class="container">
   			 <label for="uname"></label>
			<label>Username</label>
			<input type="text" name="username" placeholder="Enter User Name" required>
			<label>password</label>
			<input type="password" name="password" placeholder="Enter Password" required>
    
    <button type="submit" name="login_user" >Login</button>
<div style="float: right;">
 <a href="registration.php">Register<br></a>
 <br>
   
   </div>
  </div>

  
</form>

</body>
</html>
