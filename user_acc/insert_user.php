<?php 

include_once '../session_check2.php';
if (isset($_POST['login'])) {
	include_once '../dbase/dbase.php';
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$midname = mysqli_real_escape_string($con, $_POST['midname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$dob = mysqli_real_escape_string($con, $_POST['dob']);
	$cont_num = mysqli_real_escape_string($con, $_POST['cont_num']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$password = mysqli_real_escape_string($con, md5($_POST['password']));

	$select_user = "SELECT * FROM user_information_tbl WHERE username = '$username'";
	$slect_query = mysqli_query($con, $select_user) or die($con->error);
	if (mysqli_num_rows($slect_query) > 0) {
		echo "<script>alert('Username Already Exist'); location.href='../index.php';</script>";
		die();
	}
	else{
		$insert_user = "INSERT INTO user_information_tbl(username, password, first_name, last_name, middle_name, dob, address, cont_number)VALUES('$username', '$password', '$fname', '$lname', '$midname', '$dob', '$address', '$cont_num')";
	if (mysqli_query($con, $insert_user) === true) {
			header("Location: ../user_acc.php");
	}
	else{
		die($con->error);
	}
	}


	

}


 ?>