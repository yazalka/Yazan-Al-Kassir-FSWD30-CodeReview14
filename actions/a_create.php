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

       
        session_start();

        if(!isset($_SESSION['name'])) {   // if not logged in go to home page

        header('location: index.php');

        }
 ?>

<!DOCTYPE html>

<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Successfully Created</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/deleteStyle.css">

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

</head>

<body>
           <!-- /header -->
        <header id="header">

          <img id="logo" src="../css/music-logo.png" alt="logo">
          <h3>Vienna</h3>

            <div class="container-fluid row">
                <h4><?= $_SESSION['name'] .'&nbsp;' ?></h4>
                <a id="logout-btn" href="logout.php">| Logout</a>
            </div>

        </header>


            <div class="box container-fluid text-center">
                <h1>New Event has been Successfully Created.</h1>
                <a href='../create.php'><button type='button'>Back</button></a>
                <a href='../events.php'><button type='button'>Events</button></a>
            </div>

        </body>
    </html>




  


  <?php   } else {

        echo "Error " . $sql . ' ' . $conn->connect_error;

    }

 

    $conn->close();

}

 



?>

