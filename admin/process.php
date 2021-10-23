<?php 
include_once '../session_check2.php';
include_once '../dbase/dbase.php';

if (isset($_POST['update_btn'])) {
	echo $id = htmlspecialchars($_POST['id']);
	$fname = htmlspecialchars($_POST['fname']);
	$midname = htmlspecialchars($_POST['midname']);
	$lname = htmlspecialchars($_POST['lname']);
	$username = htmlspecialchars($_POST['username']);
	$position = htmlspecialchars($_POST['position']);
	$cont_num = htmlspecialchars($_POST['cont_num']);
	$address = htmlspecialchars($_POST['address']);
	$password = htmlspecialchars(md5($_POST['password']));

	if (empty($password)) {
		$update_admin = "UPDATE admin_registration_tbl SET username = '$username',  first_name = '$fame',  last_name = '$lname', mid_name = 'midname', address = '$address', cont_number = '$cont_num', position = '$position' WHERE id = '$id'";
		if (mysqli_query($con, $update_admin) === true) {
			header("Location: ../admins.php");
		}
		else{
			die($con->error);
		}
		
	}
	else{
		$update_admin = "UPDATE admin_registration_tbl SET username = '$username', password = '$password',  first_name = '$fname',  last_name = '$lname', mid_name = 'midname', address = '$address', cont_number = '$cont_num', position = '$position' WHERE id = '$id'";
		if (mysqli_query($con, $update_admin) === true) {
			$update_acc = "UPDATE admin_acc_tbl SET username = '$username', password = '$password' WHERE id = '$id'";
			if (mysqli_query($con, $update_acc) === true) {
				if ($id === $_SESSION['user_id']) {
					session_destroy();
					header('location:../index.php');
				}
				else{
					header("Location: ../admins.php");
				}
			}
			else{
				die($con->error);
			}
		}
		else{
			die($con->error);
		}
		
	}

}

if (isset($_GET['delete'])) {
	$delete_id = htmlspecialchars($_GET['delete']);
	$delete = "DELETE FROM admin_registration_tbl WHERE id = '$delete_id'";
	if (mysqli_query($con, $delete) === true) {
		$delete_acc = "DELETE FROM admin_acc_tbl WHERE id = '$delete_id'";
		if (mysqli_query($con, $delete_acc) === true) {
			if ($delete_id === $_SESSION['user_id']) {
				session_destroy();
				header('location:../index.php');
			}
			else{
				header("Location: ../admins.php");
			}

		}
		else{
			die($con->error);
		}
	}
	else{
		die($con->error);
	}

}


?>