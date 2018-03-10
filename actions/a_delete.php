<?php

 

require_once 'db_connect.php';

 

if($_POST) {

    $event_id = $_POST['id'];

 

    $sql = "DELETE FROM events WHERE event_id = {$event_id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Event has been Successfully deleted.</p>";

        echo "<a href='../index.php'><button type='button'>Back</button></a>";

    } else {

        echo "Error updating record : " . $conn->error;

    }

 

    $conn->close();

}

 

?>