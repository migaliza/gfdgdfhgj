<?php

include('session.php');

include('login.php'); // Includes Login Script

if(isset($_SESSION['username'])){
header("location: registration.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/themes/mytheme.css"/>
		<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css"/>
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.mobile-1.4.5.min.js"></script>


  </head>
  <body>
	<div data-role="page" id="signup">
	   <div data-role="header" data-theme="b">
		<h1>Student Login</h1>
	  </div>
	   <div data-role="content">
		<div data-role="content" data-inset="true">

		  <form method="post" method="POST" action="login.php">
			<label for="username">User Name:</label>
			<input type="text" name="username" id="Username"  placeholder="user name">

			<label for="password">Pass Code:</label>
			<input type="password" name="passcode" id="password" placeholder="**********"/>
			<input id="Submit1" type="submit" value="Login" data-role="button" data-inline="true" data-theme="b">
		  </form>
		  <div><a href="signUp.html">SignUp here If you dont have an account</a>
		 </div>
	  </div>
	   <div data-role="footer">
		<h4>footer</h4>
	  </div>
	 </div> 
   </body>
 </html>