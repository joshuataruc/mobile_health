<?php

include_once '../dbase/dbase.php';

if ($_POST['upd_announce']) {
	$id = htmlspecialchars($_POST['id']);
	$event_name = htmlspecialchars($_POST['event_name']);
	$event_date = htmlspecialchars($_POST['event_date']);
	$event_time = htmlspecialchars($_POST['event_time']);
	$location = mysqli_real_escape_string($con, $_POST['location']);
	echo $image = $_FILES['image_upload']['name'];

	if ($image) {
		echo $pic_name = $_FILES['image_upload']['name'];
		$pic_tmp = $_FILES['image_upload']['tmp_name'];
		$pic_type = pathinfo($pic_name, PATHINFO_EXTENSION);
		if ($pic_type != 'png' && $pic_type != 'jpg' && $pic_type != 'jpeg' && $pic_type != 'gif' && $pic_type != 'PNG' && $pic_type != 'JPG' && $pic_type != 'JPEG' && $pic_type != 'GIF') {
			$_SESSION['flash-error'] = ' <i class="far fa-check-circle"></i>  Picture not Uploaded';
			header("Location: update_announcement_form.php?announcement_id=$id");
			exit;
		} else {
			$pic = move_uploaded_file($pic_tmp, "images/$pic_name");
			$update_announce = "UPDATE announcement_tbl SET event_name = '$event_name', event_date = '$event_date', event_time = '$event_time', announcement_location = '$location', announcement_image = '$pic_name'   WHERE announcement_id = '$id'";
			if (mysqli_query($con, $update_announce) === true) {
				header("Location: ../announcement.php");
			} else {
				die($con->error);
			}
		}
	}
	else{
		$update_announce = "UPDATE announcement_tbl SET event_name = '$event_name', event_date = '$event_date', event_time = '$event_time', announcement_location = '$location' WHERE announcement_id = '$id'";
			if (mysqli_query($con, $update_announce) === true) {
				header("Location: ../announcement.php");
			} else {
				die($con->error);
			}
	}
}


if (isset($_GET['delete_id'])) {
	$id = htmlspecialchars($_GET['delete_id']);
	$delete_user =  "DELETE FROM announcement_tbl WHERE announcement_id = '$id'";
	if (mysqli_query($con, $delete_user) === true) {
		header("Location: ../announcement.php");
	} else {
		die($con->error);
	}
}
