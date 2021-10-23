<?php 

	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

	include_once '../connection/conn.php';
	include_once '../query/read/announcement.php';

	$data = json_decode(file_get_contents("php://input"));

	$conn = new Database();
	$db = $conn->connect();
	$read = new ReadAnnouncement($db);

	$result = $read->read_announcement();
	$num = $result->rowCount();

	if ($num > 0) {

		$post_array['data'] = array();
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

			$post_item = array(
				'id' => $row['announcement_id'],
				'name' => $row['event_name'],
				'datetime' => $row['event_date']." ".$row['event_time'],
				'by' => $row['posted_by']
			);

			array_push($post_array['data'], $post_item);
		} 
		echo json_encode($post_array);
	} else {
		echo json_encode(array('message' => 'fail'));
	}
?>