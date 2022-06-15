<!-- https://iq.opengenus.org/html-form-database-insertion-php-mysql/-->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Input School Schedule</title>

<style>
 {
  box-sizing: border-box;
}


input[type=text], select, textarea {
  width: 20%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 2px;
  resize: vertical;
}

label {
  padding: 5px 5px 5px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #AE8B5D;
  color: white;
  padding: 5px 10px;
  border: none;
  border-radius: 2px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #99CCFF;
}

.container {
  border-radius: 5px;
  background-color: #ffffff;
  padding: 10px;
}

#container1 {
  border-radius: 5px;
  background-color: #6196C6;
  padding: 5px;
  width:600px;
  height:310px;
  
    }

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 50%;
    margin-top: 0;
  }
}
body {
	background-color: #99CCFF;
  width: 65%;
  margin-left: 25%;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<div align="center" class="form" id="container1" style="border: 2px solid #000">
<h2>SCHEDULE FOR THE WEEK</h2>
<p>Please type in your schedule and click the submit button.</p>

<div class="container" style="background-color:#D5F4FF; border: 2px solid #000">
<form action="index.php" method="post">
<label>Enter the day :</label>
<select id = "day" name= "day">
<option value="MON">MONDAY</option>
<option value="TUES">TUESDAY</option>
<option value="WED">WEDNESDAY</option>
<option value="THURS">THURSDAY</option>
<option value="FRI">FRIDAY</option>
<option value="SAT">SATURDAY</option>
</select>
<br></br>
<label>Select period:</label>
<select id = "period" name = "period">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
<br></br>
<label>Enter schedule:</label>
<input type="Text" name="plan" required maxlength="45"/><br>
<br>
<input type="submit" value="Submit Details " name="submit"/>
  </form>
</div>

<br>
<br>
<br>
<br>
<table align="right" style="border-radius: 5px; padding: 5%; border: 2px solid #FFFFFF;text-align: left; width: 100px; background-color:#AE8B5D">
	<tr>
  <td><a style="color:#ffffff" href="display.php">Schedule</a></td>
  <td>       /        </td>
  <td> <a style="color:#ffffff" href="../dashboard.php">Personal Page</a></td>
  <td>       /        </td>
	<td> <a style="color:#ffffff" href="logout.php">Logout</a> </td>
  <table>

</div>

</body>
</html>

<?php
$con = mysqli_connect("localhost","root","", "simplesched");

if(isset($_POST['submit']))
{
   $day = $_POST['day'];
   $period = $_POST['period'];
   $plan = $_POST['plan'];
      
$query = "insert into schedule(day,period,plan) values('$day','$period','$plan')";
   
if(mysqli_query($con, $query))
{
echo"<h3>Schedule data uploaded successfully.
</br><a href='display.php'>View School Timetable</a></h3>";
}
}
?>
