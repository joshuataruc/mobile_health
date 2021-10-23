<?php 
include_once '../dbase/dbase.php';

if (isset($_POST['upd_users'])) {
	$id = htmlspecialchars($_POST['id']);
	$fname = htmlspecialchars($_POST['fname']);
	$midname = htmlspecialchars($_POST['midname']);
	$lname = htmlspecialchars($_POST['lname']);
	$username = htmlspecialchars($_POST['username']);
	$dob = htmlspecialchars($_POST['dob']);
	$cont_num = htmlspecialchars($_POST['cont_num']);
	$address = htmlspecialchars($_POST['address']);
	$password = htmlspecialchars(md5($_POST['password']));

	if (empty($password)) {
		$update_users = "UPDATE user_information_tbl SET username = '$username', first_name = 'fname', last_name = 'lname',	middle_name = '$midname', dob = '$dob', address = '$address', cont_number = '$cont_num' WHERE id = '$id'";
		if (mysqli_query($con, $update_users) === true) {
			header("Location: ../user_acc.php");
		}
		else{
			die($con->error);
		}
	}
	else{
	$update_users = "UPDATE user_information_tbl SET username = '$username', password = '$password', first_name = '$fname', last_name = '$lname',	middle_name = '$midname', dob = '$dob', address = '$address', cont_number = '$cont_num' WHERE id = '$id'";
		if (mysqli_query($con, $update_users) === true) {
			header("Location: ../user_acc.php");
		}
		else{
			die($con->error);
		}
	}

}

if (isset($_GET['delete_id'])) {
	$id = htmlspecialchars($_GET['delete_id']);
	$delete_user =  "DELETE FROM user_information_tbl WHERE id = '$id'";
	if (mysqli_query($con, $delete_user) === true) {
			header("Location: ../user_acc.php");
		}
		else{
			die($con->error);
		}

}
