<?php 
include_once '../session_check2.php';
include_once '../dbase/dbase.php';

$id = htmlspecialchars($_GET['notif_id']);
$select_data = "SELECT * FROM notification_tbl WHERE notification_id = '$id'";
$data_query = mysqli_query($con, $select_data);
$row = $data_query->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Sta Monica</title>
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
							<input type="hidden" class="form-control" id="reminder_name" name="reminder_id" value="<?php echo $row['notification_id'] ?>">
							<div class="form-group col-md-12 col-lg-12 col-sm-12">
								<label for="reminder_name">Reminder Name</label>
								<input type="text" class="form-control" id="reminder_name" name="reminder_name" value="<?php echo $row['reminder_name'] ?>">
							</div>
							<div class="form-group col-md-12 col-lg-12 col-sm-12">
								<label for="reminder_content">Reminder Content</label>
								<textarea class="form-control" id="reminder_content" rows="3" name="reminder_content"><?php echo $row['reminder_content'] ?></textarea>
							</div>
							<div class="col-lg-12 col-sm-12 col-md-12">
								<input type="submit" name="upd_btn" id="submit-btn" class=" mt-4 float-right btn btn-primary" value="Update Notification">
							</div>

							
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="../js/jquery.min.js"></script>
		<script src="../js/date.js"></script>
	</body>
	</html>

