<?php 
include_once '../session_check2.php';

if (isset($_POST['login'])) {
	include_once '../dbase/dbase.php';
	$event_name = mysqli_real_escape_string($con, $_POST['event_name']);
	$event_date = mysqli_real_escape_string($con, $_POST['event_date']);
	$event_time = mysqli_real_escape_string($con, $_POST['event_time']);
	$post_name = $_SESSION['user_fname'] . ' ' .  $_SESSION['user_lname'];

	$insert_announcement = "INSERT INTO announcement_tbl(event_name, event_date, event_time, posted_by)VALUES('$event_name', '$event_date', '$event_time', '$post_name')";
	if (mysqli_query($con, $insert_announcement) === true) {
		$selet_key = "SELECT * FROM registration_key";
		$key_query = mysqli_query($con, $selet_key);

		$num = mysqli_num_rows($key_query);
		$counter = 0;

		while ($row = $key_query->fetch_assoc()){
			$data = array(
				'body' => $event_name,
				'title' => "Announcement"
			);

			$to = $row['mobile_key'];

			if (sendPushNotification($to, $data)) {
				echo "success";
			}
			$counter++;
			
			if ($num == $counter) {
				header("Location: ../announcement.php");
			}
		}
	}
	else{
		die($con->error);
	}

}


 ?>