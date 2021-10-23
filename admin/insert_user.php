<?php 

include_once '../dbase/dbase.php';
include_once '../session_check2.php';

$fname = htmlspecialchars($_POST['fname']);
$midname = htmlspecialchars($_POST['midname']);
$lname = htmlspecialchars($_POST['lname']);
$username = htmlspecialchars($_POST['username']);
$position = htmlspecialchars($_POST['position']);
$cont_num = htmlspecialchars($_POST['cont_num']);
$address = htmlspecialchars($_POST['address']);
$password = htmlspecialchars(md5($_POST['password']));


$select_user = "SELECT * FROM admin_registration_tbl WHERE username = '$username'";
$user_query = mysqli_query($con, $select_user);
if (mysqli_num_rows($user_query) > 0) {
	echo "Username already exist";
}
else{
	$insert_user = "INSERT INTO admin_registration_tbl (username, password, first_name, last_name, mid_name, address, cont_number, position)VALUES('$username', '$password', '$fname', '$lname', '$midname', '$address', '$cont_num', '$position')";
	if (mysqli_query($con, $insert_user) === true) {
		$insert_admin_acc = "INSERT INTO admin_acc_tbl(username, password)VALUES('$username', '$password')";
		if (mysqli_query($con, $insert_admin_acc) === true) {
			header("Location: ../admins.php");
		}
		else{
			echo "Error Something went wrong please try again";
		}
	}
	else{
		die($con->error);
	}
}





?>