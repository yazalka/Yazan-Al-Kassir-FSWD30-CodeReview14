
    <?php  
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
        <title>Create Event</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/create_edit_Style.css">
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

<div class="event text-center col-12">
    
    <h4>Add Event</h4> 

</div>

<div class="box container-fluid col-10">
    

     


    

 

            <form action="actions/a_create.php" method="post">

                <div class="box1 row">
                    <h5>Event Name:</h5>
                    <input type="text" name="event_name" placeholder="Name" />
                </div>

                <div class="box2 row">
                    <h5>Event Start Date:</h5>
                    <input name="event_start_date" placeholder="Start Date" />
                </div>

                <div class="box3 row">
                    <h5>Event End Date:</h5>
                    <input  name="event_end_date" placeholder="End Date" />
                </div>

                <div class="box4 row">
                    <h5> Event Descreption:</h5>
                    <textarea class="descreption" name="event_descreption" placeholder="Descreption" ></textarea>
                </div>

                <div class="box5 row">
                    <h5>Event image:</h5>
                    <input class="image" name="event_image" placeholder="image(url)" />
                </div>
                    
                <div class="box6 row">
                    <h5>Event Contact Email:</h5>
                    <input  name="event_contact_email" placeholder="Contact Email" />
                </div>     

                <div class="box7 row">
                    <h5> Event Phone Number:</h5>
                    <input name="event_phone_number" placeholder="Phone Number" />
                </div>     

                <div class="box8 row">
                    <h5>Event Address:</h5>

                    <input name="event_address" placeholder="Address" />
                </div>

                <div class="box9 row">
                    <h5> Event Url:</h5>
                    <input name="event_url" placeholder="Url" />
                </div>

                <div class="box10 row">
                    <h5>Event Type:</h5>
                    <input name="event_type" placeholder="Type" />
                </div>  

                <div class="box11 row">
                    <h5>Event Capacity:</h5>
                    <input name="event_capacity" placeholder="Capacity" />                    
                </div> 

                <div class="box12 row">
                    <button type="submit">Insert Event</button>
                    <a href="events.php"><button type="button">Back</button>
                </div>                    

            </form>
</div>




    <footer id="footer">
        <div>   
             2017-2018 &copy; | Vienna
        </div>
    </footer>       

</body>

</html>