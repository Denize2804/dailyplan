<?php
require('db.php');
$slno=$_REQUEST['slno'];
$query = "DELETE FROM schedule WHERE slno=$slno"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: display.php"); 
?>