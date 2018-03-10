<?php

 

require_once 'db_connect.php';

 

if($_POST) {

        $event_id = $_POST['id'];

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

 

       

 

    $sql = "UPDATE events SET e_name = '$e_name', e_start_date = '$e_start_date', e_end_date = '$e_end_date', e_descreption = '$e_descreption', e_image = '$e_image', e_contact_email = '$e_contact_email', e_phone_number = '$e_phone_number', e_address = '$e_address', e_url = '$e_url', e_type = '$e_type', e_capacity = '$e_capacity' WHERE event_id = {$event_id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../edit.php?id=". $event_id ."'><button type='button'>Back</button></a>";

        echo "<a href='../events.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $conn->error;

    }

 

    $conn->close();

 

}

 

?>