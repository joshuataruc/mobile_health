<?php 
include_once '../dbase/dbase.php';
if (isset($_POST['upd_btn'])) {
	$reminder_id = htmlspecialchars($_POST['reminder_id']);
	$reminder_name = htmlspecialchars($_POST['reminder_name']);
	$reminder_content = htmlspecialchars($_POST['reminder_content']);

	$update_notif = "UPDATE notification_tbl SET reminder_name = '$reminder_name', reminder_content = '$reminder_content' WHERE notification_id = '$reminder_id'";
	if (mysqli_query($con, $update_notif) === true) {
		header("Location: ../notification.php");
	}
	else{
		die($con->error);
	}
}

if (isset($_GET['delete_id'])){
	$id = htmlspecialchars($_GET['delete_id']);
	$delete_user =  "DELETE FROM notification_tbl WHERE notification_id = '$id'";
	if (mysqli_query($con, $delete_user) === true) {
			header("Location: ../notification.php");
		}
		else{
			die($con->error);
		}

			
}

?>