<?php 
include_once '../dbase/dbase.php';
include_once '../session_check2.php';

if (isset($_GET['confirm'])) {
	$confirm_id = htmlspecialchars($_GET['confirm']);
	$move_data = "SELECT * FROM  pendinguser WHERE id = '$confirm_id'";
	$select_query = mysqli_query($con, $move_data) or die($con->error);
	if (mysqli_num_rows($select_query) > 0) {
		$row = $select_query->fetch_assoc();
		$fname = $row['first_name'];
		$midname = $row['middle_name']; 
		$lname = $row['last_name'];
		$username = $row['username'];
		$dob = $row['dob'];
		$cont_num = $row['cont_number'];
		$address = $row['address'];
		$password = $row['password']; 
		$insert_user = "INSERT INTO user_information_tbl (username, password, first_name, last_name, middle_name, dob, address, cont_number)VALUES('$username', '$password', '$fname', '$lname', '$midname', '$dob', '$address', '$cont_num')";
		if (mysqli_query($con, $insert_user) === true) {
			$delete_data = "DELETE FROM pendinguser WHERE  id = '$confirm_id'";
			if (mysqli_query($con, $delete_data)===true) {
				header("Location: ../pending_user.php");
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


if (isset($_GET['deny'])) {
	$deny = htmlspecialchars($_GET['deny']);
	$delete_data = "DELETE FROM pendinguser WHERE  id = '$deny'";
	if (mysqli_query($con, $delete_data)===true) {
		header("Location: ../pending_user.php");
	}
	else{
		die($con->error);
	}

}



?>

