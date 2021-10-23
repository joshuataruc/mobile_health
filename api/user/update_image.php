<?php 

	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');


	$targetpath = "image/" . basename($_FILES["file"]["name"]);
	$value = $_FILES["file"]["tmp_name"];


	if (move_uploaded_file($value, $targetpath)) {
		echo json_encode(array('message' => 'success'));
	}else {
		echo json_encode(array('message' => 'fail'));
	}

 ?>