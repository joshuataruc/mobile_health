<?php 
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

	include_once '../connection/conn.php';
	include_once '../query/update/password.php';

	$data = json_decode(file_get_contents("php://input"));

	$conn = new Database();
	$db = $conn->connect();
	$update = new UpdatePassword($db);

	$update->profile = $data->profile;
	$update->user_id = $data->id;

	if ($update->update_profile()) {
		echo json_encode(array('message' => '1'));
	} else {
		echo json_encode(array('message' => '0'));
	}
 ?>