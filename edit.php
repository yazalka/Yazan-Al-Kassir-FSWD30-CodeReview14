<?php

 

require_once 'actions/db_connect.php';

   
        session_start();

        if(!isset($_SESSION['name'])) {   // if not logged in go to home page

        header('location: index.php');

        }
 

if($_GET['id']) {

    $event_id = $_GET['id'];

 

    $sql = "SELECT * FROM events WHERE event_id = {$event_id}";

    $result = $conn->query($sql);

 

    $data = $result->fetch_assoc();

 

    $conn->close();

 

?>

 

<!DOCTYPE html>

<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Edit Event</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">


 <link rel="stylesheet" type="text/css" href="css/editStyle.css">

</head>

<body>
           <!-- /header -->
        <header id="header">

          <img id="logo" src="css/music-logo.png" alt="logo">
          <h3>Vienna</h3>

            <div class="container-fluid row">
                <h4><?= $_SESSION['name'] .'&nbsp;' ?></h4>
                <a id="logout-btn" href="logout.php">| Logout</a>
            </div>

        </header>
 

<fieldset>

    <legend>Edit Event</legend>

 

    <form action="actions/a_edit.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>Event Name</th>

                <td><input type="text" name="event_name" placeholder="Event Name" value="<?php echo $data['e_name'] ?>" /></td>

            </tr>     

            <tr>

                <th>Event Start Date</th>

                <td><input type="text" name="event_start_date" placeholder="Event Start Date" value="<?php echo $data['e_start_date'] ?>" /></td>

            </tr>

            <tr>

                <th>Event End Date:</th>

                <td><input type="text" name="event_end_date" placeholder="Event End Date" value="<?php echo $data['e_end_date'] ?>" /></td>

            </tr>
            <tr>

                 <th>Event Descreption:</th>

                <td><input type="text" name="event_descreption" placeholder="Event Descreption" value="<?php echo $data['e_descreption'] ?>" /></td>

            </tr>
            <tr>

                <th>Event image:</th>

                <td><input type="text" name="event_image" placeholder="Event image(url)" value="<?php echo $data['e_image'] ?>" /></td>

            </tr>
            <tr>

                <th>Event Contact Email:</th>

                <td><input type="text" name="event_contact_email" placeholder="Event Contact Email" value="<?php echo $data['e_contact_email'] ?>" /></td>

            </tr>
            <tr>

                <th>Event Phone Number:</th>

                <td><input type="text" name="event_phone_number" placeholder="Event Phone Number" value="<?php echo $data['e_phone_number'] ?>" /></td>

            </tr>
            <tr>

                <th>Event Address:</th>

                <td><input type="text" name="event_address" placeholder="Event Address" value="<?php echo $data['e_address'] ?>" /></td>

            </tr>
            <tr>

                <th>Event Url:</th>

                <td><input type="text" name="event_url" placeholder="Event Url" value="<?php echo $data['e_url'] ?>" /></td>

            </tr>
             <tr>

                <th>Event Type:</th>

                <td><input type="text" name="event_type" placeholder="Event Type" value="<?php echo $data['e_type'] ?>" /></td>

            </tr>
             <tr>

                <th>Event Capacity:</th>

                <td><input type="text" name="event_capacity" placeholder="Event Capacity" value="<?php echo $data['e_capacity'] ?>" /></td>

            </tr>                                                                                            
            <tr>

                <input type="hidden" name="id" value="<?php echo $data['event_id']?>" />

                <td><button type="submit">Save Changes</button></td>

                <td><a href="events.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

                <footer id="footer">
                    <div>   
                         2017-2018 &copy; | Vienna
                    </div>
                </footer>       

</body>

</html>

 

<?php

}

?>