<?php

 

$localhost = "127.0.0.1";

$username = "root";

$password = "";

$dbname = "cr14_yazan_al_kassir_bigevents";

 

// create connection

$conn = new mysqli($localhost, $username, $password, $dbname);

 

// check connection

if($conn->connect_error) {

    die("connection failed: " . $connect->connect_error);

} else {

    // echo "Connected.";

}

 

?>