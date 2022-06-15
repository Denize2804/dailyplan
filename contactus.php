<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

footer{
 width: 50%;
 margin-left: 70%;
 text-align: justify;
}

body {
    width: 50%;
    margin-left: 25%;
    margin-right: 25%;
    background-color: #2b6777;
}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #c8d8e4;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #2b6777;
  color: white;
  padding: 12px 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #6c5b7b;
}

.container {
  border-radius: 5px;
  background-color: #52ab98;
  padding: 10px;
}

.para{
  margin-right: 90%;
  }
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<span style= "font-family:Courier"><body>
<h3 style = "color:#ffffff; text-align: center">CONTACT US FORM</h3>
<h4 style = "color:#d3d3d3; text-align: center">Give your feedback, questions or complaints in the space below!</h4>

<div class="container">
  <form method = "post" action="contactus.php">
    <label for="username">UserName</label>
    <input type="text" id="username" style = "background-color: #c8d8e4" name="username" placeholder="Your simplesched username...">

    <label for="email">Registered Email Address</label>
    <input type="text" id="email" name="email" placeholder="Enter your simplesched registered email address..." 
    style = "background-color: #c8d8e4">

        <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Tell us how you feel about the website..." 
    style="height:200px; background-color: #c8d8e4"></textarea>

    <input type="submit" name="submit" value="Submit">

  </form>
</div>

</body>

<?php
$con = mysqli_connect("localhost","root","", "simplesched");

if(isset($_POST['submit']))
{
   $username = $_POST['username'];
   $email = $_POST['email'];  
   $message = $_POST['message'];
   
$query = "insert into contactus(username,email,message) values('$username','$email','$message')";
   
if(mysqli_query($con, $query))
{
echo"<h3>THANK YOU FOR YOUR FEEDBACK ON SIMPLESCHED</h3>";
}
}
?>

</span>
<br>
<footer>
  <table style="padding: 10%; border: 2px solid #FFFFFF;text-align: left; width: 100px; background-color:#52ab98">
	<tr>
  <td><a href="index.php">Home</a></td>
  <td>       /        </td>
  <td> <a href="dashboard.php">Personal Page</a></td>
  <td>       /        </td>
	<td> <a href="logout.php">Logout</a> </td>
  <table>
</footer>
</html>



