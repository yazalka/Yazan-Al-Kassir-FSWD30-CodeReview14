<?php

 

require_once 'db_connect.php';

 

if($_POST) {

    $event_id = $_POST['id'];

 

    $sql = "DELETE FROM events WHERE event_id = {$event_id}";

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
        <title> Successfully Deleted</title>
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
                <h1>Event has been Successfully deleted.</h1>
                <a href='../events.php'><button type='button'>Back</button></a>
            </div>

        </body>
    </html>




  <?php   } else {

        echo "Error updating record : " . $conn->error;

    }

 

    $conn->close();

}

 
 ?>
