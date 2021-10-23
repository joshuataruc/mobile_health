<?php 

	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

	include_once '../connection/conn.php';
	include_once '../query/read/notification.php';

	$data = json_decode(file_get_contents("php://input"));

	$conn = new Database();
	$db = $conn->connect();
	$read = new ReadNotification($db);

	$read->notification_id = $data->id;

	$result = $read->read_notification_detail();
	$num = $result->rowCount();

	if ($num > 0) {

		$post_array['data'] = array();
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

			$post_item = array(
				'id' => $row['notification_id'],
				'name' => $row['reminder_name'],
				'content' => $row['reminder_content']
			);

			array_push($post_array['data'], $post_item);
		} 
		echo json_encode($post_array);
	}
?>