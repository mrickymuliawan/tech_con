<?php include('connection.php');

//define the input value in variables
$first = mysqli_real_escape_string($link, $_POST['vorname']);
$last = mysqli_real_escape_string($link, $_POST['nachname']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$company = mysqli_real_escape_string($link, $_POST['firma']);
$room = mysqli_real_escape_string($link, $_POST['room_id']);

//create one participant
$sql = "INSERT INTO participants (vorname, nachname, email, firma, room_id) VALUES ('$first', '$last', '$email', '$company', '$room');";
$result = mysqli_query($link, $sql);

//check if query is sent correctly or not 
if ($result) {
    //if yes, send vorname with header to logged_in page
    Header("Location: ../views/confirmation.php?success=Registrierung war erfolgreich!");
} else {
    echo "error found: " . mysqli_error($link);
}
