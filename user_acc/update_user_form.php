<?php 
include_once '../session_check2.php';
include_once '../dbase/dbase.php';
$user_id = htmlspecialchars($_GET['user_id']);
$select_user = "SELECT * FROM user_information_tbl WHERE id = '$user_id'";
$user_query = mysqli_query($con, $select_user) or die($con->error);
$user_row = $user_query->fetch_assoc();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sta Monica</title>
	<link rel="icon" href="../image/Concepcion_Tarlac.png">
	<link rel="icon" href="../image/Concepcion_Tarlac.svg">
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
					<form action="process.php" method="post">
						<div class="row">
							<input type="hidden" name="id" class="form-control" value="<?php echo $user_row['id'] ?>">
							<div class="form-group col-md-4">
								<label>First Name</label>
								<input type="text" name="fname" class="form-control" value="<?php echo $user_row['first_name'] ?>">
							</div>
							<div class="form-group col-md-4">
								<label>Middle Name</label>
								<input type="text" name="midname" class="form-control" value="<?php echo $user_row['middle_name'] ?>">
							</div>
							<div class="form-group col-md-4">
								<label>Last Name</label>
								<input type="text" name="lname" class="form-control" value="<?php echo $user_row['last_name'] ?>">
							</div>
							<div class="form-group col-md-12">
								<label>Username</label>
								<input type="text" name="username" class="form-control" value="<?php echo $user_row['username'] ?>">
							</div>
							<div class="form-group col-md-6">
								<label>Date of Birth</label>
								<input type="date" name="dob" id="appoint_name" class="form-control" value="<?php echo $user_row['dob'] ?>">
							</div>
							<div class="form-group col-md-6">
								<label>Contact Number</label>
								<input type="text" name="cont_num" class="form-control phone"  onkeypress='validate(event)' onpaste="return false;" maxlength="11" value="<?php echo $user_row['cont_number'] ?>">
							</div>
							<div class="form-group col-md-12">
								<label>Address</label>
								<textarea rows="3" class="form-control" name="address"><?php echo $user_row['cont_number'] ?></textarea>
							</div>
							<div class="form-group col-md-6" >
								<label>Password</label>
								<input type="password" name="password" id="password" class="form-control" >
								<small class="text-muted">IF YOU WONT CHANGE THE PASSWORD LEAVE IT BLANK</small><br>
								<label id="pass-message"></label>
							</div>
							<div class="form-group col-md-6">
								<label>Confirm Password</label>
								<input type="password" name="password" id="con-password" class="form-control" ><br>
								<input type="submit" id="submit-btn" name="upd_users" value="Update User" class="float-right btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="../js/jquery.min.js"></script>

		<script src="../js/number_only_input.js"></script>
		<script type="text/javascript">
			var today = new Date().toISOString().split('T')[0];
			document.getElementsByName("dob")[0].setAttribute('max', today);
			
				$('#password, #con-password').on('keyup', function(){
				if ($('#con-password').val() == $('#password').val()) {
					$('#pass-message').html('Password Match').css('color', '#007bff ');
					$('#submit-btn').attr('disabled', false);
				}
				else{
					$('#pass-message').html('Password did not Match').css('color', '#dc3545  ');
					$('#submit-btn').attr('disabled', true);

				}
			});

		</script>
	</body>
	</html>

