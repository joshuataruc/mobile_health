<?php 

include_once 'dbase/dbase.php';
$select_user = "SELECT * FROM user_information_tbl";
$user_query = mysqli_query($con, $select_user);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Sta Monica</title>
	<link rel="icon" href="../image/Concepcion_Tarlac.svg">
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
			<a href="user_acc/user.php" class=" btn add_btn btn-outline-dark float-right" data-toggle="tooltip" data-placement="right" title="Add User"><i class="fas fa-plus"></i></a>
		</div>
	</div>
	<div class="container-fluid">

		<table id="user_tbl" class="table display table-hover" >
			<thead>
				<tr>
					<th>Username</th>
					<th>Name </th>
					<th>Address</th>
					<th>Contact #</th>
					<th>Date of Birth</th>
					<th>Action</th>
				</tr>				 	
			</thead>	
			<tbody>
				<?php while ($user_row = $user_query->fetch_assoc()):?>
					<tr>
						<td><?php echo $user_row['username'] ; ?></td>
						<td><?php echo $user_row['first_name'].' '.  $user_row['middle_name'].' '.  $user_row['last_name']; ?></td>
						<td><?php echo $user_row['address']; ?></td>
						<td><?php echo $user_row['cont_number']; ?></td>
						<td><?php $dob = strtotime($user_row['dob']); echo date('F d Y', $dob); ?></td>
						<td>
							<a href="user_acc/update_user_form.php?user_id=<?php echo $user_row['id']; ?>" class="btn btn-info house_btn" data-toggle="tooltip" title="Update User"><i class="fas fa-user-edit text-white"></i></a>
							<a href="user_acc/process.php?delete_id=<?php echo $user_row['id']; ?>" onclick="return confirm('Are you sure you want to delete this Admin?');" class="btn btn-danger" data-toggle="tooltip" title="Delete 
								User"> <i class="far fa-trash-alt"></i></a>
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
		$('#user_tbl').DataTable({

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