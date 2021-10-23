<?php 

include_once 'dbase/dbase.php';
$select_appointment = "SELECT * FROM appointment";
$appointment_query = mysqli_query($con, $select_appointment);




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="datatables/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" type="text/css" href="datatables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
		.close{
			margin-top: 10px;
			margin-right: 15px;
		}
		.add_btn{
			border-radius: 50px;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-12 col-lg-12">
			<a href="appointment/appointment.php" class=" btn add_btn btn-outline-dark float-right" data-toggle="tooltip" data-placement="right" title="Add Appointment" ><i class="fas fa-plus"></i></a>
		</div>
	</div>
	<div class="container-fluid">

		<table id="appointment_tbl" class="table display table-hover" >
			<thead>
				<tr>
					<th>Appointment Name</th>
					<th>Date </th>
					<th>Time</th>
					<th>Interval</th>
					<th>Action</th>
				</tr>				 	
			</thead>	
			<tbody>
				<?php while ($appointment_row = $appointment_query->fetch_assoc()):?>
					<tr>
						<td><?php echo $appointment_row['appointment_name'] ; ?></td>
						<td><?php echo $appointment_row['appointment_date'] ; ?></td>
						<td><?php echo $appointment_row['appointment_time'] .' - '. $appointment_row['appointment_end'] ; ?></td>
						 <td><?php echo $appointment_row['appointment_interval']; ?></td>

						<td>
							<a href="appointment/update_appointment_form.php?appointment_id=<?php echo $appointment_row['appointment_id']; ?>"  class="btn btn-info house_btn"  data-toggle="tooltip" title="Update Appointment"><i class="fas fa-pen text-white"></i></a>

							<a href="appointment/process.php?delete_id=<?php echo $appointment_row['appointment_id']; ?>" onclick="return confirm('Are you sure you want to delete this Appointment?');" class="btn btn-danger"  data-toggle="tooltip" title="Delete Appointment"><i class="far fa-trash-alt"></i></a>
							<a href="reg_appointment.php?appointment_id=<?php echo $appointment_row['appointment_id']; ?>"  class="btn btn-success house_btn"  data-toggle="tooltip" title="View Registered Appointment"><i class="fas fa-eye text-white"></i></a>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>


	<script src="https://kit.fontawesome.com/428feb9164.js"></script>
	<script src="datatables/jquery-3.3.1.min.js"></script>
	<script src="datatables/jquery.dataTables.min.js"></script>
	<script src="datatables/dataTables.bootstrap4.min.js"></script>
	<script src="datatables/dataTables.buttons.min.js"></script>
	<script src="datatables/Buttons-1.5.6/js/buttons.bootstrap4.min.js"></script>
	<script src="datatables/jszip.min.js"></script>
	<script src="datatables/pdfmake.min.js"></script>
	<script src="datatables/vfs_fonts.js"></script>
	<script src="datatables/buttons.html5.min.js"></script>
	<script src="datatables/buttons.print.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script>
		$('#appointment_tbl').DataTable({

			dom: 'lBfrtip',
			"lengthMenu": [
			[10, 25, 50, -1],
			[10, 25, 50, "All"]
			],
			buttons: [
			'excelHtml5',
			'csvHtml5',
			'pdfHtml5',
			'print'

			],
			language: {
			    paginate: {
			      next: '<i class="fas fa-chevron-right"></i></i>',
			      previous: '<i class="fas fa-chevron-left"></i></i>'  
			    }
			  }

		});
		$('[data-toggle="tooltip"]').tooltip();
	</script>
</body>
</html>