
<?php require_once 'actions/a_view.php'; ?>

<!DOCTYPE html>
	<html>
		<head>
			<title>event view</title>
			<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="css/viewStyle.css">
			<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	  		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		</head>
		<body>

	       <!-- /header -->
       <!-- /header -->
        <header id="header">

          <img id="logo" src="css/music-logo.png" alt="logo">
          <h3>Vienna</h3>

			<div class="container-fluid row">
	    		<h4><?= $_SESSION['name'] .'&nbsp;' ?></h4>
				<a id="logout-btn" href="logout.php">| Logout</a>
			</div>

        </header>

	        <?php if(isset($e_name)) { ?>
	            <!-- if event name exist the show event name and its details --> 
		<div class="mainbox container-fluid row col-lg-12">
			
		
			<div class="box">
				<img class="" src="<?= $e_image ?>" alt="event">
			</div>
			<div class="box2 col-lg-7">
				<h1><?= $e_name ?></h1/>
				<h3><?= $e_type ?></h3>	
				<h6>Starts: <?= $e_start_date ?></h6>
				<h6>Ends: <?= $e_end_date ?></h6>	
				<p class="col-lg-12"><?= $e_descreption ?></p>

			</div>

			<div class="box3">
				<span>Address:&nbsp;<?= $e_address ?></span>
				<p>Phone:&nbsp;+<?= $e_phone_number ?></p>
				<p>Email:&nbsp;<?= $e_contact_email ?></p>
				<a href="#"><?= $e_url ?></a>
			</div>
			
		</div>
		<div class="button">
			<a href="events.php"><button class="" type="submit">Back</button></a>
		</div>
		
<?php }?>     










<?php  

	mysqli_close($conn);

?>

        <footer id="footer">
            <div>   
                 2017-2018 &copy; | Vienna
            </div>
        </footer>    
	</body>
</html>