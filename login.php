<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/logomhis.png">
    <title>MHIS</title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/utilities.css" />
    <link rel="stylesheet" href="css/nav.css" />
  </head>
  <body>
    <nav>
      <input type="checkbox" name="" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li><a href="index.php#datas">Announcements & Appintments</a></li>
        <!-- <li><a href="#">About Us</a></li> -->
        <li><a href="index.php#register">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
    <div class="container login">
      <div class="grid grid-2-col">
        <div class="">
          <img src="image/pc_login.svg" alt="" />
        </div>
        <div class="vertical-align">
          <div class="register-form">
          <form action="auth.php" method="post">
              <div class="input-1">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" />
              </div>
              <div class="input-1">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" />
              </div>
              <div class="input-1">
                <input
                  type="submit"
                  name="login"
                  value="Login"
                  class="btn-login"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
