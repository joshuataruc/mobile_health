<?php
include_once '../session_check2.php';
include_once '../dbase/dbase.php';

$id = htmlspecialchars($_GET['announcement_id']);
$select_data = "SELECT * FROM announcement_tbl WHERE announcement_id = '$id'";
$data_query = mysqli_query($con, $select_data);
$row = $data_query->fetch_assoc();


 ?>
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

		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="card input-card">
				<div class="card-body">
					<form action="process.php" method="post">
						<div class="row">
							<input type="hidden" name="id" value="<?php echo $row['announcement_id'] ?>">
							<div class="form-group col-md-12">
								<label>Event Name</label>
								<textarea rows="3" class="form-control" name="event_name"><?php echo $row['event_name']?></textarea>
							</div>
							<div class="form-group col-md-6" >
								<label for="event_date">Date of Event</label>
								<input type="date" name="event_date" id="event_date" class="form-control" value="<?php echo $row['event_date'] ?>">
							</div>
							<div class="form-group col-md-6">
								<label for="time">Event Time</label>
								<select class="browser-default custom-select" name="event_time" id="time" >
								  <option hidden value="<?php echo $row['event_time'] ?>" selected><?php echo $row['event_time'] ?></option>
								  <option value="8:00 AM">8:00 AM</option>
								  <option value="8:30 AM">8:30 AM</option>
								  <option value="9:00 AM">9:00 AM</option>
								  <option value="9:30 AM">9:30 AM</option>
								  <option value="10:00 AM">10:00 AM</option>
								  <option value="10:30 AM">10:30 AM</option>
								  <option value="11:00 AM">11:00 AM</option>
								  <option value="11:30 AM">11:30 AM</option>
								  <option value="1:00 PM">1:00 PM</option>
								  <option value="1:30 PM">1:30 PM</option>
								  <option value="2:00 PM">2:00 PM</option>
								  <option value="2:30 PM">2:30 PM</option>
								  <option value="3:00 PM">3:00 PM</option>
								  <option value="3:30 PM">3:30 PM</option>
								  <option value="4:00 PM">4:00 PM</option>
								  <option value="4:30 PM">4:30 PM</option>
								  <option value="5:00 PM">5:00 PM</option>
								</select>
							</div>
							<div class="col-md-12">
								<input type="submit" id="submit-btn" name="upd_announce" value="Update Announcement" class="float-right btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="../js/jquery.min.js"></script>
		<script>
			// var today = new Date().toISOString().split('T')[0];
			var	today = $('#event_date').val();
			document.getElementsByName("event_date")[0].setAttribute('min', today);
		</script>
	</body>
	</html>

