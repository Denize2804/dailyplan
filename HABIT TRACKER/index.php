<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Habit Tracker</title>
  </head>
  <body>
    <br>
    <div class="container">
      <h1>HABITS</h1>
      <br>
      <form style= "width: 200px; border:2px solid #FE7070; border-radius: 15px;" class="add-habit" method = "post" action="index.php">
      <br>
        <input type="text"name="habit" placeholder="Enter Habit Name" required  />
        <input type="number" name="reps" placeholder="# of Repetitions" min="1" required /><br>
        <div class="frequency">
          <label for="timeframe">Frequency:</label>
          <select name="timeframe" id="timeframe">
            <option value="Daily">Daily</option>
            <option value="Weekly">Weekly</option>
            <option value="Monthly">Monthly</option>
            <option value="Yearly">Yearly</option>
          </select>
        </div>		
        <br>
        <input type="submit" name = "Submit" value="Submit" />
      </form>
      
<ul >
  <div class=currenthabits style= "border:2px solid #000; border-radius: 15px";
>
<br>
  <h2>View Current Habits</h2>
<table class=styled-table style= "border:2px border-collapse:collapse;">
  <thead>
    <tr>
    <th><strong>Sl.no</strong></th>
    <th><strong>Habit</strong></th>
    <th><strong>Repetitions</strong></th>
    <th><strong>Timeframe</strong></th>
    </tr>
  </thead>
<tbody>
  <?php
  $count=1;
  $sel_query="Select * from daily_habits ORDER BY id desc;";
  $result = mysqli_query($con,$sel_query);
  while($row = mysqli_fetch_assoc($result)) { ?>
  <tr class="styled-row">
  <td style="align:center"><?php echo $count; ?></td>
  <td style="align:center"><?php echo $row["habit"]; ?></td>
  <td style="align:center"><?php echo $row["reps"]; ?></td>
  <td style="align:center"><?php echo $row["timeframe"]; ?></td>
  <td style="align:center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
  </td>
  </tr>
  <?php $count++; } ?>
</tbody>
</table>
  </div>
      </ul>
    </div>
<br>
 
<div>
<table align="left" style="color:white; padding: 2%; border: 2px solid #FFFFFF;text-align: right; width: 150; background-color: #004F6F; border-radius: 10px; font-color=#ffffff">
	<tr>
  <td>Have an issue, questions or just some feedback? Click <a style="color:white" href="../contactus.php">here</a> to contact us now.</td>
  </table>
  <br>
  <br>
  <table align="right" class=table1 style="padding: 3%; border: 2px solid #FFFFFF;text-align-left: 100px; width: 100px; background-color:#004F6F; border-radius: 10px">
	<tr>
  <td><a style="color:#ffffff;" href="../index.php">Home</a></td>
  <td style="color:#ffffff;">       /        </td>
  <td> <a style="color:#ffffff;" href="../dashboard.php">Personal Page</a></td>
  <td style="color:#ffffff;">       /        </td>
	<td> <a style="color:#ffffff;" href="../logout.php">Logout</a> </td>
  </table>

  </div>
  </body>
  </html>
 <?php

$con = mysqli_connect("localhost","root","","simplesched");

if(isset($_POST['Submit']))
{
    $habit = $_POST['habit'];
    $reps = $_POST['reps'];
    $timeframe = $_POST['timeframe'];

    $query = "INSERT INTO daily_habits (habit,reps,timeframe) VALUES ('$habit','$reps','$timeframe')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Date values Inserted";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Date values Inserting Failed";
        header("Location: index.php");
    }
}
?>


<style type="text/css">
{
    margin: 0;
    padding: 0;
  }
  .table1{
    margin-left: 30%;
    margin-top:3%;
    

  }

  .currenthabits{
    margin-left:-20px;
    margin-right:10px;
  }
  html {
    box-sizing: border-box;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }
  
  body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen",
      "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue",
      sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    background: #9A5855;
  }
  
  .container {
    padding: 20px;
    background-color: #FFE4E0;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    
    

  }
  
  h2 {
    text-align: center;
    font-weight: 400;
  }
  .habits {
    text-align: left;
    list-style: none;
  }
  .habits li {
    border-bottom: 1px solid gray;
    padding: 10px;
    font-weight: 400;
    display: flex;
    align-items: center;
  }
  .habits label {
    flex: 1;
    cursor: pointer;
  }
  .habits input {
    margin-right: 12px;
  }
  .habits input {
    display: none;
  }
  .habits input + label:before {
    content: "+";
    margin-right: 12px;
  }
  .habits input + label span {
    font-weight: 200;
    font-size: 0.75rem;
  }
  .habits input:checked + label {
    text-decoration: line-through;
    color: lightgrey;
  }
  .habits button {
    padding-left: 30px;
    background: none;
    margin: 5px;
    outline: 0;
    border: 0;
    border-radius: 10px;
  }
  .add-habit {
  
    margin-left: 160px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid black;
    margin-left:170px;
  }
  
  .add-habit input {
    padding: 10px;
    margin: 5px;
    outline: 0;
    border: 0;
    border-radius: 100px;
  }
  
  .add-habit select {
    border-radius: 10px;
    border: none;
  }
  
  .frequency {
    width: 40%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: row;
  }
  .styled-table {
    border-collapse: collapse;
    margin: 25px 50px;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #FE7070;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #A36974;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #FE7070 ;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>