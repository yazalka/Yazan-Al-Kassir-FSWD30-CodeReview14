<?php

require_once 'db_connect.php';

 

if($_POST) {

        $e_name = $_POST['event_name'];

        $e_start_date = $_POST['event_start_date'];

        $e_end_date = $_POST['event_end_date'];

        $e_descreption = $_POST['event_descreption'];

        $e_image = $_POST['event_image'];

        $e_contact_email = $_POST['event_contact_email'];

        $e_phone_number = $_POST['event_phone_number'];

        $e_address = $_POST['event_address'];

        $e_url = $_POST['event_url'];

        $e_type = $_POST['event_type']; 

        $e_capacity = $_POST['event_capacity'];
 

    $sql = "INSERT INTO events (e_name, e_start_date, e_end_date, e_descreption, e_image, e_contact_email, e_phone_number, e_address, e_url, e_type, e_capacity) VALUES ('$e_name', '$e_start_date', '$e_end_date','$e_descreption','$e_image','$e_contact_email','$e_phone_number','$e_address','$e_url','$e_type','$e_capacity')";

    if($conn->query($sql) === TRUE) {

        echo "<p>New Event Successfully Created</p>";

        echo "<a href='../create.php'><button type='button'>Back</button></a>";

        echo "<a href='../events.php'><button type='button'>Events</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $conn->connect_error;

    }

 

    $conn->close();

}

 

?>