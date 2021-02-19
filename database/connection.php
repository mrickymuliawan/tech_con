<?php

$link = mysqli_connect('localhost', 'root', '', 'webconia');
// $link = new mysqli('localhost', 'root', '', 'webconia');
if ($link->connect_errno) {
    echo "Failed to connect to MySQL: (" . $link->connect_errno . ")" . $link->connect_error;
}
