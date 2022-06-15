<?php
require('db.php');
include("auth.php");
$slno=$_REQUEST['slno'];
$query = "SELECT * from schedule where slno='".$slno."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">


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

.container {
  border-radius: 5px;
  background-color: #FEF6FF;
  padding: 10px;
  width: 80%;

}

#container1 {
  border-radius: 5px;
  background-color: #6196C6;
  padding: 5px;
  width:600px;
  height:310px;
  
}

</style></head>
<body>
<div align="center" class="form" id="container1" style="border: 2px solid #FFFFFF">

<h1>Update Timetable</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$slno=$_REQUEST['slno'];
$day =$_REQUEST['day'];
$period =$_REQUEST['period'];
$plan = $_REQUEST['plan'];
$update="update schedule set day='".$day."',
period='".$period."', plan='".$plan."' where slno='".$slno."'";
mysqli_query($con,$update) or die(mysqli_error($con));
$status = "Record Updated Successfully.
<a href='display.php'>View Updated Timetable.</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div align="center" class="container" style="background-color:#D5F4FF; border: 2px solid #000000">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="slno" type="hidden" value="<?php echo $row['slno'];?>" />
<p> <label>Enter the day :</label>
  <select id="day" type="text" name="day" placeholder="Enter Day"
required value="<?php echo $row['day'];?>" >
<option value="<?php echo $row['day'];?>"><?php echo $row['day'];?></option>
<option value="MON">MONDAY</option>
<option value="TUES">TUESDAY</option>
<option value="WED">WEDNESDAY</option>
<option value="THURS">THURSDAY</option>
<option value="FRI">FRIDAY</option>
<option value="SAT">SATURDAY</option>
</select>
</p>
<p><label>Select period:</label>
<select id="period" type="text" name ="period" placeholder="Enter period" required value="<?php echo $row['period'];?>" >
<option value="<?php echo $row['period'];?>"><?php echo $row['period'];?></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
</p>
<p> <label>Enter schedule:</label>
  <input type="text" name="plan" placeholder="Enter plan" required maxlength="45" required value="<?php echo $row['plan'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
<br>
<table   align="center" style="border-radius: 5px; padding: 2%; border: 2px solid #000;text-align: left; width: 200px; background-color:#AE8B5D">
	<tr>
  <td><a style="color:#ffffff" href="display.php">Display Schedule</a></td>
  <td style="color:#ffffff">       |        </td>
  <td> <a style="color:#ffffff" href="../dashboard.php">Personal Page</a></td>
  <td style="color:#ffffff">       |        </td>
	<td> <a style="color:#ffffff" href="logout.php">Logout</a> </td>
  <table>


</div>



</body>
</html>