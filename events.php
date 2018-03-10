<?php require_once 'actions/a_events.php'; ?>

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
      <title>Home Page</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/eventStyle.css">

      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
      <script type="text/javascript" src="js/script.js"></script> 

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
        <div class="nav col-lg-12">
        	<a href="create.php"><button class="create btn info" type="button"><i class="fas fa-plus-circle"></i>&nbsp;Create Event</button></a>
        </div>
		<hr>
       <div class=" col-lg-12 col-md-12 col-sm-12">
		<div class="box row">
			
		 		
<?php 
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

?>
	
		

	
		 			
		<div  class="container1">		
			<img src="<?= $row["e_image"] ?>" class="eventfoto" alt="event">
			 <h5><?= $row["e_name"] ?></h5>
		<div class="container2">
			
		
			<form action='view.php' method='post'>
				
					<input id="visit" type='hidden' name='event_id' value="<?= $row['event_id'] ?>"> 
					<input id="visit" type='hidden' name='event_name' value="<?=$row['e_name']?>">
					<input id="visit" type='hidden' name='event_start_date' value="<?=$row['e_start_date']?>">
					<input id="visit" type='hidden' name='event_end_date' value="<?=$row['e_end_date']?>">
					<input id="visit" type='hidden' name='event_descreption' value="<?=$row['e_descreption']?>">
					<input id="visit" type='hidden' name='event_image' value="<?=$row['e_image']?>">
					<input id="visit" type='hidden' name='event_contact_email' value="<?=$row['e_contact_email']?>">
					<input id="visit" type='hidden' name='event_phone_number' value="<?=$row['e_phone_number']?>">
					<input id="visit" type='hidden' name='event_address' value="<?=$row['e_address']?>">
					<input id="visit" type='hidden' name='event_url' value="<?=$row['e_url']?>">
					<input id="visit" type='hidden' name='event_type' value="<?=$row['e_type']?>">
					<input id="visit" type='hidden' name='event_capacity' value="<?=$row['e_capacity']?>">
					<input class="button btn success" id="visit" type='submit' name='eventevisit' value="View Event">
					<?php echo
					"<a href='edit.php?id=". $row['event_id'] ."'><button class='edit btn warning' type='button'><i class='fas fa-edit'>&nbsp;</i>Edit</button></a>
					<a href='delete.php?id=". $row['event_id'] ."'><button class='delete btn danger' type='button'><i class='fas fa-trash-alt'>&nbsp;</i>Delete</button></a>";
					 ?>
		</div>
			</form>
		</div>

	 	




<?php  

	}

	mysqli_close($conn);

?>
					<hr>

				</div>

			</div>

				<footer id="footer">
					<div>	
						 2017-2018 &copy; | Vienna
					</div>
				</footer>			
		</body>
	</html>
