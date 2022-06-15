
<?php
require('db.php');
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Personal Page</title>
<link rel="stylesheet" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style type="text/css">
body {
  width: 70%;
  margin-left: 16%;
  
	background-color: #ba886a;

	}

.paragraph{
	margin-left: 14%;

}


</style></head>
<body>
<div class="form">
<MARQUEE style="border: 2px solid #ffffff" bgcolor="#a06a4a" loop="-1" scrollamount="5" width="100%"><h1>Welcome <?php echo $_SESSION['username']; ?> to your Personal Page!</h1></MARQUEE>


<body style="text-align:center">
<div class="form">
<p><strong>CLICK ON THE PAGE YOU WOULD LIKE TO USE!</strong></p>

<h2 class=paragraph align="center" style="padding: 7%; border: 2px solid #281915;text-align: center; width:55%; background-color:#5d4033">
	<a style="color:#ffffff" href="index.php">Home</a><br><br>
	<a style="color:#ffffff" href="insert.php">Insert your Task details </a><br><br>
	<a style="color:#ffffff" href="view.php">View your Task details </a><br><br>
	<a style="color:#ffffff" href="Timetable/index.php">Add or edit you School Timetable </a><br><br>
	<a style="color:#ffffff" href="Timetable/display.php">Check out your school Timetable </a><br><br>
	<a style="color:#ffffff" href="HABIT TRACKER/index.php">Check out your habit tracker</a><br><br>
	<a style="color:#ffffff" href="note/index.php">Check out your notes page</a><br><br>
	<a style="color:#ffffff" href="logout.php">Logout</a>
</h2>

</div>
</body>
</html>
