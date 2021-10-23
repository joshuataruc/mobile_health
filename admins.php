

<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>MHIS</title>
      <link rel="icon" href="image/logomhis.png">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
   </head>
   <body>
      <div class="wrapper">
         <div class="header">
            <div class="header-menu">
               <div class="title">MOBILE HEALTH INFORMATION SYSTEM</div>
               <ul>
                  <li><span style="color: white; margin-top:50px;">Welcome <?php echo $_SESSION['user_fname'] . ' ' .  $_SESSION['user_lname']; ?></span></li>
                  <li><a href="logout.php"><i class="fas fa-user"></i><span>Logout </span></a></li>
               </ul>
            </div>
         </div>
         <div class="sidebar">
            <div class="sidebar-menu">
               <center class="profile">
                  <!-- logo here -->
               </center>
               <li class="item">
                  <a href="announcement.php" class="menu-btn">
                  <i class="fas fa-bullhorn"></i></i><span>Announcement </span>
                  </a>
               </li>
               <li class="item" id="profile">
                  <a href="notification.php" class="menu-btn">
                  <i class="fas fa-bell"></i><span>Notification</span>
                  </a>
               </li>
                <hr>
               <li class="item">
                  <a href="appointment.php" class="menu-btn">
                  <i class="far fa-calendar-check"></i></i><span>Appointment </span>
                  </a>
               </li>
               
               
               <hr>
               <li class="item">
                  <a href="user_acc.php" class="menu-btn">
                  <i class="fas fa-user-alt"></i><span>User Information </span>
                  </a>
               </li>
               <li class="item">
                  <a href="pending_user.php" class="menu-btn">
                <i class="fas fa-user-clock"></i><span>Pending User </span>
                  </a>
               </li>
               <hr>
               <li class="item active">
                  <a href="admin.php" class="menu-btn">
                  <i class="fas fa-user-tie"></i></i><span>Admins </span>
                  </a>
               </li>
               <li class="item">
                  <a href="admin_info.php" class="menu-btn">
                  <i class="fas fa-info"></i></i><span>Admin Information </span>
                  </a>
               </li>
            </div>
         </div>
         <div class="main-container">
            <div class="house-table">
               <?php include 'admin_acc/view_admin_acc.php'; ?>
            </div>
         </div>
      </div>
   </body>
</html>

