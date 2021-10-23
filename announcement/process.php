<?php 

include_once '../dbase/dbase.php';

if ($_POST['upd_announce']) {
	$id = htmlspecialchars($_POST['id']);
	$event_name = htmlspecialchars($_POST['event_name']);
	$event_date = htmlspecialchars($_POST['event_date']);
	$event_time = htmlspecialchars($_POST['event_time']);

	$update_announce = "UPDATE announcement_tbl SET event_name = '$event_name', event_date = '$event_date', event_time = '$event_time' WHERE announcement_id = '$id'";
	if (mysqli_query($con, $update_announce) === true) {
		header("Location: ../announcement.php");
	}
	else{
		die($con->error);
	}
}


if (isset($_GET['delete_id'])){
	$id = htmlspecialchars($_GET['delete_id']);
	$delete_user =  "DELETE FROM announcement_tbl WHERE announcement_id = '$id'";
	if (mysqli_query($con, $delete_user) === true) {
			header("Location: ../announcement.php");
		}
		else{
			die($con->error);
		}

			
}
 ?>