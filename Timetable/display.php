<?php
$host = "localhost"; //IP of your database
$userName = "root"; //Username for database login
$userPass = ""; //Password associated with the username
$database = "simplesched"; //Your database name
$msg = "";
$connectQuery = mysqli_connect($host,$userName,$userPass,$database);

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM schedule ORDER BY slno DESC";
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0)
	{
	
    }else{
        $msg = "No Inputs found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Schedule</title>
</head>
<body>
<div align="center" class="form" id="container1" style="border: 2px solid #000">
<h1>School Timetable</h1>
    <?php echo $msg;?>
    <div class="container" style="background-color:#D5F4FF; border: 2px solid #000">
    <br>
    <table align='center' border="1px" style="width:600px; line-height:40px;">
        <thead>
            <tr>
                <th><strong>Day</strong></th>
                <th><strong>Period</strong></th>
                <th><strong>Plan</strong></th>
                <th><strong>Edit</strong></th>
                <th><strong>Delete</strong></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $count=1;
                $sel_query="Select * from schedule ORDER BY slno desc;";
                $result = mysqli_query($connectQuery,$sel_query);
                while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row["day"]; ?></td>
                    <td><?php echo $row["period"]; ?></td>
                    <td><?php echo $row["plan"]; ?></td>
                    <td align="center"><a href="edit.php?slno=<?php echo $row["slno"]; ?>">Edit</a>
                    <td align="center"><a href="delete.php?slno=<?php echo $row["slno"]; ?>">Delete</a>
                </tr>
            <?php $count++; } ?>
        </tbody>
    </table>
<br>

</div>


<table align="right" style="border-radius: 5px; padding: 2%; border: 2px solid #FFFFFF;text-align: left; width: 100px; background-color:#AE8B5D">
	<tr>
  <td><a style="color:#ffffff" href="index.php">Add to Schedule</a></td>
  <td>       /        </td>
  <td><a style="color:#ffffff" href="../dashboard.php">Personal Page</a></td>
  <td>       /        </td>
	<td><a style="color:#ffffff" href="logout.php">Logout</a> </td>
  <table>

</div>

</body>
  </html>

  <style type="text/css">
  #container1 {
  border-radius: 5px;
  background-color: #6196C6;
  padding: 5px;
    }

    body {
	background-color: #99CCFF;
  width: 60%;
  margin-left: 20%;
}
</style>