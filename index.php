<?php
include_once 'dbase/dbase.php';
session_start();
$select_appointment = "SELECT * FROM appointment ORDER BY appointment_id DESC LIMIT 10";
$appointment_query = mysqli_query($con, $select_appointment);

$select_announcement = "SELECT * FROM announcement_tbl ORDER BY announcement_id DESC LIMIT 10";
$announcement_query = mysqli_query($con, $select_announcement) or die($con->error);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="image/logomhis.png">
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/utilities.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/password.css" />

  <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <title>MHIS</title>
  <style>
    .announcement {
      align-items: flex-start !important;
    }
  </style>
</head>

<body>
  <nav>
    <input type="checkbox" name="" id="check" />
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
      <li>
        <a href="#home">Home</a>
      </li>
      <li><a href="#datas">Announcements & Appintments</a></li>
      <!-- <li><a href="#">About Us</a></li> -->
      <li><a href="#register">Register</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>

  <div class="flex" id="home">
    <div class="hero-content">
      <h1>Mobile Health Information System</h1>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt officia
        enim quibusdam vel eos debitis cumque labore doloremque, at aliquam,
        ab mollitia, praesentium dolor natus recusandae magni pariatur.
        Deleniti, facilis.
      </p>
      <a href="#register" class="hero-btn">Register</a>
    </div>
    <div class="hero-img-container">
      <img src="image/main_img.png" class="hero-img" alt="" />
    </div>
  </div>
  <!-- end main page -->
  <div class="grid grid-2 container" id="datas">
    <div class="announcement">
      <h1>Announcement</h1>
      <?php while ($announce = $announcement_query->fetch_assoc()) : ?>
        <div class="card-announce">
          <div class="grid grid-2-col">
            <div class="">
              <h3><?php echo ucfirst($announce['event_name']) ?></h3>
              <p><small>Date:<?php echo date("M j, Y", strtotime($announce['event_date'])) . ' @ ' . $announce['event_time']  ?></small></p>
              <p><small>Location: <?php echo ucwords($announce['announcement_location']) ?></small></p>
              <p><small class="posted-by">
                <?php echo ucwords($announce['posted_by']) ?>
              </small></p>
            </div>
            <div class="">
              <img src="announcement/images/<?php echo $announce['announcement_image'] ?>" alt="<?php echo ucfirst($announce['event_name']) ?> image" class="thumbnail">
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <div class="appointment">
      <h1>Appointment</h1>
      <?php while ($appoint = $appointment_query->fetch_assoc()) : ?>
        <div class="card-appoint">
          <h3><?php echo ucfirst($appoint['appointment_name']) ?></h3>
          <small>Date:
            <?php echo date("M j, Y", strtotime($appoint['appointment_date'])) . ' @ ' . $appoint['appointment_time']  . ' to ' . $appoint['appointment_end'] ?></small>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- end appoint and announce page -->

  <div class="register" id="register">
    <div class="register-form">
      <?php if (isset($_SESSION['flash'])) { ?>
        <h3 class="text-danger"><?php echo $_SESSION['flash']; ?></h3>
        <?php unset($_SESSION['flash']) ?>
      <?php } ?>
      <?php if (isset($_SESSION['flash_success'])) { ?>
        <h3 class="text-success"><?php echo $_SESSION['flash_success']; ?></h3>
        <?php unset($_SESSION['flash_success']) ?>
      <?php } ?>
      <form action="user_acc/pending_user.php" method="post">
        <div class="row">
          <div class="input-3">
            <label for="" class="label">First Name</label>
            <input type="text" name="fname" class="form-control" required />
          </div>
          <div class="input-3">
            <label for="" class="label">Middle Name</label>
            <input type="text" name="midname" class="form-control" />
          </div>
          <div class="input-3">
            <label for="" class="label">Last Name</label>
            <input type="text" name="lname" class="form-control" required />
          </div>
        </div>
        <!-- end row -->
        <div class="row">
          <div class="input-1">
            <label for="" class="label">Username</label>
            <input type="text" name="username" class="form-control" required />
          </div>
        </div>
        <!-- end row -->
        <div class="row">
          <div class="input-2">
            <label for="" class="label">Date of Birth</label>
            <input type="date" name="dob" id="appoint_name" class="form-control" required="" />
          </div>
          <div class="input-2">
            <label for="" class="label">Contact Number</label>
            <input type="text" name="cont_num" class="form-control phone" required onkeypress="validate(event)" onpaste="return false;" maxlength="11" required />
          </div>
        </div>
        <!-- end row -->
        <div class="row">
          <div class="input-1">
            <label for="" class="label">Address</label>
            <textarea name="address" id="" rows="2"></textarea>
          </div>
        </div>
        <!-- end row -->
        <div class="row">
          <div class="input-2">
            <label for="" class="label">Password</label>
            <input type="password" name="password" id="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required /><br />
          </div>
          <div class="input-2">
            <label for="" class="label">Confirm Password</label>
            <input type="password" name="password" id="con-password" class="form-control" required />
          </div>
        </div>
        <div class="row">
          <div class="input-1">
            <div id="message">
              <h3>Password must contain the following:</h3>
              <p id="letter" class="invalid"> A <b>lowercase</b> letter</p>
              <p id="capital" class="invalid"> A <b>capital (uppercase)</b> letter</p>
              <p id="number" class="invalid"> A <b>number</b></p>
              <p id="length" class="invalid"> Minimum <b>8 characters</b></p>
              <p id="pass-message"></p>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="input-1">
            <input name="login" type="submit" value="Register" class="btn-reg" id="submit-btn" disabled />
          </div>
        </div>
        <!-- end row -->
      </form>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/confirm_password.js"></script>
  <script src="js/number_only_input.js"></script>
  <script type="text/javascript">
    var today = new Date().toISOString().split("T")[0];
    document.getElementsByName("dob")[0].setAttribute("max", today);

    
  </script>
</body>
<footer class="">
  <div class="grid grid-4-col">
    <div> <a href="#home">Home</a></div>
    <div> <a href="#datas">Announcements & Appintments</a></div>
    <div> <a href="#register">Register</a></div>
    <div> <a href="login.php">Login</a></div>
  </div>
</footer>

</html>