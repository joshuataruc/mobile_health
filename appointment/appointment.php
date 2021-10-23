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
					<form action="insert_appointment.php" method="post">
						<div class="row">
							
							<div class="form-group col-md-12">
								<label>Name of Appointment </label>
								<textarea rows="3" class="form-control" name="appoint_name"></textarea>
							</div>
							<div class="form-group col-md-3" >
								<label for="event_date">Date of Appointment</label>
								<input type="date" name="event_date" id="appoint_date" class="form-control" required="">
							</div>
							<div class="form-group col-md-3">
								<label for="time">Appointment Start</label>
								<select class="browser-default custom-select" name="appoint_start" id="time" required>
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
							<div class="form-group col-md-3" >
								<label for="time">Appointment End</label>
								<select class="browser-default custom-select" name="appoint_end" id="time" required>
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
							<div class="form-group col-md-3">
								<label for="interval">Interval</label>
								<select class="browser-default custom-select" name="interval" id="interval" required>
									<option hidden selected></option>
								  <option value="30">30 Minutes</option>
								  <option value="60">60 Minutes</option>
								</select>
								
							</div>
							<div class="col-md-12">
								<input type="submit" id="submit-btn" name="login" value="Insert Appointment" class="float-right btn btn-primary">
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

