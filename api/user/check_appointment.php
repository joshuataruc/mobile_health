<?php 

	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

	include_once '../connection/conn.php';
	include_once '../query/read/reg_appointment.php';

	$data = json_decode(file_get_contents("php://input"));

	$conn = new Database();
	$db = $conn->connect();
	$read = new ReadAppointment($db);

	$read->user_id = $data->user_id;
	$read->appointment_id = $data->appointment_id;

	$result = $read->read_appointment_detail();
	$num = $result->rowCount();

	if ($num > 0){
		echo json_encode(array('message' => '1'));
	} else {
		echo json_encode(array('message' => '0'));
	}
?>