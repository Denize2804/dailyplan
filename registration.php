<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style type="text/css">
body {
        background: #cbc5c1;
}
</style></head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
  $select = mysqli_query($con, "SELECT * FROM users WHERE username = '". $_POST['username']."'");
  if(mysqli_num_rows($select)) {
  echo '<script>alert("This username has already been registered. Kindly register another username or log-in")</script>';
  }else{
  $email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
  $select = mysqli_query($con, "SELECT * FROM users WHERE email = '". $_POST['email']."'");
  if(mysqli_num_rows($select)) {
  echo '<script>alert("This email has already been registered. Kindly register another email or log-in")</script>';
}else{
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, email, password, trn_date)
VALUES ('$username', '$email','$password', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }}
    }}
?>
<div style="background: #4c586f" class="form">
<h1 style=" text-align:center ">Registration</h1>

<form name="registration" action="" method="post">
<p style="background: #4c586f">

<input type="text" name="username" min="2" minlength="2" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input class="button" type="submit" name="submit" value="Register" />
</p>
<table align="center" style="background-color:#3e3e3b; color:white; padding: 2%; border: 2px solid #FFFFFF;text-align: right; width: auto;"
 font-color="#ffffff">
	<tr>
  <td >Already registered? <a style="color:white" href="login.php">Login</a> to access your Simplesched page!</td>
  </table>
  <br>
<table align="center" style="background-color:#3e3e3b; color:white; padding: 2%; border: 2px solid #FFFFFF;text-align: right; width: auto;"
 font-color="#ffffff">
	<tr>
  <td >Have an issue, questions or just some feedback? Click <a style="color:white" href="contactus.php">here</a> to contact us now.</td>
  </table>
  <br>
  <br>
</form>
</div>
<?php  ?>
</body>

</html>

<style type="text/css">
.form {
  border: 3px solid #a2aab0;
  width: 550px;
  margin:auto;
}
input[type=text], input[type=password], input[type=email] {
  width: 50%;
  padding: 1.0%;
  margin: 1.5%;
  display: inline-block;
  border: 1px solid #314455;
  box-sizing: border-box;
  margin-left: 25%
}
.button {
  background-color: #97aabd;
  color: #644e5b;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-left: 25%;
}
button:hover {
  opacity: 0.8;
  color: #314455;
}
.container {
  padding: 10px;
}
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
}
</style>