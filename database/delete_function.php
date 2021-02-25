<?php
include('connection.php');

$sql = "UPDATE participants SET is_deleted=1 where id=$_GET[id] ";
$result = mysqli_query($link, $sql);

if ($result) {
  header("Location: ../views/admin_page.php");
}