<?php
include_once '../session_check2.php';

if (isset($_POST['login'])) {
	include_once '../dbase/dbase.php';
	$event_name = mysqli_real_escape_string($con, $_POST['event_name']);
	$event_date = mysqli_real_escape_string($con, $_POST['event_date']);
	$event_time = mysqli_real_escape_string($con, $_POST['event_time']);
	$location = mysqli_real_escape_string($con, $_POST['location']);
	$post_name = $_SESSION['user_fname'] . ' ' .  $_SESSION['user_lname'];

	$pic_name = $_FILES['image_upload']['name'];
	$pic_tmp = $_FILES['image_upload']['tmp_name'];
	$pic_type = pathinfo($pic_name, PATHINFO_EXTENSION);

	$image = $_FILES['image_upload'];
	if ($pic_type != 'png' && $pic_type != 'jpg' && $pic_type != 'jpeg' && $pic_type != 'gif' && $pic_type != 'PNG' && $pic_type != 'JPG' && $pic_type != 'JPEG' && $pic_type != 'GIF') {
		$_SESSION['flash-error'] = ' <i class="far fa-check-circle"></i>  Picture not Uploaded';
        header("Location: announcement.php");
		exit;
	} else {
		$pic = move_uploaded_file($pic_tmp, "images/$pic_name");
		$insert_announcement = "INSERT INTO announcement_tbl(event_name, event_date, event_time, posted_by, announcement_location, announcement_image)VALUES('$event_name', '$event_date', '$event_time', '$post_name', '$location', '$pic_name')";
		if (mysqli_query($con, $insert_announcement) === true) {
			// echo "inserted";
			// $selet_key = "SELECT * FROM registration_key";
			// $key_query = mysqli_query($con, $selet_key);

			// $num = mysqli_num_rows($key_query);
			// $counter = 0;

			// while ($row = $key_query->fetch_assoc()) {
			// 	$data = array(
			// 		'body' => $event_name,
			// 		'title' => "Announcement"
			// 	);

			// 	$to = $row['mobile_key'];

			// 	if (sendPushNotification($to, $data)) {
			// 		echo "success";
			// 	}
			// 	$counter++;

			// 	if ($num == $counter) {
			// 		header("Location: ../announcement.php");
			// 	}
			// }
			$_SESSION['flash-success'] = ' <i class="far fa-check-circle"></i>  Announcement added';
			header("Location: announcement.php");
		} else {
			die($con->error);
		}
	}
}

// $pic_name = $_FILES['event_pictures']['name'];
// $pic_tmp = $_FILES['event_pictures']['tmp_name'];
// $pic_type = pathinfo($pic_name, PATHINFO_EXTENSION);
// $date = date("y-m-d");
// $comment = mysqli_real_escape_string($con, $_POST['event_caption']);

// if ($pic_type != 'png' && $pic_type != 'jpg' && $pic_type != 'jpeg' && $pic_type != 'gif') {
// 	header("location:add_data.php");
// 	exit;
// } else {
// 	$pic = move_uploaded_file($pic_tmp, "event_pics/$pic_name");
// 	$insert_pic = "INSERT INTO event_pics (picture, caption, date_posted) VALUES ('$pic_name', '$comment', '$date')";
// 	if (mysqli_query($con, $insert_pic) === TRUE) {
// 		header('location:view_events.php');
// 	} else {
// 		die($con->error);
// 	}
// }
