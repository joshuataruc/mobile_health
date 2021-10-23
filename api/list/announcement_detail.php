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

	$read->announcement_id = $data->id;

	$result = $read->read_announcement_detail();
	$num = $result->rowCount();

	if ($num > 0) {

		$post_array['data'] = array();
		while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

			$post_item = array(
				'announcement_id' => $row['announcement_id'],
				'event_name' => $row['event_name'],
				'event_date' => $row['event_date'],
				'event_time' => $row['event_time'],
				'posted_by' => $row['posted_by']
			);

			array_push($post_array['data'], $post_item);
		} 
		echo json_encode($post_array);
	}
?>