<?php 
include_once '../dbase/dbase.php';
if (isset($_POST['upd_btn'])) {
	$id = htmlspecialchars($_POST['id']);
	$appoint_name = htmlspecialchars($_POST['appoint_name']);
	$event_date = htmlspecialchars($_POST['event_date']);
	$appoint_time = htmlspecialchars($_POST['appoint_time']);
	$sched = htmlspecialchars($_POST['appoint_end']);

	$update = "UPDATE appointment SET appointment_name = '$appoint_name', appointment_date = '$event_date', appointment_time = '$appoint_time', appointment_end = '$sched' WHERE appointment_id = '$id'";
	if (mysqli_query($con, $update) === true) {
		header("Location: ../appointment.php");
	}
	else{
		die($con->error);
	}
}

if (isset($_GET['delete_id'])) {
	$id = htmlspecialchars($_GET['delete_id']);
	$delete_user =  "DELETE FROM appointment WHERE appointment_id = '$id'";
	if (mysqli_query($con, $delete_user) === true) {
			header("Location: ../appointment.php");
		}
		else{
			die($con->error);
		}
}

 ?>