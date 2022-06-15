<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $subject =$_REQUEST['subject'];
    $task = $_REQUEST['task'];
    $submittedby = $_SESSION["username"];
    $ins_query="insert into new_record
    (`trn_date`,`subject`,`task`,`submittedby`)values
    ('$trn_date','$subject','$task','$submittedby')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Task Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Task</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Task</title>
<link rel="stylesheet" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
body {
	background-color: #D5CABD;
  margin-left:34%;  
}
 
.container{
  border-radius: 5px;
  background-color: #FEF6FF;
  padding: 10px;
  width: 70%;
}

#container1{
  border-radius: 5px;
  background-color: #9B89B3;
  width:400px;
  height: 330px;
}

</style>
</head>
<body>
<div align="center" class="form" id="container1" style="border: 2px solid #FFFFFF">

<h1>Insert New Task</h1>
<div align="center" class="container" style="background-color:#845EC2; border: 2px solid #000000">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p>Enter Subject:
  <input type="text" name="subject" placeholder="Enter Task Topic" required /></p>
<p>Enter task:
  <input type="text" name="task" placeholder="Enter Task" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
<br>
  <table align="center" style="border-radius: 5px; padding: 2%; border: 2px solid #FFFFFF;text-align: left; width: 200px; background-color:#D5CABD">
	<tr>
  <td><a href="view.php">View Tasks</a></td>
  <td>       /        </td>
  <td> <a href="dashboard.php">Personal Page</a></td>
  <td>       /        </td>
	<td> <a href="logout.php">Logout</a> </td>
  <table>
</footer> 

</div>
</body>


</html>