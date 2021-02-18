<?php include('connection.php');

$password = md5($_POST['password']);
$result = mysqli_query($link, "select * from participants where email = '$_POST[email]' and password = '$password'");

$row = mysqli_fetch_assoc($result);

if ($row) {
    header("Location: ../views/logged_in.php/name=$row[vorname]");
} else {
    Header("Location: ../views/login_page.php?error=wrong email or password");
}
