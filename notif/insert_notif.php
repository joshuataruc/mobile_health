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


 ?>