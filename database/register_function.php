<?php

include('connection.php');

//hash the password
$password = md5($_POST['password']);

//create one participant using mysqli
$dataQuery = mysqli_query($link, "insert into participants (vorname, nachname, email, password, firma) values ('$_POST[vorname]', '$_POST[nachname]', '$_POST[email]', '$password', '$_POST[firma]')");

//check if query is sent correctly or not 
if ($dataQuery) {
    //if yes, send vorname with header to logged_in page
    Header("Location: ../views/logged_in.php?name=$_POST[vorname]");
} else {
    echo "error found: " . mysqli_error($link);
}
