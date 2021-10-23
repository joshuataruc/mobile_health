<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

$dot = json_decode(file_get_contents("php://input"));

$to = $dot->registration_key;

$data = array(
	'body' => "Helloo!!",
	'title' => "Announcement"
);

if (sendPushNotification($to, $data)) {
	echo "success";
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