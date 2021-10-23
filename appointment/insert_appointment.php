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

function sendPushNotification($to = "", $data = array()){

$apiKey = "AAAA9XO5jMA:APA91bGE6RkBEt9q7XHUBnytKaxbbwuBs84qwSp8MXcWCJqoF0cIlf99RshvvxPWVsgW_0bWfxBkc13gR4ZS5Gsb9-cr1Km2PS1PNYG_zr1mTMoMm-woZz-PgfFQktAbtRYuZxCWkhDE";
	$fields = array('to' => $to, 'notification' => $data);

	$headers = array('Authorization: key='.$apiKey, 'Content-Type: application/json');

	$url = 'https://fcm.googleapis.com/fcm/send';

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

	$result = curl_exec($ch);
	curl_close($ch);
	return json_decode($result, true);
}


 ?>
