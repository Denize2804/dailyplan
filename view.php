<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">

body {
	background-color: #D5FBEE;
}
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #00754B;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

</style></head>
<body>
<div class="form">
<h2 align="center">YOUR CURRENT TASKS</h2>
<table class="styled-table" width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Subject</strong></th>
<th><strong>Task</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>

</tr> 
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr class="active-row"><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["subject"]; ?></td>
<td align="center"><?php echo $row["task"]; ?></td>
<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
<br>
<footer>
  <table align="right" style="padding: 2%; border: 2px solid #FFFFFF;text-align: left; width: 100px; background-color:#6A9A8B">
	<tr>
  <td><a style="color:black" href="insert.php">Insert New Task</a></td>
  <td>       /        </td>
  <td> <a style="color:black" href="dashboard.php">Personal Page</a></td>
  <td>       /        </td>
	<td> <a  style="color:black" href="logout.php">Logout</a> </td>
  <table>
  <table align="left" style="color:black; padding: 2%; border: 2px solid #FFFFFF;text-align: right; width: auto; background-color:#6A9A8B;" font-color="#ffffff">
	<tr>
  <td>Have an issue, questions or just some feedback? Click <a style="color:white" href="../contactus.php">here</a> to contact us now.</td>
  </table>
</footer>
</html>