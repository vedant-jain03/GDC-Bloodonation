<?php
	if(isset($_POST['register'])) {
		include('inc_config.php');
		
			$a = $_POST['name'];
			$b = $_POST['bg'];
			$c = $_POST['mobile'];
			$d = $_POST['email'];
			$e = $_POST['address'];
			$f = $_POST['city'];		
			$g = $_POST['pswd'];		
			
			$h = "INSERT INTO blood (name, blood_group, mobile, email, address, city, password) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
			$i = mysql_query($h) or die(mysql_error());
			
			echo "<script>alert('You are successfully registered !!!');</script>";
			//echo "<script>window.location.href='index.php';</script>";
	}
?>
  <?php include('inc_menu.php');?>
  
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
<script data-ad-client="ca-pub-9719935806824171" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


    <!-- Title Page-->
    <title>Blood Donation</title>
        <link rel = "icon" href = "front_page/img/logo.jpg"
        type = "image/x-icon">  
    <!-- Icons font CSS-->
    <link href="register_data/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="register_data/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="register_data/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="register_data/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
	

    <!-- Main CSS-->
    <link href="register_data/css/main.css" rel="stylesheet" media="all">
	<style>

body {font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #E3DAC9;;
}

.topnav a {
  float: left;
  display: block;
   border-right:1px solid #333;
  color: #000000;
  text-align: center;
  padding: 16px 18px;
  text-decoration: none;
  font-size: 20px;
}

.active {
  background-color: #F8F8FF;
  color: white;
}

.topnav .icon {
  display: none;
}



@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
     display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
     display: block;
    width: 100%;
    text-align: left;
  }
}

</style>
	
</head>

<body style="background:#F5FCFF;"> 
  
<br><br>


    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <center><h2 class="title">REGISTER YOURSELF AS DONOR</h2></center>
					
                    <form method="POST">
					
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name">
                        </div>
						
                       <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="PHONE NO." name="mobile">
                        </div>
						
							
                       <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="EMAIL" name="email">
                        </div>
						
					   
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="bg">
                                    <option disabled="disabled" selected="selected" name="bg">SELECT BLOOD GROUP</option>
                                            <option value="a+">A+</option>
											<option value="a-">A-</option>
											<option value="b+">B+</option>
											<option value="b-">B-</option>
											<option value="ab+">AB+</option>
											<option value="ab-">AB-</option>
											<option value="o+">O+</option>
											<option value="o-">O-</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						
						<div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="city">
                                    <option disabled="disabled" selected="selected" name="city" >SELECT CITY</option>
                                     <?php include('inc_cities.php'); ?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ADDRESS" name="address">
                        </div>
						
						<div class="input-group">
                            <input class="input--style-1" type="password" placeholder="PASSWORD" name="pswd">
                        </div>
                       
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="register">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="register_data/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="register_data/vendor/select2/select2.min.js"></script>
    <script src="register_data/vendor/datepicker/moment.min.js"></script>
    <script src="register_data/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="register_data/js/global.js"></script>

       <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->