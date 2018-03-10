<?php require_once 'actions/db_connect.php'; ?>

<?php 
	session_start();

	if(!isset($_SESSION['name'])){ 		 // if not logged in go to home page.

    	header('location: index.php');
	}

	if(isset($_POST['eventevisit'])) {   

		$event_id = $_POST['event_id'];
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
	}
?>
 <?php 
 			$sql = "select * from events where  event_id =".$event_id."";
			$result = mysqli_query($conn, $sql) or die("failed to query databases");
  ?>