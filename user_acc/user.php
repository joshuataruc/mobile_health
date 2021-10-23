<?php include_once '../session_check2.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sta Monica</title>
	<link rel="icon" href="../image/Concepcion_Tarlac.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<style type="text/css">
		.input-card{
			position: absolute;
			margin:0;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		.card{
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
					<form action="insert_user.php" method="post">
						<div class="row">
							<div class="form-group col-md-4">
								<label>First Name</label>
								<input type="text" name="fname" class="form-control" required>
							</div>
							<div class="form-group col-md-4">
								<label>Middle Name</label>
								<input type="text" name="midname" class="form-control">
							</div>
							<div class="form-group col-md-4">
								<label>Last Name</label>
								<input type="text" name="lname" class="form-control" required>
							</div>
							<div class="form-group col-md-12">
								<label>Username</label>
								<input type="text" name="username" class="form-control" required>
							</div>
							<div class="form-group col-md-6">
								<label>Date of Birth</label>
								<input type="date" name="dob" id="appoint_name" class="form-control" required="">
							</div>
							<div class="form-group col-md-6">
								<label>Contact Number</label>
								<input type="text" name="cont_num" class="form-control phone" required onkeypress='validate(event)' onpaste="return false;" maxlength="11">
							</div>
							<div class="form-group col-md-12">
								<label>Purok / Sitio</label>
								<textarea rows="2" class="form-control" name="address"></textarea>
							</div>
							<div class="form-group col-md-6" >
								<label>Password</label>
								<input type="password" name="password" id="password" class="form-control" required><br>
								<label id="pass-message"></label>
							</div>
							<div class="form-group col-md-6">
								<label>Confirm Password</label>
								<input type="password" name="password" id="con-password" class="form-control" required><br>
								<input type="submit" id="submit-btn" name="login" value="Insert User" class="float-right btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="../js/jquery.min.js"></script>
		<script src="../js/confirm_password.js"></script>
		<script src="../js/number_only_input.js"></script>
		<script type="text/javascript">
			var today = new Date().toISOString().split('T')[0];
			document.getElementsByName("dob")[0].setAttribute('max', today);
		</script>
	</body>
	</html>

