<?php
session_start();
include('../database/connection.php');

if (!isset($_SESSION['id'])) {
  header("Location: admin_page.php");
}

if ($_SESSION['id'] != $_GET['id']) {
  header("Location: admin_page.php");
}

$result = mysqli_query($link,"SELECT * FROM participants where id=$_GET[id];");
$row = mysqli_fetch_assoc($result); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="POST" action="../database/edit_function.php">
    <p>Email</p>
    <input type="text" name="email" value="<?= $row['email'] ?>">
    <p>Vorname</p>
    <input type="text" name="vorname" value="<?= $row['vorname'] ?>">
    <p>Nachname</p>
    <input type="text" name="nachname" value="<?= $row['nachname'] ?>">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <br>
    <button type="submit">edit</button>
  </form>
</body>
</html>