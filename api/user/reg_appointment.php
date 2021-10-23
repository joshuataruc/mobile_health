<?php 
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

	include_once '../connection/conn.php';
	include_once '../query/insert/appointment.php';

	$data = json_decode(file_get_contents("php://input"));

	$conn = new Database();
	$db = $conn->connect();
	$insert = new InsertAppointementRegistration($db);

	$insert->firstname = $data->firstname;
	$insert->middlename = $data->middlename;
	$insert->lastname = $data->lastname;
	$insert->contact = $data->contact;
	$insert->appointment_id = $data->appointment_id;
	$insert->user_id = $data->user_id;
	$insert->interval = $data->interval;

	if ($insert->insert_appointment_reg()) {
		echo json_encode(array('message' => '1'));
	} else {
		echo json_encode(array('message' => '0'));
	}
 ?>