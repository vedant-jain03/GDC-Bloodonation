<?php
 
if(isset($_GET['login'])) {
 
ob_start();

$cn = mysql_connect("localhost", "bloodona_mood704", "chaitanya1234");
mysql_select_db("bloodona_mood704", $cn);
 
 $a = $_GET['username'];
 $b = $_GET['password'];
 
 $c = "SELECT * FROM login WHERE username='$a' AND password='$b'";
 $d = mysql_query($c) or die(mysql_error());
  
 $count = mysql_num_rows($d);
 
 if($count==1) {
  $_SESSION['login']=$a;  
	
	echo "<script>window.location.href='hr.php';</script>";
 } else {
	echo "INVALID USERID PASSWORD COMBINATION";
 }
 ob_end_flush();
 }
?>




<html>

<head>
    <meta charset="UTF-8">
    <title>Blood Donation</title>
	 <link rel = "icon" href = "front_page/img/logo.jpg"
        type = "image/x-icon"> 
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminlogin/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="hr/css/top_nav.css" rel="stylesheet">
    <script data-ad-client="ca-pub-9494752717912198" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    
     <!-- END starts -->
<div class="topnav" id="myTopnav">

  <a  href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="hospital.html">Hospital</a>
  <a href="contact.php">Contact</a>
  <a class="active" href="register.php">Hospital Login</a>
  <a href="hospital_registration.php">Hospital Registration</a>
 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
    <!-- END nav -->

    <div id="container-login" style="margin-bottom:50px;">
        
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>
          
        <form method="GET">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input name="username" id="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input name="password" id="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">Remember Me</span>
            </div>

            <input name="login" type="submit" />
        </form>

        

        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            Don't have an account yet?
            <a href="hospital_registration.php"><button id="register-link">Register here</button></a>
        </div>
   
</select> 
  </div>
    <script src="hr/js/top_nav.js"></script>
</body>

</html>