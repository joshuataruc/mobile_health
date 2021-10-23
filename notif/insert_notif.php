<?php 
include_once '../session_check2.php';
include_once '../dbase/dbase.php';

echo $reminder_name = mysqli_real_escape_string($con, $_POST['reminder_name']);
echo $reminder_content = mysqli_real_escape_string($con, $_POST['reminder_content']);

$insert_notif = "INSERT INTO notification_tbl (reminder_name, reminder_content)VALUES('$reminder_name', '$reminder_content')";
if (mysqli_query($con, $insert_notif) === true) {
		$selet_key = "SELECT * FROM registration_key";
		$key_query = mysqli_query($con, $selet_key);

		$num = mysqli_num_rows($key_query);
		$counter = 0;

		while ($row = $key_query->fetch_assoc()){
			$data = array(
				'body' => $reminder_name,
				'title' => "Notification"
			);

			$to = $row['mobile_key'];

			if (sendPushNotification($to, $data)) {
				echo "success";
			}
			$counter++;
			
			if ($num == $counter) {
				header("Location: ../notification.php");
			}
		}
}
else{
	die($con->error);
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
