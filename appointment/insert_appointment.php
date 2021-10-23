<?php 

include_once '../session_check2.php';
if (isset($_POST['login'])) {
	include_once '../dbase/dbase.php';
	$appoint_name = mysqli_real_escape_string($con, $_POST['appoint_name']);
	$appoint_date = mysqli_real_escape_string($con, $_POST['event_date']);
	$appoint_start = mysqli_real_escape_string($con, $_POST['appoint_start']);
	$appoint_end = mysqli_real_escape_string($con, $_POST['appoint_end']);
	$interval = mysqli_real_escape_string($con, $_POST['interval']);
	

	$insert_appointment = "INSERT INTO appointment (appointment_name, appointment_date, appointment_time, appointment_end, appointment_interval 	) VALUES ('$appoint_name', '$appoint_date', '$appoint_start', '$appoint_end', $interval)";
	if (mysqli_query($con, $insert_appointment) === true) {
		$selet_key = "SELECT * FROM registration_key";
		$key_query = mysqli_query($con, $selet_key);

		$num = mysqli_num_rows($key_query);
		$counter = 0;

		while ($row = $key_query->fetch_assoc()){
			$data = array(
				'body' => $appoint_name,
				'title' => "Appointment"
			);

			$to = $row['mobile_key'];

			if (sendPushNotification($to, $data)) {
				echo "success";
			}
			$counter++;
			
			if ($num == $counter) {
				header("Location: ../appointment.php");
			}
		}
	}
	else{
		die($con->error);
	}
}


 ?>