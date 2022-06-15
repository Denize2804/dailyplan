<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
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

body {
	background-color: #D5CABD;
  margin-left:36%;
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
  width:350px;
  height: 330px;
}

</style></head>
<body>
<div align="center" class="form" id="container1" style="border: 2px solid #FFFFFF">

<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$subject =$_REQUEST['subject'];
$task =$_REQUEST['task'];
$submittedby = $_REQUEST["id"];
$update="update new_record set trn_date='".$trn_date."',
subject='".$subject."', task='".$task."',
submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully.
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div align="center" class="container" style="background-color:#845EC2; border: 2px solid #000000">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p> Enter Subject: 
  <input type="text" name="subject" placeholder="Enter Subject " 
required value="<?php echo $row['subject'];?>" /></p>
<p>Enter Task: 
  <input type="text" name="task" placeholder="Enter Task" 
required value="<?php echo $row['task'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
<br>
<table   align="center" style="border-radius: 5px; padding: 2%; border: 2px solid #000;text-align: left; width: 200px; background-color:#D5CABD">
	<tr>
  <td><a href="insert.php">Insert New Task</a></td>
  <td>       |         </td>
  <td> <a href="dashboard.php">Personal Page</a></td>
  <td>       |        </td>
	<td> <a href="logout.php">Logout</a> </td>
  <table>


</div>



</body>
</html>