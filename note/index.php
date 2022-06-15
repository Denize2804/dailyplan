<?php

/** @var Connection $connection */
$connection = require_once 'pdo.php';
// Read notes from database
$notes = $connection->getNotes();

$currentNote = [
    'id' => '',
    'title' => '',
    'description' => '',
];
if (isset($_GET['id'])) {
    $currentNote = $connection->getNoteById($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>
<body style= "background-image: linear-gradient(#547a82,#e5eec1,#547a82)">
<div>
<br>
<h2 align= center style= "font-family:bebas neue">_____________YOUR NOTES PAGE_____________<h2>
    
<form class="new-note" action="create.php" method="post">
        <input type="hidden" name="id" value="<?php echo $currentNote['id'] ?>">
        <input type="text" name="title" placeholder="Note title" autocomplete="off"
               value="<?php echo $currentNote['title'] ?>">
        <textarea name="description" cols="30" rows="4"
                  placeholder="Note Description"><?php echo $currentNote['description'] ?></textarea>
        <button>
            <?php if ($currentNote['id']): ?>
                Update
            <?php else: ?>
                New note
            <?php endif ?>
        </button>
    </form>
    <div class="notes">
        <?php foreach ($notes as $note): ?>
            <div class="note" style= "background-color: #a2d4ab">
                <div class="title">
                    <a href="?id=<?php echo $note['id'] ?>">
                        <?php echo $note['title'] ?>
                    </a>
                </div>
                <div class="description">
                    <?php echo $note['description'] ?>
                </div>
                <small><?php echo date('d/m/Y H:i', strtotime($note['create_date'])) ?></small> 
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $note['id'] ?>">
                    <button class="close">X</button>
                </form>
                <br>
            </div>
        <?php endforeach; ?></div>
    
</div>
</body>
<br>
<footer >
  <table align="right" style="color:white; padding: 2%; border: 2px solid #FFFFFF;text-align: right; width: 50px; background-color:#547a82;" font-color="#ffffff">
	<tr>
  <td><a style="color:white" href="../index.php">Home</a></td>
  <td>       /        </td>
  <td> <a style="color:white" href="../dashboard.php">Personal Page</a></td>
  <td>       /        </td>
	<td> <a style="color:white" href="../logout.php">Logout</a> </td>
        </tr>
        </table>
  <table align="left" style="color:white; padding: 2%; border: 2px solid #FFFFFF;text-align: right; width: auto; background-color:#547a82;" font-color="#ffffff">
	<tr>
  <td>Have an issue, questions or just some feedback? Click <a style="color:white" href="../contactus.php">here</a> to contact us now.</td>
        </table>
</footer>
  </html>
