<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
        background: #cbc5c1;
}
.form{
	border: 3px solid #a2aab0;
  width: 600px;
  margin:auto;
}
</style></head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
	$query = "select * from users where username = '$username' limit 1";
	$result = mysqli_query($con, $query);
	if ($result)
	{
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			if ($user_data['password'] === $password) 
			{
				$_SESSION['username'] = $user_data['username'];
				header("Location: index.php");
				die;          
			}
			
		}
	}
	echo '<script>alert("Wrong username or password!. Please reenter your Login credentials")</script>';
}
?>
<div style="background: #4c586f" class="form" >
<h1 style="text-align:center">Welcome Students to Simplesched</h1>
<h2 style="text-align:center">Log in to access your personal page</h2>
<form align="center" action="" method="post" name="login">
	<p style="background: #4c586f">
	<input type="text" name="username" placeholder="Username" required /><br><br>
	<input type="password" name="password" placeholder="Password" required />
	<input class=button name="submit" type="submit" value="submit" />
	</p>
</form>
<table align="center" style="background-color:#3e3e3b; color:white; padding: 2%; border: 2px solid #FFFFFF;text-align: right; width: auto;" font-color="#ffffff">
	<tr>
  <td >Not registered yet? <a style="color:white" href="registration.php">Register Here</a></td>
  </table>
  <br>
</div>

</body>
</html>
