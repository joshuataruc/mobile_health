<?php 
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

	include_once '../connection/conn.php';
	include_once '../query/insert/key.php';

	$data = json_decode(file_get_contents("php://input"));

	$conn = new Database();
	$db = $conn->connect();

	$insert = new InsertKey($db);

	$insert->key = $data->key;

	if ($insert->insert_key()) {
		echo json_encode(array('message' => '1'));
	} else {
		echo json_encode(array('message' => '0'));
	}
 ?>