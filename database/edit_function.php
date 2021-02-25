<?php

include('connection.php');

$sql = "UPDATE participants SET email='$_POST[email]', vorname='$_POST[vorname]', nachname='$_POST[nachname]' 
        where id=$_POST[id] ";
$result = mysqli_query($link, $sql);

if ($result) {
  header("Location: ../views/admin_page.php");
}