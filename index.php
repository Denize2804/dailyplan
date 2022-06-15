<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<style type="text/css">
body {
  width: 65%;
  margin-left: 18%;
	background-color: #20B2AA;
}

.table2{
  margin-right: 38%;
}
</style>


<body style="background-color: #ccdcdc">
<div align="center" style="background-color:#332323; color:black; padding: 3%; border: 2px solid #FFFFFF;text-align: right; width: auto;" font-color="#ffffff">
 <class="form">
<MARQUEE bgcolor="#000"; loop="-1" scrollamount="5" width="100%" margin-left= 5%; margin-right= 5%;><h1 style="color:white">Welcome <?php echo $_SESSION["username"] ?> to SimpleSched!</h1></MARQUEE>
</head>
<p style="background-color:#e8dff5; color:black; padding: 3%; border: 2px solid #FFFFFF; width: auto;" font-color="#ffffff" align="center" style="color:black">THIS IS YOUR HOMEPAGE. CLICK ON YOUR NAME TO OPEN YOUR PERSONAL PAGE</p>
<h3 style="background-color:#fce1e4; color:black; padding: 3%; border: 2px solid #FFFFFF; width: auto;" font-color="#ffffff" align="center"><a style="color:black" href="dashboard.php">Mangalam's Page</a></h3>
<h3 style="background-color:#fcf4dd; color:black; padding: 3%; border: 2px solid #FFFFFF; width: auto;" font-color="#ffffff" align="center"><a style="color:black" href="dashboard.php">Aishwarya's Page</a></h3>
<h3 style="background-color:#ddedea; color:black; padding: 3%; border: 2px solid #FFFFFF; width: auto;" font-color="#ffffff" align="center"><a style="color:black" href="dashboard.php">Jeffin's Page</a></h3>
<h3 style="background-color:#daeaf6; color:black; padding: 3%; border: 2px solid #FFFFFF; width: auto;" font-color="#ffffff" align="center"><a style="color:black" href="dashboard.php">Anthony's Page</a></h3>

<table align="right" style="padding: 5%; border: 2px solid #FFFFFF;text-align-left: 100px; width: 100px; background-color:#c4dfe6">
	<tr>
  <td><a href="index.php">Home</a></td>
  <td>       /        </td>
  <td> <a href="dashboard.php">Personal Page</a></td>
  <td>       /        </td>
	<td> <a href="logout.php">Logout</a> </td>
  </table>
  <table class=table2 align="centre" style="color:black; padding: 2%; border: 2px solid #FFFFFF;text-align: right; width: auto; background-color:#c4dfe6;" font-color="#ffffff">
	<tr>
  <td align="left">Have an issue, questions or just some feedback? Click <a style="color:black" href="contactus.php">here</a> to contact us now.</td>
  </table>
  <br>
<br>
<br>

</div>


</body>


</html>