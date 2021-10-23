<?php 
session_start();
include_once 'dbase/dbase.php';


$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$pass = md5($password);

$msg= '';

$select_username = "SELECT * FROM admin_registration_tbl WHERE username = '$username'";
$username_query = mysqli_query($con, $select_username) or die($con->error);
if (mysqli_num_rows($username_query) > 0) {
	$select_account = "SELECT * FROM admin_registration_tbl WHERE username = '$username' AND password = '$pass'";
	$account_query = mysqli_query($con, $select_account) or die($con->error);
	if (mysqli_num_rows($account_query) == 1 ) {
		$get_user_id = $account_query->fetch_assoc(); 
		$_SESSION['user_id'] = $get_user_id['id'];
		$_SESSION['user_username'] = $get_user_id['username'];
		$_SESSION['user_fname'] = $get_user_id['first_name'];
		$_SESSION['user_lname'] = $get_user_id['last_name'];

			header('location:announcement.php');
		

	}
	else{
		$msg = "Wrong Credentials";
	}//end else
	

}
else{
	echo "no username";
}



 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 	<link rel="icon" href="image/Concepcion_Tarlac.png">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
 	<style type="text/css">
		.login-card{
			position: absolute;
			margin:0;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		/*.card{
			width: 50vw;
		}*/
		h2{
			text-align: center;
		}
		a{
			margin-left: 45%;
			margin-right: 45%;
			display:block;
		}
		.bg-image img{
			width: 15vw;
			margin-top: 10px;
			display: block;
			margin-right: auto;
			margin-left: auto;
			margin-bottom: 15px;
		}
	</style>
 </head>
 <body>
<div class="container login-card">
	<div class="bg-image">
			<img src="image/Page.svg">
		</div>
	<div class="card">
		 <div class="card-body">
		 	<h2 class="mx-auto"><i class="fas fa-exclamation-triangle"></i><?php echo $msg; ?></h2>
		 	<a href="index.php" class="btn btn-primary">Go Back</a>
		 </div>
	</div>
</div>
 
 </body>
 </html>