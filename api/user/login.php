<?php 

	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

	include_once '../connection/conn.php';
	include_once '../query/read/user.php';

	$data = json_decode(file_get_contents("php://input"));

	$conn = new Database();
	$db = $conn->connect();
	$read = new ReadUser($db);

	$read->username = $data->username;
	$read->password = md5($data->password);

	$result = $read->read_user_detail();
	$num = $result->rowCount();

	if ($num > 0) {

		$post_array = array();
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

			$post_array = array(
				'id' => $row['id'],
				'username' => $row['username'],
				'firstname' => $row['first_name'],
				'lastname' => $row['last_name'],
				'middlename' => $row['middle_name'],
				'dob' => $row['dob'],
				'address' => $row['address'],
				'contact' => $row['cont_number']
			);
		} 
		echo json_encode($post_array);
	}
?>

