<?php 
session_start();
include('connection.php');

$password = md5($_POST['password']);
$result = mysqli_query($link, "select * from participants where email = '$_POST[email]' and password = '$password'");

$row = mysqli_fetch_assoc($result);
if ($row) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['vorname'] = $row['vorname'];
    header("Location: ../views/admin_page.php");
} else {
    Header("Location: ../views/login_page.php?error=wrong email or password");
}
