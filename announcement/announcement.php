<?php include_once '../session_check2.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mobile Health Information System</title>
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
					<form action="insert_announce.php" method="post">
						<div class="row">
							
							<div class="form-group col-md-12">
								<label>Event Name</label>
								<textarea rows="3" class="form-control" name="event_name"></textarea>
							</div>
							<div class="form-group col-md-6" >
								<label for="event_date">Date of Event</label>
								<input type="date" name="event_date" id="event_date" class="form-control" required="">
							</div>
							<div class="form-group col-md-6">
								<label for="time">Event Time</label>
								<select class="browser-default custom-select" name="event_time" id="time" required>
								  <option hidden selected></option>
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
								<input type="submit" id="submit-btn" name="login" value="Insert Announcement" class="float-right btn btn-primary">
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

