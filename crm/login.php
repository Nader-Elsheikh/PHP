<?php
session_start();
include("dbconnection.php");

if(isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];

        // Your other login activities here...

        $extra = "dashboard.php";
        echo "<script>window.location.href='".$extra."'</script>";
        exit();
    } else {
        $_SESSION['action1'] = "Invalid username or password";
        $extra = "login.php";
        echo "<script>window.location.href='".$extra."'</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="error-body no-top">
<div class="container">
  <div class="row login-container column-seperation">  
    <div class="col-md-5 col-md-offset-1">
      <h2>Sign in to CRM</h2>
      <p><a href="registration.php">Sign up Now!</a> for a webarch account, It's free and always will be..</p>
      <br>
    </div>
    <div class="col-md-5 "> <br>
      <p style="color:#F00"><?php echo isset($_SESSION['action1']) ? $_SESSION['action1'] : ''; ?><?php echo isset($_SESSION['action1']) ? $_SESSION['action1'] = '' : ''; ?></p>
      <form id="login-form" class="login-form" action="" method="post">
        <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Email</label>
            <div class="controls">
              <div class="input-with-icon  right">                                       
                <i class=""></i>
                <input type="email" name="email" id="txtusername" class="form-control" required="true">                                 
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Password</label>
            <span class="help"></span>
            <div class="controls">
              <div class="input-with-icon  right">                                       
                <i class=""></i>
                <input type="password" name="password" id="txtpassword" class="form-control" required="true">                                 
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="control-group  col-md-10">
            <div class="checkbox checkbox check-success"> <a href="forgot-password.php">Forgot Password </a>&nbsp;&nbsp;
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            <button class="btn btn-primary btn-cons pull-right" name="login" type="submit">Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/login.js" type="text/javascript"></script>
</body>
</html>
