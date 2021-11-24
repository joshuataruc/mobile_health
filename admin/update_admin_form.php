<?php
include_once '../session_check2.php';
include_once '../dbase/dbase.php';
$admin_id = htmlspecialchars($_GET['admin_id']);
$select_admin = "SELECT * FROM admin_registration_tbl WHERE id = '$admin_id'";
$admin_query = mysqli_query($con, $select_admin) or die($con->error);
$admin_row = $admin_query->fetch_assoc();
// echo $address = $admin_row['address'];



?>
<!DOCTYPE html>
<html>

<head>
	<title>Mobile Health Information System</title>
	<link rel="icon" href="../image/Concepcion_Tarlac.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/password.css">
	<style type="text/css">
		.input-card {
			position: absolute;
			margin: 0;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		.card {
			width: 60vw;
		}

		/*#submit-btn:hover{
			cursor: not-allowed;
		}*/
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="card input-card">
			<div class="card-body">
				<form action="process.php" method="post">
					<div class="row">
						<input type="hidden" name="id" value="<?php echo $admin_row['id']; ?>">
						<div class="form-group col-md-4">
							<label>First Name</label>
							<input type="text" name="fname" class="form-control" value='<?php echo $admin_row['first_name']; ?>'>
						</div>
						<div class="form-group col-md-4">
							<label>Middle Name</label>
							<input type="text" name="midname" class="form-control" value='<?php echo $admin_row['mid_name']; ?>'>
						</div>
						<div class="form-group col-md-4">
							<label>Last Name</label>
							<input type="text" name="lname" class="form-control" value='<?php echo $admin_row['last_name']; ?>'>
						</div>
						<div class="form-group col-md-12">
							<label>Username</label>
							<input type="text" name="username" class="form-control" value='<?php echo $admin_row['username']; ?>'>
						</div>
						<div class="form-group col-md-6">
							<label>Position</label>
							<input type="text" name="position" class="form-control" value='<?php echo $admin_row['position']; ?>'>
						</div>
						<div class="form-group col-md-6">
							<label>Contact Number</label>
							<input type="text" name="cont_num" class="form-control phone" onkeypress='validate(event)' onpaste="return false;" maxlength="11" value='<?php echo $admin_row['cont_number']; ?>'>
						</div>
						<div class="form-group col-md-12">
							<label>Address</label>
							<textarea rows="3" class="form-control" name="address"><?php echo $admin_row['address']; ?></textarea>
						</div>
						<div class="form-group col-md-6">
							<label>Password</label>
							<input type="password" name="password" id="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" /><br />
						</div>
						<div class="form-group col-md-6">
							<label>Confirm Password</label>
							<input type="password" name="password" id="con-password" class="form-control" />
						</div>
						<div class="col-md-12">
							<div id="message">
								<h3>Password must contain the following:</h3>
								<p id="letter" class="invalid"> A <b>lowercase</b> letter</p>
								<p id="capital" class="invalid"> A <b>capital (uppercase)</b> letter</p>
								<p id="number" class="invalid"> A <b>number</b></p>
								<p id="length" class="invalid"> Minimum <b>8 characters</b></p>
								<p id="pass-message"></p>
							</div><br>
							<input type="submit" id="submit-btn" name="update_btn" value="Update User" class="float-right btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/number_only_input.js"></script>
	<script src="../js/confirm_password.js"></script>
	<script>
		$('#submit-btn').attr('disabled', false);
	</script>
</body>

</html>